<!--layouts. 的 . 代表資料夾-->
@extends('layouts.frontend')

@section('page_title')
<section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Edit Post</h4>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li class="active"><a href="/posts/admin">Blog Admin table</a>
                            </li>
                            <li class="active">Edit Post<</li>
                        </ol>
                    </div>
                </div>
            </div>
</section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        @if ($errors->any()) 
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error) 
                    <li>{{$error}}</li>

                
                @endforeach
            </ul>
            </div>
        @endif
        <form method="post" action="/posts/{{$post->id}}">

            <!--@csrf 塞 session token 去跨過csrf -->
            @csrf
            <!--傳統HTML只支持，post/get 不支持put/delete laravel 要特別加 -->
            <input type="hidden" name="_method" value="put">

            <div class="form-group">
                <label>Title</label>
                <input  name="title" class="form-control"  placeholder="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea name="content" class="form-control" cols="80" rows="8" >{{$post->content}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-default" onclick="window.history.back()">cancel</button>
        </form>
    </div>
</div>


@endsection
            