<?php

namespace App\Http\Controllers;

use App\Models\Post;
use Illuminate\Http\Request;

class PostController extends Controller
{
    //

    public function index()
    {
        return view('posts.add_post');
    }

    public function store(Request $request)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $data = new Post();
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return redirect(route('show_posts'))->with('success', 'Data Saved Successfully');
    }



    public function show()
    {
        $datas = Post::paginate(5);
        return view('posts.show_posts', compact('datas'));
    }

    public function edit($id)
    {

        $datas = Post::find($id);
        return view('posts.edit_post', compact('datas'));
    }

    public function update(Request $request, $id)
    {
        $request->validate([
            'title' => 'required',
            'body' => 'required',
        ]);
        $data = Post::find($id);
        $data->title = $request->title;
        $data->body = $request->body;
        $data->save();
        return redirect(route('show_posts'))->with('success', 'Data Updated Successfully');
    }
}
