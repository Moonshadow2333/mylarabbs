<!-- 导航栏 -->
<nav class="navbar navbar-expand-lg bg-light navbar-light navbar-static-top">
  <div class="container">
    <!-- Brand -->
    <a class="navbar-brand" href="#">LaraBBS</a>

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
        <li class="nav-item">
          <a class="nav-link" href="{{route('register')}}">注册</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{route('login')}}">登录</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
