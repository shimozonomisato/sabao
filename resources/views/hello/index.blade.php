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
   <p>&#064;forディレクティブの例</p>
   <ol>
    @for ($i = 1; $i < 100; $i++)
      @if ($i % 2 == 1)
        @continue
          @elseif ($i <= 10)
            <li>No,{{$i}}</li>
          @else
        @break
      @endif
    @endfor
   </ol>
  </body>
</html>
