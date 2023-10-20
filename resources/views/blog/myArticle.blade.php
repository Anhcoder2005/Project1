@extends('templates.default', [
'title'=>'My Article',
'email'=>$email,
'background_default'=>''
])


@section('body')

@php
    $i = 1
@endphp

<div class="my-article">
    <div class="my-article__header">

    </div>



    <div class="my-article__dashboad">
        <table class="table table-striped table-hover">
            <thead>
                <tr>
                    <th scope="col">STT</th>
                    <th scope="col">ID</th>
                    <th scope="col">Tiêu Đề</th>
                    <th scope="col">Nội dung</th>
                    <th scope="col">Ngày Đăng</th>
                    <th scope="col">Ảnh</th>
                </tr>
            </thead>
            <tbody>
                @foreach($post as $item)
                <tr>
                    <th scope="row">{{$i++}}</th>
                    <td class="table--id">{{$item->id}}</td>
                    <td class="table--title">{{$item->titleBlog}}</td>
                    <td class="table--content">{{$item->postBlog}}</td>
                    <td class="table--date">{{$item->releaseDateBlog}}</td>
                    <td class="table--image">{{$item->photoBlog}}</td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(".table--title").each(function(){if ($(this).text().length > 25) {$(this).text($(this).text().substr(0, 25));$(this).append('...');}});
    $(".table--content").each(function(){if ($(this).text().length > 50) {$(this).text($(this).text().substr(0, 50));$(this).append('...');}});

    console.log($(".table--title"))

</script>

@endsection
