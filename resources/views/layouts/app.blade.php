{{--主要布局文件，项目的所有页面都将继承于此页面--}}
<!doctype html>
<html lang="{{ app()->getLocale() }}">

<head>
  <meta charset="UTF-8">
  <meta name="viewport"
        content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">

 <!-- CSRF TOKEN-->
  <meta name="csrf-token" content="{{ csrf_token() }}"/>
  <title>@yield('title', 'LaraBBS')  - 个人技术论坛
  </title>
  <!-- Styles -->
  <link href="{{ mix('css/app.css') }}" rel="stylesheet">
</head>

<body>
<!-- 将当前请求的路由名称转换为 CSS 类名称，作用是允许我们针对某个页面做页面样式定制。 -->
<div id="app" class="{{route_class() }}-page">

      @include('layouts._header')

          <div class="container">

           @include('shared._messages')

           @yield('content')

          </div>

       @include('layouts._footer')

</div>
    <!-- Scripts-->
    <script src="{{ mix('js/app.js') }}"></script>
</body>
</html>
