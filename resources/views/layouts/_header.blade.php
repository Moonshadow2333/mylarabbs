<!-- 导航栏 -->
<nav class="navbar navbar-expand-lg bg-light navbar-light navbar-static-top">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="{{url('/')}}">LaraBBS</a>

    <!-- Toggler/collapsibe Button -->
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#collapsibleNavbar">
      <span class="navbar-toggler-icon"></span>
    </button>

    <!-- Navbar links -->
    <div class="collapse navbar-collapse" id="collapsibleNavbar">
      <ul class="navbar-nav mr-auto">

      </ul>
      <!-- Right Navbar -->
      <ul class="navbar-nav navbar-right">
        @guest
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">注册</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登录</a>
        </li>
        @else
        <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" id="navbarDropdown" role="button" data-bs-toggle="dropdown">
            <img src="https://cdn.learnku.com/uploads/images/201709/20/1/PtDKbASVcz.png?imageView2/1/w/60/h/60" class="img-responsive img-circle" width="30px" height="30px">{{Auth::user()->name}}
          </a>
          <div class="dropdown-menu">
            <a class="dropdown-item" href="#">个人中心</a>
            <a class="dropdown-item" href="#">编辑资料</a>
            <div class="dropdown-divider"></div>
            <form action="{{route('logout')}}" method="POST">
              @csrf
              <button type="submit" class="btn btn-block btn-danger">退出</button>
            </form>
        </li>
        @endguest
      </ul>
    </div>
  </div>
</nav>
