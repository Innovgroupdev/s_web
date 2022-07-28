<?php

namespace App\Http\Controllers\Blog;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('partials/index');
    }
    public function blog(){
        return view('partials/blog/index');
    }
    public function detail(){
        return view('partials/blog/detail');
    }
    public function category(){
        return view('partials/blog/category');
    }
    
}
