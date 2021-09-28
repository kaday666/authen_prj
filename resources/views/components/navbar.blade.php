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
                    <a class="nav__list__item__link" href="{{route("admin.home")}}">
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
                <a class="nav__list__item__link" href="{{route("contantus")}}">
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
                   <span>Anon</span>
                </div>
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


