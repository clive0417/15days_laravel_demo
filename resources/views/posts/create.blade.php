<!--layouts. 的 . 代表資料夾-->
@extends('layouts.app')

@section('page_title')
<section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Create Post</h4>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>
                            <li class="active"><a href="/posts">Blog</a>
                            </li>
                            <li class="active">Blog Listing</li>
                        </ol>
                    </div>
                </div>
            </div>
</section>
@endsection

@section('content')
<div class="page-content">
    <div class="container">
        <form method="post" action="/posts">
            <!--@csrf 塞 session token 去跨過csrf -->
            @csrf
            <div class="form-group">
                <label>Title</label>
                <input  name="title" class="form-control"  placeholder="title">
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea name="content" class="form-control" cols="80" rows="8"></textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
        </form>
    </div>
</div>


@endsection
            