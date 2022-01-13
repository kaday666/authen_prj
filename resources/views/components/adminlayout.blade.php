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
    <x-navbar></x-navbar>



    <div class="fl-container">
         <ul class="side-nav"> 
            <li class="{{ (request()->is('admin/manage_premium_user')) ? 'side-nav__item active' : 'side-nav__item' }}">
                <a href="{{route("admin.manage_premium_user")}}" >Manage premium user</a>
            </li>
            <li class="{{ (request()->is('admin/contant_messages')) ? 'side-nav__item active' : 'side-nav__item' }}">
                <a href="{{route("admin.contant_messages")}}" >Contant messages</a>
            </li>
            <li class="{{ (request()->is('admin/recommend')) ? 'side-nav__item active' : 'side-nav__item' }}">
                <a href="{{route("admin.recommend")}}" >Recommends</a>
            </li>
            <li class="{{ (request()->is('admin/pending')) ? 'side-nav__item active' : 'side-nav__item' }}">
                <a href="{{route("admin.pending")}}" >Pending</a>
            </li>
        </ul>
        <div class="admin-do">
            {{$slot}}
        </div>
    </div>



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
                in the dedication and loving memory of friend 
                who always used to talk about band when he 
                was around me.
            </p>
        </div>
    </footer>





    
    <script src="https://use.fontawesome.com/02cb020418.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/toastr.js/2.1.4/toastr.min.js"></script>
    <script src="/js/script.js"></script>
    

    @if (Session("mesdel"))
    <script>
    swal("yayy", "success fully delete the message", "success");
    </script>
     @endif


     @if (Session("approve"))
     <script>
     swal("yayy", "post approved", "success");
     </script>
      @endif
</body>
</html>


    