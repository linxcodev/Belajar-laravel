<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use App\Models\Blog;

class BlogController extends Controller
{
    public function index()
    {
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

    public function create()
    {
      return view('blog/create');
    }

    public function store(Request $request)
    {
      $request->validate([
        'title' => 'required|min:5|max:20',
        'description' => 'required|min:8'
      ]);
      // insert cara biasa
      // $data = new Blog;
      // $data->title = 'halo kendal';
      // $data->description = 'halo halo kendal halo halo kendal halo halo kendal';
      // $data->save();

      // insert by mass assigment
      Blog::create([
        'title' => $request->title,
        'description' => $request->description
      ]);

      return redirect('blog'); // url
    }

    public function destroy($id)
    {
      // delete biasa
      // $blog = Blog::find(3);
      // $blog->delete();

      if (!$id)
        abort('404');

      // delete menggunakan destroy (otomatis mencari id)
      Blog::destroy($id); // single
      // Blog::destroy([4,2]);

      return redirect('blog');
    }

    public function restore()
    {
      Blog::withTrashed()->restore(); //restore soft delete

      return redirect('blog');
    }

    public function fc($id)
    {
      $blog = Blog::find($id);
      $blog->forceDelete();

      return redirect('blog');
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
