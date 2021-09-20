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
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("contantus")}}">
                            posts
                    </a>
                </li>
                <ul class="dropdown ">
                    <button class="dropdown-btn">
                           
                            @if (auth()->user())
                            <img src="{{asset('img/profiles/'.auth()->user()->image)}}" alt="">
                                <span>{{auth()->user()->name}}</span>
                            @else
                                <img src="{{asset('img/empty.png')}}" alt="">
                               <span>Anon</span>
                            @endif
                            <i class="fa fa-caret-down"></i>
                    </button>
                    <div class="dropdown-list ">
                        <a class="dropdown-link" href="{{route("profile")}}">Profile</a>
                        <a href="{{route("logout")}}"  class="dropdown-link">logout</a>
                    </div>
                </ul>
          
            </ul>
        </div>
    </nav>

    @yield('content')


    
    <script src="https://use.fontawesome.com/02cb020418.js"></script>
    <script src="https://unpkg.com/sweetalert/dist/sweetalert.min.js"></script>
    <script src="/js/script.js"></script>
    

         @if (Session("message"))
        <script>swal("Account created!", "now you can post article", "success");
        </script>
         @endif
         
         @if (Session("complete"))
        <script>swal("Account successfully logined!", "now you can post article", "success");
        </script>
         @endif

         @if (Session("success"))
         <script>
         swal("Account Info successfully updated!", "now you can enjoy", "success");
         </script>
          @endif

          @if (Session("password"))
          <script>
          swal("Account password updated!", "plz remember your password", "success");
          </script>
           @endif
          
           @if (Session("postdel"))
           <script>
           swal("yay!", "post deleted", "success");
           </script>
            @endif
            @if (Session("errordel"))
            <script>
            swal("nah!", "only author and admin can delete the post", "fail");
            </script>
             @endif
  


</body>
</html>