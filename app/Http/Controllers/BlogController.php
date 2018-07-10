<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/inner');
    }

    public function show($id)
    {
      $nilai = "id sama dengan $id";
      $users = ['fajrul', 'linxcodev', 'tiga'];
      
      return view('blog/home', ['blog' => $nilai,
      'users' => $users]); // buat variable blog di views
    }
}
