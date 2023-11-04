@extends('templates.default', [
    'title'=>'Blog', 
    'email'=> $email, 
    'background_default'=>'background_default',
    'edit' => 'false'
])





@section('body')
<div class="blog__app">

    <div class="app__taskbar">
        <div class="taskbar__list">
            <ul class="taskbar__list--ul">
                <li class="taskbar__list--li"><a href="{{ route('create') }}">Viết Blog</a></li>
                <li class="taskbar__list--li"><a href="{{ route('myArticle') }}">Bài Viết Của Tôi</a></li>
            </ul>
        </div>

    </div>


    <div class="app__post-card">

        

        @foreach($post as $item)
            <?php $url = asset('storage/images/'.$item->photoBlog); ?>
            @if ($item->id % 2 != 0)
                <div class="blog-card alt">
                    <div class="meta">
                        <div class="photo" style="background-image:url({{$url}})"></div>
                        <ul class="details">
                            <li class="author"><a href="#">{{$item->authorBlog}}</a></li>
                            <li class="date">{{$item->releaseDateBlog}}</li>
                        </ul>
                    </div>
                    <div class="description">
                        <h1 class="title">{{$item->titleBlog}}.</h1>
                        <p class="content"> {{$item->postBlog}}</p>
                        <p class="read-more">
                            <a href="/blog/show/{{$item->id}}">Read More</a>
                        </p>
                    </div>
                </div>
            @else
        
                <div class="blog-card ">
                    <div class="meta">
                        <div class="photo" style="background-image: url({{$url}})"></div>
                        <ul class="details">
                            <li class="author"><a href="#">{{$item->authorBlog}}</a></li>
                            <li class="date">{{$item->releaseDateBlog}}</li>
                        </ul>
                    </div>
                    <div class="description">
                        <h1 class="title">{{$item->titleBlog}}.</h1>
                        <p class="content"> {{$item->postBlog}}</p>
                        <p class="read-more">
                            <a href="/blog/show/{{$item->id}}">Read More</a>
                        </p>
                    </div>
                </div>
            @endif
        @endforeach
        
        {{  $post->links() }}
    </div>


</div>
@endsection