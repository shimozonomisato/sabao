<!DOCTYPE html>
<html>
  <head>
    <meta charset="utf-8">
    <title>Hello</title>
    <style>
    body {font-size:16px; color:#999;}
    h1 {font-size:50px; text-align:right; color:#EF75BC; margin:-20px 0px -30px 0px; letter-spacing:-4px;}
    </style>
  </head>
  <body>
   <h1>Blade/Index</h1>
   <p>&#064;forディレクティブの例_$loopを使う</p>
   @foreach ($data as $item)
     @if ($loop->first)
     <p>＊データ一覧</p>
     <ul>
     @endif
     <li>No,{{$loop->iteration}}. {{$item}}</li>
     @if ($loop->last)
     </ul><p>-----ここまで</p>
     @endif
     @endforeach
  </body>
</html>
