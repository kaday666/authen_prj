<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
</head>
<body>
    <nav class="nav"> 
        <div class="nav__warp">
            <div class="nav__head pt">
                AUTH
            </div>
            <ul class="nav__list">
                <li class="nav__list__item">
                    <a href="{{route("index")}}" class="nav__list__item__link">
                        home
                    </a>
                </li>
                <li class="nav__list__item">
                    <a href="{{route("login")}}" class="nav__list__item__link">
                        login
                    </a>
                </li>
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("register")}}">
                        Register
                    </a>
                </li>
            </ul>
        </div>
    </nav>

    @yield('content')
</body>
</html>