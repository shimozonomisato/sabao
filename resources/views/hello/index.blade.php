@extends('layouts.helloapp')

@section('title', 'Index')

@section('menubar')
  @parent
  インデックスページ
@endsection

@section('content')
  <p>ここが本文のコンテンツです。</p>

  @each('components.item', $data, 'item')
  {{-- ↑$data変数を'item'に入れて繰り返す --}}

@endsection

@section('footer')
copyright 2017 kijitora.
@endsection
