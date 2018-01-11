<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;

class HelloController extends Controller
{

   public function index()
   {
       $data = [
         ['name'=>'山田太郎', 'mail'=>'taro@ymada'],
         ['name'=>'田中もか', 'mail'=>'moka@nya'],
         ['name'=>'雉子さばお', 'mail'=>'saba@nya']
       ];
       return view('hello.index', ['data'=>$data]);
   }

}
