<nav class="navbar navbar-expand-md bg-light navbar-light navbar-static-top">
  <!-- Brand -->
  <div class="container">
    <a class="navbar-brand" href="#">LaraBBS</a>
    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <!-- left side navbar -->
      <ul>

      </ul>
      <!-- right side navbar -->
      <ul class="navbar-nav">
        <!-- 如果是游客，导航栏则显示登录与注册 -->
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登录</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">注册</a>
        </li>
        @else
         <!-- Dropdown -->
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbardrop" data-bs-toggle="dropdown">
            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">{{Auth::user()->name}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="{{route('users.show',Auth::id())}}">个人中心</a>
            <a class="dropdown-item" href="{{route('users.edit',Auth::id())}}">编辑资料</a>
            <div class="dropdown-divider"></div>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-block btn-danger">退出</button>
            </form>
          </div>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
