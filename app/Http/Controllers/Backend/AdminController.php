<?php

namespace App\Http\Controllers\Backend;

use App\Models\User;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Hash;
use Spatie\Permission\Models\Role;

class AdminController extends Controller
{
    public function index()
    {
        return view('admin.index');
    }

    public function adminLogout(Request $request)
    {
        Auth::guard('web')->logout();

        $request->session()->invalidate();

        $request->session()->regenerateToken();

        $notification = array(
         'message' => 'Admin Logout Successfully',
         'alert-type' => 'success'
        );

        return redirect('/admin/login')->with($notification);
    }

    public function adminLogin()
    {
        return view('admin.admin_login');
    }

    public function adminProfile()
    {
        $profile = User::find(Auth::user()->id);
        return view('admin.admin_view_profile', compact('profile'));
    }

    public function adminProfileStore(Request $request)
    {
        $id = Auth::user()->id;
        $data = User::find($id);
        $data->name = $request->name;
        $data->email = $request->email;
        $data->phone = $request->phone;
        $data->address = $request->address;
        $data->info = $request->info;
        $data->twitter_link = $request->twitter_link;

        if($request->file('profile_img')) {
            $file = $request->file('profile_img');
            @unlink(public_path('upload/user_img/' . $data->photo));
            $filename = date('YmdHi').$file->getClientOriginalExtension();
            $file->move(public_path('upload/user_img'), $filename);
            $data->profile_img = $filename;
        }

        $data->save();


        $notification = array(
           'message' => 'Admin Profile Updated Successfully.',
           'alert-type' => 'success',
        );

        return redirect()->back()->with($notification);
    }

    public function adminChangePassword()
    {
        $id = Auth::user()->id;
        $profile = User::find($id);

        return view('admin.admin_change_password', compact('profile'));
    }

    public function adminUpdatePassword(Request $request)
    {
        // validation
        $request->validate(
            [
              'old_password' => 'required',
              'new_password' => 'required|confirmed',
        ]
        );

        // match the old password
        if(!Hash::check($request->old_password, auth::user()->password)) {
            $notification = array(
               'message' => 'Old password does not Match!',
               'alert-type' => 'error',
            );

            return back()->with($notification);
        }

        // update new password
        User::whereId(auth()->user()->id)->update([
              'password' => Hash::make($request->new_password)
        ]);

        // message
        $notification = array(
           'message' => 'Password Change Successfully',
           'alert-type' => 'success'
        );

        return back()->with($notification);
    }

    public function allAdmin()
    {
        $alladminuser = User::where('role', 'admin')->latest()->get();

        //   dd($alladminuser);
        return view('backend.admin.all_admin', compact('alladminuser'));
    }

    public function addAdmin()
    {
        $roles = Role::all();
        return view('backend.admin.add_admin', compact('roles'));
    }


    public function storeAdmin(Request $request)
    {
        $user = new User();
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->password = Hash::make($request->password);
        $user->role = 'admin';
        $user->status = 'inactive';
        $user->save();


        if($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
           'message' => 'New Admin User Created Successfully',
           'alert-type' => 'success'

         );
        return redirect()->route('all.admin')->with($notification);
    }

    public function editAdmin($id)
    {
        $roles = Role::all();
        $adminuser = User::findOrFail($id);
        return view('backend.admin.edit_admin', compact('adminuser', 'roles'));
    }


    public function updateAdmin(Request $request)
    {
        $admin_id = $request->id;

        $user = User::findOrFail($admin_id);
        $user->name = $request->name;
        $user->email = $request->email;
        $user->phone = $request->phone;
        $user->role = 'admin';
        $user->status = 'active';
        $user->save();


        $user->roles()->detach();
        if($request->roles) {
            $user->assignRole($request->roles);
        }

        $notification = array(
           'message' => 'Admin User Updated Successfully',
           'alert-type' => 'success'

     );
        return redirect()->route('all.admin')->with($notification);
    }

    public function deleteAdmin($id)
    {
        $user =  User::findOrFail($id);
        if (!is_null($user)) {
            $user->delete();
        }

        $notification = array(
           'message' => 'Admin User Deleted Successfully',
           'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }

    public function inactiveAdminUser($id)
    {
        $user = User::findOrFail($id);

        $user->status = 'inactive';

        $user->save();

        $notification = array(
            'message' => 'Admin User Inactive',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }

    public function activeAdminUser($id)
    {
        $user = User::findOrFail($id);

        $user->status = 'active';


        $user->save();

        $notification = array(
            'message' => 'Admin User Active',
            'alert-type' => 'success'

        );

        return redirect()->back()->with($notification);
    }
}