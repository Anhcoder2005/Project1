@extends('templates.default', [
    'title'=>'Edit Blog', 
    'email'=>$email, 
    'background_default'=>''
])


@section('body')

    <?php $url = asset('storage/images/'.$post[0]->photoBlog); ?>
    <div class="post-create">
        <form method="POST" action="/blog/update/{{$post[0]->id}}" enctype="multipart/form-data">
        @method('PATCH')
        @csrf
                <h1>Edit Post</h1>
                <div class="post-create__title">
                <input type="text" class="title__input" placeholder="Tiêu đề" name="title" required maxlength="80" value="{{$post[0]->titleBlog}}">
            </div>
            
            <div class="post-create__tools">
                <div class="tools-left">
                    <span id="button-heading" class="button button-heading" title="Heading" onclick="myFunction(this)">
                        <i class="fa-solid fa-heading"></i>
                        <div class="header-list hidden">
                            <ul class="heading-list">
                                <li class="list-item"><h1>H1</h1></li>
                                <li class="list-item"><h2>H2</h2></li>
                                <li class="list-item"><h3>H3</h3></li>
                                <li class="list-item"><h4>H4</h4></li>
                                <li class="list-item"><h5>H5</h5></li>
                            </ul>
                        </div>
                    </span>
                    
                    <span class="button button-bold" title="Bold">
                        <i class="fa-solid fa-bold"></i>
                    </span>
                    
                    <span class="button button-italic" title="Italic">
                        <i class="fa-solid fa-italic"></i>
                    </span>
                    
                    <span class="button button-underline" title="Underline">
                        <i class="fa-solid fa-underline"></i>
                    </span>
                    
                    <span class="button button-list" title="List">
                        <i class="fa-solid fa-list"></i>
                    </span>
                    
                    <span class="button button-quote-left" title="Open Quote">
                        <i class="fa-solid fa-quote-left"></i>
                    </span>
                    
                    <span class="button button-quote-right" title="Close Quote">
                        <i class="fa-solid fa-quote-right"></i>
                    </span>
                    
                    <span class="button button-code" title="Code">
                        <i class="fa-solid fa-code"></i>
                    </span>
                    
                    <span class="button button-table" title="Table">
                        <i class="fa-solid fa-table-cells"></i>
                    </span>
                    
                    <span class="button button-image" title="Image">
                        <i class="fa-solid fa-image"></i>
                    </span>
                    
                    <span class="button button-link" title="Link">
                        <i class="fa-solid fa-link"></i>
                    </span>
                    
                </div>
            
            
                <div class="tools-right">
                    <span class="button button-clear" title="Clear">
                        <i class="fa-solid fa-trash-can"></i>
                    </span>
                    
                    <span class="button button-rotate-left" title="Undo" >
                        <i class="fa-solid fa-rotate-left"></i>
                    </span>
                    
                    <span class="button button-rotate-right"  title="Redo">
                        <i class="fa-solid fa-rotate-right"></i>
                    </span>
                    
                </div>
            
            </div>
            
            <div class="post-create__content">
                <textarea rows="12" cols="140" class="content__input" placeholder="Viết nội dung ở đây." name="content" required> {{$post[0]->postBlog}}</textarea>  
            </div>

            <div class="post-create__photo post-edit__photo">
                <div>
                    <label class="" for="img">Ảnh:</label>
                    <img id="img" class="post-img-edit" src="{{$url}}" alt="">
                </div>

                <div>
                    <label for="photo">Tải Ảnh Mới:</label>
                    <input type="file" id="image" name="image" accept="image/*" >
                </div>
            </div>
            
            <div class="post-create__submit">
                <input type="submit" value="Cập Nhật" class="submit__input">
            </div>
        </form >
    </div>
   



<script>

    const btn_heading = document.getElementsByClassName("button-heading")
    const btn_bold = document.getElementsByClassName("button-bold")
    const btn_italic = document.getElementsByClassName("button-italic")
    const btn_underline = document.getElementsByClassName("button-underline")
    const btn_list = document.getElementsByClassName("button-list")
    const btn_quote_left = document.getElementsByClassName("button-quote-left")
    const btn_quote_right = document.getElementsByClassName("button-quote-right")
    const btn_code = document.getElementsByClassName("button-code")
    const btn_table = document.getElementsByClassName("button-table")
    const btn_image = document.getElementsByClassName("button-image")
    const btn_link = document.getElementsByClassName("button-link")
    const btn_clear = document.getElementsByClassName("button-clear")
    const btn_rotate_left = document.getElementsByClassName("button-rotate-left")
    const btn_rotate_right = document.getElementsByClassName("button-rotate-right")

    const btn = document.querySelector('.button')

    const content = document.querySelector('.content__input')

    const idHeading = document.getElementById('button-heading')

    const arr_btn = [btn_heading, btn_bold, btn_italic, btn_underline, btn_list, btn_quote_left, btn_quote_right, btn_code, btn_table, btn_image, btn_link, btn_clear, btn_rotate_left, btn_rotate_right];

    


    console.log({elm:content.defaultValue})


</script>


@endsection