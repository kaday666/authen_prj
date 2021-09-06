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
                    <a href="{{route("create")}}" class="nav__list__item__link">
                            create post
                    </a>
                </li>
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("register")}}">
                            Admin Control
                    </a>
                </li>
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("register")}}">
                            Contant us
                    </a>
                </li>
                <div class="dropdown ">
                    <button class="dropdown-btn">
                            username
                            <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-list ">
                        <a class="dropdown-link" href="#">Profile</a>
                        <a href="#"  class="dropdown-link">logout</a>
                    </div>
                </div>
          
            </ul>
        </div>
    </nav>

    @yield('content')

    <script src="/js/script.js"></script>
    <script src="https://use.fontawesome.com/02cb020418.js"></script>
</body>
</html>