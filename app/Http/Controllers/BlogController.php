<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
      // insert cara biasa
      // $data = new Blog;
      // $data->title = 'halo kendal';
      // $data->description = 'halo halo kendal halo halo kendal halo halo kendal';
      // $data->save();

      // insert by mass assigment
      // Blog::create([
      //   'id' => 100,
      //   'title' => 'halo jg',
      //   'description' => 'halo jg halo jg halo jg halo jg'
      // ]);

      // delete biasa
      // $blog = Blog::find(3);
      // $blog->delete();

      // delete menggunakan destroy (otomatis mencari id)
      // Blog::destroy(5); single
      // Blog::destroy([4,2]);

      // Blog::withTrashed()->restore(); restore soft delete

      // menampilkan semua data
      $blog = Blog::all(); // select id all
      // $blog = Blog::withTrashed()->get(); // show soft delete

      return view('blog/home', ['blogs' => $blog]);
    }

    public function show($id)
    {
      // mnampilkan by id
      $blog = Blog::find($id); // mencari id

      if (!$blog) {
        // dd("Id not found");
        abort(404); // menampilkan halaman 404
      }

      return view('blog/blog', ['blogs' => $blog]); // buat variable blog di views
    }

    public function edit($id)
    {
      $blog = Blog::find($id); // mencari id

      if (!$blog)
        // dd("Id not found");
        abort(404); // menampilkan halaman 404

      return view('blog/edit', ['blogs' => $blog]); // buat variable blog di views
    }

    public function update(Request $request, $id)
    {
      // update cara 1
      // $blog = Blog::find(6);
      // $blog->id = 10;
      // $blog->save();

      // ,mass update
      Blog::where('id', $id)->update([
        'title' => $request->title,
        'description' => $request->description
      ]);

      $blog = Blog::find($id);
      return view('blog.blog', ['blogs' => $blog]);
    }
}
