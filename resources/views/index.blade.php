@extends('layout.app')
@section('title')
  Menu Foodie
@endsection
@section('content')
  <div class="foodie">
    <h1>Menu Foodie v1</h1>
  </div>
  <h1>Daftar Menu</h1>
  <div class="floatbox">
    @foreach ($data as $menu)
      <div class="item">
        <img src="{{$menu['picture_url']}}" alt="">
        <div class="content">
          <a href="{{route('menu.show',Crypt::encrypt($menu['id']))}}" class="title"><h2>{{$menu['title']}}</h2></a>
          <p>Rp. {{number_format($menu['base_price'])}}</p>
        </div>
      </div>
    @endforeach
  </div>
@endsection