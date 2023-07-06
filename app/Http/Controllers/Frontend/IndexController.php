<?php

namespace App\Http\Controllers\Frontend;

use App\Http\Controllers\Controller;
use App\Models\NewsPost;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Session;

class IndexController extends Controller
{
    public function index()
    {

    }

    public function newsDetails($id, $slug)
    {
        $news = NewsPost::findOrFail($id);

        $tags = $news->tags;
        $tags_all = explode(',', $tags);

        $cat_id = $news->category_id;
        $relatedNews = NewsPost::where('category_id', $cat_id)->where('id', '!=', $id)->orderBy('id', 'DESC')->limit(6)->get();

        //   $newsKey = 'news' . $news->id;
        //   if (Session::has($newsKey)) {
        //       $news->increment('view_count');
        //       Session::put($newsKey, 1);
        //   }

        $news->increment('view_count');

        $newnewspost = NewsPost::orderBy('id', 'DESC')->limit(3)->get();
        $newspopular = NewsPost::orderBy('view_count', 'DESC')->limit(3)->get();

        return view('frontend.news.news_details', compact('news', 'tags_all', 'relatedNews', 'newnewspost', 'newspopular'));
    }
}