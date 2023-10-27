@extends('templates.default', [
    'title'=>'Create Blog', 
    'email'=>$email, 
    'background_default'=>''
])


@section('body')
    <div class="post-create">
        <form method="POST" action="createPost" enctype="multipart/form-data">
        @csrf
                <h1>Create Post</h1>
                <div class="post-create__title">
                <input type="text" class="title__input" placeholder="Tiêu đề" name="title" required maxlength="80">
            </div>
            
            <div class="post-create__tools">
                <div class="tools-left">
                    <span id="button-heading" class="button button-heading" title="Heading">
                        <i class="fa-solid fa-heading"></i>
                        <div class="header-list hidden">
                            <ul class="heading-list">
                                <li class="list-item" onclick="myFn(this, '#')"><h1>H1</h1></li>
                                <li class="list-item" onclick="myFn(this, '##')"><h2>H2</h2></li>
                                <li class="list-item" onclick="myFn(this, '###')"><h3>H3</h3></li>
                                <li class="list-item" onclick="myFn(this, '####')"><h4>H4</h4></li>
                                <li class="list-item" onclick="myFn(this, '#####')"><h5>H5</h5></li>
                            </ul>
                        </div>
                    </span>
                    
                    <span class="button button-bold " title="Bold" onclick="myFn(this, '****')">
                        <i class="fa-solid fa-bold"></i>
                    </span>
                    
                    <span class="button button-italic " title="Italic" onclick="myFn(this, '**')">
                        <i class="fa-solid fa-italic"></i>
                    </span>
                    
                    <span class="button button-underline" title="Underline" onclick="myFn(this, '++++')">
                        <i class="fa-solid fa-underline"></i>
                    </span>
                    
                    <span class="button button-list" title="List" onclick="myFn(this, '*')">
                        <i class="fa-solid fa-list"></i>
                    </span>
                    
                    <span class="button button-quote-left" title="Open Quote" onclick="myFn(this, '<')">
                        <i class="fa-solid fa-quote-left"></i>
                    </span>
                    
                    <span class="button button-quote-right" title="Close Quote" onclick="myFn(this, '>')">
                        <i class="fa-solid fa-quote-right"></i>
                    </span>
                    
                    <span class="button button-code" title="Code" onclick="myFn(this, '``````')">
                        <i class="fa-solid fa-code"></i>
                    </span>
                    
                    <span class="button button-table" title="Table" onclick="myFn(this, '#')">
                        <i class="fa-solid fa-table-cells"></i>
                    </span>
                    
                    <span class="button button-image" title="Image" onclick="myFn(this, '#')">
                        <i class="fa-solid fa-image"></i>
                    </span>
                    
                    <span class="button button-link" title="Link" onclick="myFn(this, '[]()')">
                        <i class="fa-solid fa-link"></i>
                    </span>
                    
                </div>
                
                
            
            
                <div class="tools-right">
                    <span class="button button-view" title="Preview">
                        <i class="fa-solid fa-tv"></i>
                    </span>

                    <span class="button button-rotate-left" title="Undo" >
                        <i class="fa-solid fa-rotate-left"></i>
                    </span>
                    
                    <span class="button button-rotate-right"  title="Redo">
                        <i class="fa-solid fa-rotate-right"></i>
                    </span>

                    <span class="button button-clear" title="Clear">
                        <i class="fa-solid fa-trash-can"></i>
                    </span>
                    
                </div>
            
            </div>
            
            <div class="post-create__content">
                <div class="content__input">
                    <textarea id="editor" rows="12" cols="70" class="content__input--textarea" placeholder="Viết nội dung ở đây." name="content" required></textarea>  
                </div>
                <div class="post-create__preview">
                    <div class="preview__content">

                    </div>
                </div>
            </div>

            <div class="post-create__photo">
                <label for="photo">Chọn ảnh:</label>
                <input type="file" id="image" name="image" accept="image/*" required>
            </div>
            
            <div class="post-create__submit">
                <input type="submit" value="Đăng" class="submit__input">
            </div>
            
        </form >
    </div>


    <script src="https://cdn.tiny.cloud/1/your-api-key/tinymce/6/tinymce.min.js" referrerpolicy="origin"></script>;
    <script>
        tinymce.init({
            selector: '#editor',
            plugins: 'powerpaste casechange searchreplace autolink directionality advcode visualblocks visualchars image link media mediaembed codesample table charmap pagebreak nonbreaking anchor tableofcontents insertdatetime advlist lists checklist wordcount tinymcespellchecker editimage help formatpainter permanentpen charmap linkchecker emoticons advtable export autosave',
            toolbar: 'undo redo formatpainter | blocks fontfamily fontsize | bold italic underline forecolor backcolor | alignleft aligncenter alignright alignjustify lineheight | removeformat',
            height: '400px',
            width:'700px',
            resize:'none'
        });
    </script>
  
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

        const content = document.querySelector('.content__input--textarea')

        const idHeading = document.getElementById('button-heading')

        const arr_btn = [btn_heading, btn_bold, btn_italic, btn_underline, btn_list, btn_quote_left, btn_quote_right, btn_code, btn_table, btn_image, btn_link, btn_clear, btn_rotate_left, btn_rotate_right];

        const preview = document.getElementsByClassName('preview__content')

        content.onchange = function(){
            //
        }

        function myFn(elm, tx){
            console.log(elm.className)
            if((content.value != '' & elm.className == 'list-item') || (content.value != '' & elm.className == 'button button-quote-left')){
                content.value = content.value +'\n' + tx
            }else {
                content.value = content.value + tx
            }
        }
        

        content.oninput = function(){
            var value = content.value;
            console.log(value)
            preview[0].innerHTML = value
            
        }
        



    </script>
@endsection