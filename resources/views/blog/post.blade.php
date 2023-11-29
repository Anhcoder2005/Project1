@extends('templates.default', [
    'title'=>'Post', 
    'background_default'=>''
    ])
    
    
@section('body')
@vite(['resources/sass/post.scss'])
@vite(['resources/sass/app.scss', 'resources/js/app.js'])
    
@php 
    
    $url = asset('storage/images/'.$post[0]->image);
@endphp

<div class="Post">


    <div class="post__body">
        <div class="post__title">
            <h1> <strong>{{$post[0]->title}}</strong> </h1>
            <div class="post__info">
                <i class="fa-solid fa-user"></i>
                {{$post[0]->user_name}}
                <i class="fa-solid fa-calendar-days"></i>
                {{$post[0]->created_at}}
            </div>
        </div>
        <div class="post__content">
            <div class="post__content--image">
                <img src="{{$url}}" alt="">
            </div>
            <div class="post__content--wrapper">
                {!! $post[0]->htmlbody !!}
            </div>
        </div>
    </div>

    <div class="post__ads">
        <img src="https://xuyenvietmedia.com/wp-content/uploads/2023/03/xem-quang-cao-kiem-tien-1.jpg" alt="">
        <img src="data:image/jpeg;base64,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" alt="">
        
    </div>
    
</div>
@endsection
