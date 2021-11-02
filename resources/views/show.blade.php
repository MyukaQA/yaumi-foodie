@extends('layout.app')
@section('title')
  {{$menu['title']}}
@endsection
@section('content')
  <div>
    <img src="{{$menu['picture_url']}}" style="width: 50%" alt="">
    <div style="width: 50%; margin: auto">
      <h1>{{$menu['title']}}</h1>
      <h3>Rp. {{number_format($menu['base_price'])}}</h3>
      <p>{{$menu['description']}}</p>
      <hr>
      <h3>
        Kategori : 
        @foreach ($menu['categories'] as $item)
          <span>| {{$item}} |</span>
        @endforeach
      </h3>
      <a href="{{route('menu')}}" class="btn-back">< Kembali</a>
    </div>
  </div>
@endsection