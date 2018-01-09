<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>@yield('title')</title>
    <style>
    body {font-size:16px; color:#999; margin:5px}
    h1 {font-size:50px; text-align:right; color:#EF75BC; margin:-20px 0px -30px 0px; letter-spacing:-4px;}
    ul {font-size:12px;}
    hr {margin:25px 100px; border-top:1px dashed #ddd;}
    .menutitle {font-size:14px; font-weight:bold; margin:0px;}
    .content {margin:10px;}
    .footer {text-align:right; font-size:10px; margin:10px; border-bottom:solid 1px #ccc; color:#ccc;}
    </style>
  </head>
  <body>
    <h1>@yield('title')</h1>
    @section('menubar')
    <ul>
      <p class="menutitle">＊メニュー</p>
      <li>@show</li>
    </ul>
    <hr size="1">
    <div class="content">
      @yield('content')
    </div>
    <div class="footer">
      @yield('footer')
    </div>
  </body>
</html>
