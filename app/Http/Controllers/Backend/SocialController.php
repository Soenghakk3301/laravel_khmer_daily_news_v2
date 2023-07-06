<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Social;
use Illuminate\Http\Request;

class SocialController extends Controller
{
    public function socialSetting()
    {
        $social = Social::find(1);
        return view('backend.social.social_update', compact('social'));
    }

    public function updateSocialSetting(Request $request)
    {
        $social_id = $request->id;

        Social::findOrFail($social_id)->update([
            'facebook' => $request->facebook,
            'instagram' => $request->instagram,
            'youtube' => $request->youtube,
            'twitter' => $request->twitter,
            'telegram' => $request->telegram,
        ]);


        $notification = array(
            'message' => 'Social Setting Updated Successfully',
            'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}