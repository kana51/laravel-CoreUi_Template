<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    //
    public function __construct()
    {
        $this->middleware('auth');
    }

    public function index()
    {
        $posts = Post::all();

        return view('posts.index')->with('posts',$posts);
    }

    // 編集
        public function edit($id)
        {

            $post = Post::find($id);

            return view('posts.edit')->with('post',$post);

        }

        public function update(Request $request,$id)
        {
            $post = Post::find($id);

            $post->title = $request->title;
            $post->body = $request->body;
            $post->user_id = $request->user_id;

            $post->save();

            return redirect()->to('/posts');
        }

    // 新規作成
        public function create()
        {
            return view('posts.create');

        }

        public function store(Request $request)
        {

            // dd($request->all());
            $post = new Post;
            $post->user_id = $request->user_id;
            $post->title = $request->title;
            $post->body = $request->body;

            $post->save();

            return redirect()->to('/posts');

        }

    // 詳細
        public function show($id)
        {
            $post = post::find($id);

            return view('posts.show')->with('post',$post);
        }
    // 削除
        public function destroy($id)
        {
            $post = Post::find($id);
            $post->delete();
            return redirect()->to('/posts');
        }
}