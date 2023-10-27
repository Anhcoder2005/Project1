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
                    <td class="table--image">{{$item->photoBlog}}</td>@csrf
                    <td class="table--edit"><a href="/blog/edit/{{$item->id}}" class="btn btn-sm table-btn table-edit-btn"><i class="fa-solid fa-pen-to-square"></i></a></td>
                    <td class="table--trash">
                        <a href="/blog/delete/{{$item->id}}" class="table-trash-btn">
                            <form method="POST" action="/blog/delete/{{$item->id}}" onsubmit="return ConfirmDelete( this )">
                                @method('DELETE')
                                @csrf
                                <button class="btn btn-sm btn-spinner table-btn table-trash-btn" type="submit"><i class="fa-solid fa-trash"></i></button>
                            </form>
                        </a>
                    </td>
                </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>

<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script><script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.7.1/jquery.min.js" integrity="sha512-v2CJ7UaYy4JwqLDIrZUI/4hqeoQieOmAZNXBeQyjo21dadnwR+8ZaIJVT8EE2iyI61OV8e6M8PP2/4hpQINQ/g==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>

<script>
    $(".table--title").each(function(){if ($(this).text().length > 20) {$(this).text($(this).text().substr(0, 20));$(this).append('...');}});
    $(".table--content").each(function(){if ($(this).text().length > 45) {$(this).text($(this).text().substr(0, 45));$(this).append('...');}});

</script>

@endsection
