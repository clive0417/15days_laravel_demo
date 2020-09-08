@php
    $isCreate = request()->is('*create');
    $actionUrl = ($isCreate)? '/posts' :'/posts/'.$post->id;
@endphp       
        @if ($errors->any())    
            <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $key => $error) 
                    <li>{{$error}}</li>

                
                @endforeach
            </ul>
            </div>
        @endif
        <form method="post" action="{{$actionUrl}}">

            <!--@csrf 塞 session token 去跨過csrf -->
            @csrf
            @if(!$isCreate) 
            <!--傳統HTML只支持，post/get 不支持put/delete laravel 要特別加 -->
            <input type="hidden" name="_method" value="put">
            @endif

            <div class="form-group">
                <label>Title</label>
                <input  name="title" class="form-control"  placeholder="title" value="{{$post->title}}">
            </div>
            <div class="form-group">
                <label >Content</label>
                <textarea name="content" class="form-control" cols="80" rows="8" >{{$post->content}}</textarea>
            </div>

            <button type="submit" class="btn btn-primary">Submit</button>
            <button type="button" class="btn btn-secondary" onclick="window.history.back()">cancel</button>
        </form>