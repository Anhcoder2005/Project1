<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Project</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Bricolage+Grotesque:opsz,wght@10..48,200;10..48,300&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.2/css/fontawesome.min.css" integrity="sha512-siarrzI1u3pCqFG2LEzi87McrBmq6Tp7juVsdmGY1Dr8Saw+ZBAzDzrGwX3vgxX1NkioYNCFOVC0GpDPss10zQ==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    @vite(['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="home">
        <div class="home__header">
            <div class="header__mylogo text-center ">My Project</div>

            <div class="header__nav ">
                <a class="nav-link mx-3 text-center " href="/">Trang Chủ</a>
                <a class="nav-link mx-3 text-center " href="#">Liên Hệ</a>
                <a class="nav-link mx-3 text-center " href="#">Đăng Nhập/ Đăng Ký</a>
            </div> 
        </div>

        <div class="home__card">
            <div class="home__blog card__magin--left">
                <a class="blog__link nav-link" href="/blog">
                    <div class="card card__general card__hover--blog" >
                        <div class="card-body card__blog">
                            <h5 class="card-title">Blog</h5>
                            <span class="blog__icon"><svg xmlns="http://www.w3.org/2000/svg" x="0px" y="0px" width="100" height="100" viewBox="0 0 50 50"><path d="M 13 3 L 13 22.3125 L 13.1875 22.59375 L 17.78125 29 L 17.90625 29.21875 L 18.75 30.53125 L 22.875 37 L 20.625 37 L 20.34375 37.25 L 14 42.8125 L 14 37 L 11 37 C 8.722656 37 7 35.277344 7 33 L 7 12 C 7 9.722656 8.722656 8 11 8 L 12 8 L 12 6 L 11 6 C 7.675781 6 5 8.675781 5 12 L 5 33 C 5 36.324219 7.675781 39 11 39 L 12 39 L 12 47.21875 L 13.65625 45.75 L 21.375 39 L 40 39 C 43.324219 39 46 36.324219 46 33 L 46 12 C 46 8.675781 43.324219 6 40 6 L 25 6 L 25 3 Z M 15 5 L 23 5 L 23 19.5 L 19.375 18.0625 L 19 17.9375 L 18.625 18.0625 L 15 19.5 Z M 25 8 L 40 8 C 42.277344 8 44 9.722656 44 12 L 44 29 L 20.25 29 L 24.8125 22.59375 L 25 22.3125 Z M 19 20.09375 L 22.96875 21.6875 L 20.625 25 L 17.375 25 L 15.03125 21.6875 Z M 21.40625 31 L 44 31 L 44 33 C 44 35.277344 42.277344 37 40 37 L 25.21875 37 Z"></path></svg></span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="home__readbook card__magin--right">
                <a class="readbook__link nav-link" href="/readbook">
                    <div class="card card__general card__hover--readbook" >
                        <div class="card-body card__readbook">
                            <h5 class="card-title">Readbook</h5>
                            <span class="readbook__icon"><!DOCTYPE svg  PUBLIC '-//W3C//DTD SVG 1.1//EN'  'http://www.w3.org/Graphics/SVG/1.1/DTD/svg11.dtd'><svg enable-background="new 0 0 64 64" height="100px" id="Layer_1" version="1.1" viewBox="0 0 64 64" width="100px" xml:space="preserve" xmlns="http://www.w3.org/2000/svg" xmlns:xlink="http://www.w3.org/1999/xlink"><path d="M62.869,16.842h-0.057c-1.096,0.007-1.266-0.945-1.285-1.387V8.542c0-0.738-0.598-1.336-1.334-1.336H40.428  c-4.959,0-6.809,1.838-7.268,2.415l-0.126,0.175l-0.001,0.003l-0.391,0.536c-0.001,0-0.001,0-0.001,0  c-0.525,0.721-0.982,0.414-1.202,0.178l-0.748-0.933l-0.37-0.446c-0.622-0.653-2.243-1.928-5.456-1.928H3.808  c-0.738,0-1.336,0.598-1.336,1.336v6.825c0,1.195-0.649,1.435-1.047,1.475H1.129c-0.324,0.02-1.078,0.208-1.078,1.595v32.529  c0,0.798,0.647,1.444,1.445,1.444h19.218c6.131,0,8.803,2.312,9.604,3.199l0.457,0.566h0.001c0,0,1.226,1.387,2.518,0l0,0  l0.268-0.314v0.001l0.004-0.003l0.342-0.4c0.01-0.012,0.092-0.104,0.211-0.226c1.023-0.995,3.58-2.823,8.58-2.823h19.805  c0.799,0,1.445-0.646,1.445-1.444V18.122C63.949,16.946,63.098,16.848,62.869,16.842z M58.551,45.862  c0,0.641-0.535,1.158-1.201,1.158H41.055c-5.799,0-7.904,2.62-7.904,2.62l-0.267,0.358l-0.125,0.173c-0.001,0-0.001,0-0.001,0  c-0.553,0.751-1.366,0.006-1.37,0.002l-0.375-0.469c-0.278-0.334-2.408-2.685-7.563-2.685h-16.8c-0.663,0-1.199-0.518-1.199-1.158  V11.199c0-0.64,0.536-1.158,1.199-1.158h13.043c9.702,0,10.621,5.511,10.684,7.112v24.106c0,1.752,0.835,2.081,1.306,2.129h0.701  c0.48-0.048,1.243-0.333,1.243-1.7V16.842h-0.008c0.072-2.005,0.854-6.802,6.689-6.802H57.35c0.666,0,1.201,0.518,1.201,1.158  V45.862z" fill="#241F20"/></svg></span>
                        </div>
                    </div>
                </a>
            </div>
        </div>
    </div>
</body>
</html>






