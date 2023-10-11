
<div class="home__header">
    <div class="header__mylogo text-center ">{{$title}}</div>

    <div class="header__nav ">
        <a class="nav-link mx-3 text-center " href="/">Trang Chủ</a>
        <a class="nav-link mx-3 text-center " href="#">Liên Hệ</a>
        
        @if ($email)
            <a class="nav-link mx-3 text-center " href="#">{{$email}}</a>
        @else
            <a class="nav-link mx-3 text-center " href="/login">Đăng Nhập/</a>
            <a class="nav-link mx-3 text-center " href="/register">Đăng Ký</a>
        @endif
    </div> 
</div>