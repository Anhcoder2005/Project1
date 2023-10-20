@extends('templates.default', [
    'title'=>'Post', 
    'email'=>$email, 
    'background_default'=>''
])


@section('body')

@php 

    $postBlog = $post[0]->postBlog;

@endphp

<div class="Post">
    <div class="post__title">
        <h1>{{$post[0]->titleBlog}}</h1>
    </div>


    <div class="post__content">
        <textarea id="post__content" readonly class="post__content--textarea" >{{$postBlog}}</textarea>
    </div>
</div>

@endsection

