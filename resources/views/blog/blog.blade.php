@extends('templates.default', [
'title'=>'Blog',
'email'=> $email,
'background_default'=>'background_default',
'edit' => 'false'
])





@section('body')
<div class="blog__app">



    <nav class="app__navbar">
        <ul>
            <li>
                <a href="/">
                    <i class="fa-solid fa-house"></i>
                    <span>Dashboard</span>
                </a>
            </li>
            <li>
                <a href="/readbook">
                    <i class="fa-solid fa-book-open"></i>
                    <span>Books</span>
                </a>
            </li>
            <li>
                <a href="{{ route('create') }}">
                    <i class="fa-solid fa-circle-plus"></i>
                    <span>Create Post</span>
                </a>
            </li>
            <li>
                <a href="{{ route('myArticle') }}">
                    <i class="fa-solid fa-user-gear"></i>
                    <span>My Article</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-circle-question"></i>
                    <span>Help</span>
                </a>
            </li>
            <li>
                <a href="#">
                    <i class="fa-solid fa-gear"></i>
                    <span>Settings</span>
                </a>
            </li>
        </ul>


    </nav>


    <div class="app__post-card">



        @foreach($post as $item)
        <?php $url = asset('storage/images/' . $item->photoBlog); ?>
        @if ($item->id % 2 != 0)
        <div class="blog-card alt">
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
        <div class="app__pagi">
            {!! $post->links() !!}
        </div>
    </div>


</div>
@endsection