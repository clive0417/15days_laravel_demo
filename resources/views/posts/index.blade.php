<!--layouts. 的 . 代表資料夾-->
@extends('layouts.frontend')

@section('page_title')
<section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">
                        Blog Listing
                            @if(request()->category)
                                / {{request()->category->name}}
                            @endif
                            @if(request()->tag)
                                # {{request()->tag->name}}
                            @endif
                        </h4>
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
<section class="body-content ">

    <div class="page-content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    @foreach ($posts as $key=> $post)
                     <!--classic image post-->
                    <div class="blog-classic">
                            <div class="date">
                                {{$post->updated_at->day}}
                                <span>{{$post->updated_at->shortEnglishMonth}} {{$post->updated_at->year}}</span>
                            </div>
                            <div class="blog-post">
                                <div class="full-width">
                                    @if (!$post->thumbnail)
                                    <img src="/assets/img/post/p12.jpg" alt="預設圖片" /><!--預設圖片-->
                                    @else
                                    <img src="{{$post->thumbnail}}" alt="thumbnail">
                                    @endif
                                </div>
                                <h4 class="text-uppercase"><a href="/posts/{{$post->id}}">{{$post->title}}</a></h4>
                                <ul class="post-meta">
                                    <li><i class="fa fa-user"></i>posted by <a href="#">{{$post->user->name}}</a>
                                    </li>
                                    @if($post->category)
                                    <li><i class="fa fa-folder-open"></i>  <a href="/posts/category/{{$post->category_id}}">{{$post->category->name}}</a>
                                    </li>
                                    @endif
                                    <li><i class="fa fa-comments"></i>  <a href="#">4 comments</a>
                                    </li>
                                </ul>
                                <p>{{$post->content}}</p>
                                <!--revirse link of single page-->
                                <a href="/posts/{{ $post->id}}}" class="btn btn-small btn-dark-solid  "> Continue Reading</a>
                            </div>
                    </div>
                                <!--classic image post-->

                    @endforeach






                    <!--pagination-->
                    <div class="text-center">
                        {{$posts->links()}}

                    </div>
                    <!--pagination-->

                </div>
                <div class="col-md-4">
                    @include('posts._sidebar')


                </div>
            </div>
        </div>
    </div>


</section>
@endsection
            