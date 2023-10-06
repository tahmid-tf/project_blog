<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id', 'desc')->paginate(14);
        $recent_blogs = Blog::orderBy('id', 'desc')->take(4)->get();
        $footer_blogs = Blog::orderBy('id', 'desc')->take(2)->get();
        return view("front.index", compact('blogs', 'recent_blogs', 'footer_blogs'));
    }

    public function show($id)
    {
        $blog = Blog::findOrFail($id);
        return view("front.single_blog", compact('blog'));
    }

    public function about()
    {
      return view("front.about");
    }

    public function search()
    {

        $searchTerm = request('search');
        $blogs = Blog::where('title', 'LIKE', '%' . $searchTerm . '%')->orderBy('id', 'desc')->paginate(14);
        $recent_blogs = Blog::orderBy('id', 'desc')->take(4)->get();
        $footer_blogs = Blog::orderBy('id', 'desc')->take(2)->get();
        return view("front.index", compact('blogs', 'recent_blogs', 'footer_blogs'));
    }

    public static function recent_blogs()
    {
        return $recent_blogs = Blog::orderBy('id', 'desc')->take(4)->get();
    }

    public static function footer_blogs()
    {
        return $recent_blogs = Blog::orderBy('id', 'desc')->take(2)->get();
    }

}
