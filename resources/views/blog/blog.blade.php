@extends('templates.default', [
    'title'=>'Blog', 
    'email'=> $email, 
    'background_default'=>'background_default',
])



@section('body')
<div class="blog__app">

    <div class="app__taskbar">
        <div class="taskbar__list">
            <ul class="taskbar__list--ul">
                <li class="taskbar__list--li"><a href="{{ route('create') }}">Viết Blog</a></li>
                <li class="taskbar__list--li">Bài viết của tôi</li>
            </ul>
        </div>

    </div>


    <div class="app__post-card">
        <div class="blog-card">
            <div class="meta">
                <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-1.jpg)"></div>
                <ul class="details">
                    <li class="author"><a href="#">John Doe</a></li>
                    <li class="date">Aug. 24, 2015</li>
                </ul>
            </div>
            <div class="description">
                <h1 class="title">Learning to Code</h1>
                <p class="content"> Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div>

        
        <div class="blog-card alt"> 
            <div class="meta">
            <div class="photo" style="background-image: url(https://storage.googleapis.com/chydlx/codepen/blog-cards/image-2.jpg)"></div>
            <ul class="details">
                <li class="author"><a href="#">Jane Doe</a></li>
                <li class="date">July. 15, 2015</li>
            </ul>
            </div>
            <div class="description">
                <h1>Mastering the Language</h1>
                <p class="content" >Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ad eum dolorum architecto obcaecati enim dicta praesentium, quam nobis! Neque ad aliquam facilis numquam. Veritatis, sit.</p>
                <p class="read-more">
                    <a href="#">Read More</a>
                </p>
            </div>
        </div>

    </div>
    
        




</div>
@endsection