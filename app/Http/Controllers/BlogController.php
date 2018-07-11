<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
      $blog = Blog::all(); // select id all

      return view('blog/home', ['blogs' => $blog]);
    }

    public function show($id)
    {
      $blog = Blog::find($id); // mencari id
      
      return view('blog/blog', ['blogs' => $blog]); // buat variable blog di views
    }
}
