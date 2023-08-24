<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="home">
        <div class="home__header">
            <div class="header__mylogo text-center ">My Project</div>

            <div class="header__nav ">
                <a class="nav-link mx-3 text-center " href="#">Trang chủ</a>
                <a class="nav-link mx-3 text-center " href="#">Liên Hệ</a>
                <a class="nav-link mx-3 text-center " href="#">Đăng Nhập/ Đăng Ký</a>
            </div> 
        </div>

        <div class="home__blog">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Blog</h5>
                </div>
            </div>
        </div>
        <div class="home__readbook">
            <div class="card" style="width: 18rem;">
                <div class="card-body">
                    <h5 class="card-title">Readbook</h5>
                </div>
            </div>
        </div>
    </div>
</body>
</html>






