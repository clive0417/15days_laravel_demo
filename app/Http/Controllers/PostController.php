<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Post;

class PostController extends Controller
{
    public function index() 
    {
        $posts = Post::all();
        return view('posts.index',['posts'=>$posts]);

    }

    public function create() 
    {
        return view('posts.create');

    } 

    public function store(Request $request) // 用request 來承接create 所寫的資料 
    {
        $post = new Post;
        //->all 轉成array
        $post->fill($request->all());
        $post->save();
        //redirect to index
        return redirect('/posts/admin'); 

    } 

    public function admin() 
    {
        $posts = Post::all();
        return view('posts.admin',['posts'=>$posts]);

    }

    //Post 代表POSt model
    public function show(Post $post) 
    {
        return view('posts.showByAdmin',['post'=>$post]);

    }
    public function edit(Post $post) 
    {     //['post'=>$post] 代表將資料傳入
        return view('posts.edit',['post'=>$post]);


    }

    public function update(Request $request,Post $post) 
          // request 寫在第一個在
    {     //['post'=>$post] 代表將資料傳入
        $post->fill($request->all());//將request 的資料帶入，$post 變數中
        $post->save();//資料存到資料庫
        return redirect('/posts/admin'); 


    }



}
