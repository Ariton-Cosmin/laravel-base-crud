@extends('layouts.mainlayout')
@section('content')
<h1>CREATE</h1>
<div class="form-container" style="width: 80%; margin:0 auto;">
  <form action="{{route('comics.store')}}" method="POST" class="text-center">
    @csrf
    @method('POST')

    <div class="my-3 form-group">
      <label for="title"></label>
      <input type="text" class="form-control"id="title" name="title" placeholder="Title">
    </div>

    <div class="my-3">
      <label for="description"></label>
      <textarea class="form-control"name="description" id="description"rows="10" placeholder="Description"></textarea>
    </div>
    
    <div class="my-3">
      <label for="thumb"></label>
      <input class="form-control"type="text" id="thumb" name="thumb" title="thumb" placeholder="Thumbnail">
    </div>

    <div class="my-3">
      <label for="price"></label>
      <input class="form-control"type="number" id="price" name='price' title="price" placeholder="Price" step="0.01">
    </div>

    <div class="my-3">
      <label for="series"></label>
      <input class="form-control"type="text" id="series" name="series" title="series" placeholder="Series">
    </div>

    <div class="my-3">
      <label for="sale_date"></label>
      <input class="form-control"type="date" id="sale_date" name="sale_date" title="sale_date" placeholder="Date">
    </div>
    
    <div class="my-3">
      <label for="type"></label>
      <select class="form-control"name="type" id="type">
        <option value="comic book">Comic Book</option>
        <option value="graphic novel">Graphic Novel</option>
      </select>
    </div>
    
    <input type="submit" id='register' value="Invia">
  </form>
</div>

@endsection