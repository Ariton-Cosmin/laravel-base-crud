@extends('layouts.mainlayout')
@section('content')
{{-- <h1>SHOW</h1> --}}
<h2>{{$comic['title']}}</h2>
<h2>{{$comic['description']}}</h2>
<h2>{{$comic['price']}}</h2>
<h2>{{$comic['series']}}</h2>
<h2>{{$comic['sale_date']}}</h2>
<h2>{{$comic['type']}}</h2>
<img src="{{$comic['thumb']}}" alt="">
@endsection