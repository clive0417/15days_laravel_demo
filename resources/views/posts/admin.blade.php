<!--layouts. 的 . 代表資料夾-->
@extends('layouts.app')

@section('page_title')
<section class="page-title">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h4 class="text-uppercase">Blog Admin table</h4>
                        <ol class="breadcrumb">
                            <li><a href="/">Home</a>
                            </li>

                            <li class="active">Blog Admin table</li>
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
            <div class="clearfix toolbox">
            <a href="/posts/create" class="btn btn-default-primary pull-right">create post</a>
            </div>
            
            <ul class="list-group">
                @foreach ($posts as $key=>$post)
                    <li  class="list-group-item clearfix">
                    {{$post->title}}
                    <span class="pull-right">
                        <a href="/posts/show/{{$post->id}}"class="btn btn-primary">View</a>
                        <a href="/posts/{{$post->id}}/edit" class="btn btn-primary">Edit</a>
                        <button class="btn btn-danger" onclick="deletePost({{$post->id}})">Delete</button>
                    </span>
                    </li>    
                @endforeach

            </ul>

    </div>
    </div>


</section>
@endsection

@section('script')

<script>



</script>

@endsection
            