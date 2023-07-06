<?php

namespace App\Http\Controllers\Backend;

use App\Http\Controllers\Controller;
use App\Models\Categories;
use App\Models\MultiImage;
use App\Models\NewsPost;
use App\Models\User;
use Carbon\Carbon;
use Illuminate\Http\Request;
use Intervention\Image\Facades\Image;

class NewsPostController extends Controller
{
    public function allNewsPost()
    {
        $allnews = NewsPost::latest()->get();
        return view('backend.news.all_news_post', compact('allnews'));
    }

    public function addNewsPost()
    {
        $categories = Categories::latest()->get();
        $adminuser = User::where('role', 'admin')->latest()->get();
        return view('backend.news.add_news_post', compact('categories', 'adminuser'));
    }

    public function storeNewsPost(Request $request)
    {
        $image = $request->file('image');
        $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
        Image::make($image)->resize(784, 436)->save('upload/news/'.$name_gen);
        $save_url = 'upload/news/'.$name_gen;

        $news_post_id = NewsPost::insertGetId([

            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),

            'news_description' => $request->news_description,
            'news_description_2' => $request->news_description_2,
            'news_description_3' => $request->news_description_3,
            'tags' => $request->tags,

            'breaking_news' => $request->breaking_news,

            'post_date' => date('d-m-Y'),
            'post_month' => date('F'),
            'image' => $save_url,
            'created_at' => Carbon::now(),
        ]);

        // multi images upload from here
        $images = $request->file('multi_img');

        foreach($images as $img) {
            $make_name = hexdec(uniqid()) . '.' . $img->getClientOriginalExtension();
            Image::make($img)->resize(770, 520)->save('upload/multi_image/' . $make_name);

            $uploadPath = 'upload/multi_image/' . $make_name;

            MultiImage::insert([
                   'news_post_id' => $news_post_id,
                   'news_post_multi_photo_name' => $uploadPath,
                   'created_at' => Carbon::now()
            ]);
        }

        $notification = array(
           'message' => 'News Post Inserted Successfully',
           'alert-type' => 'success'

        );

        return redirect()->route('all.news.post')->with($notification);
    }


    public function deleteNewsPost($id)
    {
        $post_image = NewsPost::findOrFail($id);
        $img = $post_image->image;
        unlink($img);

        NewsPost::findOrFail($id)->delete();

        $notification = array(
           'message' => 'News Post Deleted Successfully',
           'alert-type' => 'success'

       );
        return redirect()->back()->with($notification);
    }

    public function inactiveNewsPost($id)
    {
        NewsPost::findOrFail($id)->update(['status' => 0]);

        $notification = array(
            'message' => 'News Post InActive',
            'alert-type' => 'info'

        );
        return redirect()->back()->with($notification);
    }

    public function activeNewsPost($id)
    {
        NewsPost::findOrFail($id)->update(['status' => 1]);

        $notification = array(
            'message' => 'News Post Active',
            'alert-type' => 'info'

        );
        return redirect()->back()->with($notification);
    }

    public function editNewsPost($id)
    {
        $categories = Categories::latest()->get();
        $adminuser = User::where('role', 'admin')->latest()->get();
        $newspost = NewsPost::findOrFail($id);
        return view('backend.news.edit_news_post', compact('categories', 'adminuser', 'newspost'));
    }

    public function updateNewsPost(Request $request)
    {
        $newspost_id = $request->id;

        if ($request->file('image')) {
            $image = $request->file('image');
            $name_gen = hexdec(uniqid()).'.'.$image->getClientOriginalExtension();
            Image::make($image)->resize(784, 436)->save('upload/news/'.$name_gen);
            $save_url = 'upload/news/'.$name_gen;

            NewsPost::findOrFail($newspost_id)->update([

                'category_id' => $request->category_id,

                'user_id' => $request->user_id,
                'news_title' => $request->news_title,
                'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),

                'news_description' => $request->news_description,
                'news_description_2' => $request->news_description_2,
                'news_description_3' => $request->news_description_3,
                'tags' => $request->tags,

                'breaking_news' => $request->breaking_news,

                'post_date' => date('d-m-Y'),
                'post_month' => date('F'),
                'image' => $save_url,
                'updated_at' => Carbon::now(),

            ]);

            $notification = array(
               'message' => 'News Post Updated with Image Successfully',
               'alert-type' => 'success'

             );

            return redirect()->route('all.news.post')->with($notification);


        } else {

            NewsPost::findOrFail($newspost_id)->update([

            'category_id' => $request->category_id,
            'user_id' => $request->user_id,
            'news_title' => $request->news_title,
            'news_title_slug' => strtolower(str_replace(' ', '-', $request->news_title)),

            'news_description' => $request->news_description,
            'news_description_2' => $request->news_description_2,
            'news_description_3' => $request->news_description_3,
            'tags' => $request->tags,

            'breaking_news' => $request->breaking_news,

            'post_date' => date('d-m-Y'),
            'post_month' => date('F'),
            'updated_at' => Carbon::now(),

            ]);

            $notification = array(
               'message' => 'News Post Updated without Image Successfully',
               'alert-type' => 'success'

            );
            return redirect()->route('all.news.post')->with($notification);
        }
    }
}