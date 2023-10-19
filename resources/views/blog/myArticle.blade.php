@extends('templates.default', [
'title'=>'My Article',
'email'=>$email,
'background_default'=>''
])


@section('body')

@php

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
                <tr>
                    <th scope="row">1</th>
                    <td>50</td>
                    <td>ROG Ally Phiên Bản Phổ Thông Ra Mắt Tại Việt Nam: Tính Năng Xịn Sò, Giá Chỉ Từ 15.5 Triệu</td>
                    <td class="table--td"> </td>
                    <td>19/10/2023</td>
                    <td>image.jpg</td>
                </tr>
                <tr>
                    <th scope="row">2</th>
                    <td>Jacob</td>
                    <td>Thornton</td>
                    <td>@fat</td>
                </tr>
                <tr>
                    <th scope="row">3</th>
                    <td colspan="2">Larry the Bird</td>
                    <td>@twitter</td>
                </tr>
            </tbody>
        </table>
    </div>
</div>


@endsection