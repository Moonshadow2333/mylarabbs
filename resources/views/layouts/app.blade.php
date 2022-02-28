<!DOCTYPE html>
<html lang="{{str_replace('_','-',app()->getLocale())}}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <!-- CSRF Token -->
  <meta name="csrf-token" content="{{csrf_token()}}">
  <title>@yield('title','LaraBBS') - laravel进阶课程</title>
  <!-- css -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>
<body>
  <div id="app" class="{{route_class()}}--page">
    @include('layouts._header')
    <div class="container">
      <div class="col-md-8 offset-md-2">
      @include('shared._messages')
      </div>
      @yield('content')
    </div>
    @include('layouts._footer')
  </div>
  <!-- scripts -->
  <script src="{{mix('js/app.js')}}"></script>
</body>
</html>
