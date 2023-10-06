<?php

namespace App\Http\Controllers;

use App\Models\Blog;
use Illuminate\Http\Request;

class FrontController extends Controller
{
    public function index()
    {
        $blogs = Blog::orderBy('id','desc')->paginate(10);
        return view("front.index", compact('blogs'));
    }
}
