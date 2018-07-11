<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class BlogController extends Controller
{
    public function index()
    {
      return view('blog/inner');
    }

    public function show($id)
    {
      $nilai = "id sama dengan $id";
      // dd($users); metode trableshooting
      // $users = DB::table('users')->where('username', 'like', '%a%')->get();

      // DB::table('users')->insert(
      //   ['username' => 'john', 'password' => '789']
      // ); insert satu Data

      // DB::table('users')->insert([
      //   ['username' => 'johno', 'password' => '0'],
      //   ['username' => 'johnok', 'password' => '0']
      // ]); multiple insert

      // DB::table('users')
      //       ->where('id', 4)
      //       ->update(['username' => 'jhonnooo']);

      // $unescaped = "<b>unescaped</b>";

      // DB::table('users')->where('id', '>', 6)->delete();

      $users = DB::table('users')->get();

      return view('blog/home', ['blog' => $nilai, 'users'
      => $users]); // buat variable blog di views
    }
}
