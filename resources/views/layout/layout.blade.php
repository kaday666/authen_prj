<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="/css/app.css">
    <link rel="stylesheet" href="/css/style.css">
    <link href="https://unpkg.com/pattern.css" rel="stylesheet">

</head>
<body>
    <div class="loader-warp">
        <div id="container">
            <div class="divider" aria-hidden="true"></div>
            <p class="loading-text" aria-label="Loading">
              <span class="letter" aria-hidden="true">L</span>
              <span class="letter" aria-hidden="true">o</span>
              <span class="letter" aria-hidden="true">a</span>
              <span class="letter" aria-hidden="true">d</span>
              <span class="letter" aria-hidden="true">i</span>
              <span class="letter" aria-hidden="true">n</span>
              <span class="letter" aria-hidden="true">g</span>
            </p>
          </div>
    </div>        

   
    <nav class="nav  "> 
        <div class="nav__warp">
           <img src="{{asset('img/logo_v2.gif')}}" alt="">
           
            <ul class="nav__list">
                <button class="nav-btn btn-close">
                    <i class="fa fa-times"></i>
                </button>
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
                @can('admin')
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("admin.manage_premium_user")}}">
                            Admin Control
                    </a>
                </li>
                @endcan
               
               
                
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("contantus")}}">
                            Contant us
                    </a>
                </li>
                <li class="nav__list__item">
                    <a class="nav__list__item__link" href="{{route("posts")}}">
                            posts
                    </a>
                </li>
            </ul>
            <div class="dropdown ">
                <button class="dropdown-btn">
                       
                        @if (auth()->user())
                        <div class="img">
                            <img src="{{asset('img/profiles/'.auth()->user()->image)}}" alt="">
                        </div>
                        <span>{{auth()->user()->name}}</span>
                        @else
                        <div class="img">
                            <img src="{{asset('img/empty.png')}}" alt="">
                           
                        </div>
                        <span>Anon</span>
                        @endif
                        <i class="fa fa-caret-down"></i>
                </button>
                <div class="dropdown-list ">
                    <a class="dropdown-link" href="{{route("profile")}}">Profile</a>
                    <a href="{{route("logout")}}"  class="dropdown-link">logout</a>
                </div>
            </div>
            <button class="nav-btn btn-open">
                <i class="fa fa-bars"></i>
            </button>
        </div>
    </nav>

    @yield('content')

    <footer>
        <div class="warp">
            <div class="socialmd-list">
                <a href="#"><i class="fa fa-facebook-square"></i></a>
                <a href="#"><i class="fa fa-instagram"></i></a>
                <a href="#"><i class="fa fa-twitter-square"></i></a>
                <a href="#"><i class="fa fa-twitch"></i></a>
            </div>
            <p class="legal">
                this is page is developed by <a href="#">
                    lin kaday
                </a>
                with so much love for the community.
            </p>
        </div>
    </footer>



    
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

          @if (Session("post_up"))
          <script>
          swal("Completed!", "your post is uploaded", "success");
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

             @if (Session("updata"))
            <script>
            swal("yayy", "you edited the post", "success");
            </script>
             @endif
  
             @if (Session("sent"))
            <script>
            swal("yayy", "thank we recieved the message", "success");
            </script>
             @endif
  

             @if (Session("adminerr"))
            <script>
            swal("Oops...", "only admin can access this page", "error");
            </script>
             @endif

             @if (Session("postdelFail"))
             <script>
             swal("Oops...", "only author and admin can delete and edit the post", "error");
             </script>
              @endif
</body>
</html>





