<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/style.css">
    <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.css">

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
                    <a class="nav__list__item__link" href="{{route("admin.home")}}">
                            Admin Control
                    </a>
                </li>
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("contantus")}}">
                            Contant us
                    </a>
                </li>
                <ul class="dropdown ">
                    <button class="dropdown-btn">
                            username
                            <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-list ">
                        <a class="dropdown-link" href="{{route("profile")}}">Profile</a>
                        <a href="#"  class="dropdown-link">logout</a>
                    </div>
                </ul>
          
            </ul>
        </div>
    </nav>



    <div class="fl-container">
        <ul class="side-nav"> 
            <li class="side-nav__item">
                <a href="{{route("admin.manage_premium_user")}}" >Manage premium user</a>
            </li>
            <li class="side-nav__item">
                <a href="{{route("admin.manage_premium_user")}}" >Contant messages</a>
            </li>
        </ul>
        <div class="admin-do">
            @yield('content')
        </div>
    </div>



    
    <script src="https://use.fontawesome.com/02cb020418.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="/js/script.js"></script>
    
</body>
</html>