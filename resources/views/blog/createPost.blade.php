<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Create Post</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/all.min.css" integrity="sha512-z3gLpd7yknf1YoNbCzqRKc4qyor8gaKU1qmn+CShxbuBusANI9QpRohGBreCFkKxLhei6S9CQXFEbbKuqLg0DA==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    




<div class="post">
   <form method="POST" action="#">
   @csrf
         <h1>Create Post</h1>
         <div class="post__title">
         <input type="text" class="title__input" placeholder="Tiêu đề" name="title">
     </div>
    
     <div class="post__tools">
         <div class="tools-left">
             <span class="button button-heading" title="Heading">
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
    
     <div class="post__content">
         <textarea rows="16" cols="140" class="content__input" placeholder="Viết nội dung ở đây." name="content"></textarea>  
     </div>
    
     <div class="post__submit">
         <input type="submit" value="Đăng" class="submit__input">
     </div>
    
   </form >


</div>




</body>
</html>


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

    
    // Hidden or Show heading







</script>


<!--



 -->