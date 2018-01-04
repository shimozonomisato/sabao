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
   @isset ($msg)
   <p>こんにちは、{{$msg}}さん。</p>
   @else
   <p>何か書いてください。</p>
   @endisset
   <form method="POST" action="/hello">
       {{ csrf_field() }}
       <input type="text" name="msg">
       <input type="submit">
   </form>
</body>
</html>
