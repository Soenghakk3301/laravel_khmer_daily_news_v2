<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use Illuminate\Http\Request;

class CategoryController extends Controller
{
    public function allCategory()
    {
        $categories = Categories::latest()->get();
        return view('backend.category.all_category', compact('categories'));
    }

    public function addCategory()
    {
        return view('backend.category.add_category');
    }

    public function storeCategory(Request $request)
    {
        Categories::insert([
             'category_name' => $request->category_name,
             'category_icon' => $request->category_icon,
        ]);

        $notification = array(
           'message' => 'Categories Create Successfully',
           'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function editCategory($id)
    {
        $category = Categories::find($id);
        return view('backend.category.edit_category', compact('category'));
    }

    public function updateCategory(Request $request)
    {
        $cate_id = $request->id;

        Categories::findOrFail($cate_id)->update([
            'category_name' => $request->category_name,
            'category_icon' => $request->category_icon
        ]);

        $notification = array(
           'message' => 'Category Updated Successfully',
           'alert-type' => 'success'
        );

        return redirect()->route('all.category')->with($notification);
    }

    public function deleteCategory($id)
    {
        Categories::findOrFail($id)->delete();

        $notification = array(
           'message' => 'Category Deleted Successfully',
           'alert-type' => 'success'
        );

        return redirect()->back()->with($notification);
    }
}