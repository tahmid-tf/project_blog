<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(14);
        $recent_blogs = Blog::orderBy('id','desc')->take(4)->get();
        $footer_blogs = Blog::orderBy('id','desc')->take(2)->get();
        return view("front.index", compact('blogs', 'recent_blogs','footer_blogs'));
    }
}
