@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>
  <p>必要なだけ記述できます。</p>

    @include('components.message', ['msg_title'=>'ok', 'msg_content'=>'サブビューです。'])
  
@endsection

@section('footer')
copyright 2017 kijitora.
@endsection
