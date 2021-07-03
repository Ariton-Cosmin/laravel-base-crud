@extends('layouts.mainlayout')
@section('content')
<h1>COMICS SECTION</h1>

<table class="table">
  <thead>
    <tr>
      <th scope="col"># ID</th>
      <th scope="col">Title</th>
      <th scope="col"></th>
      <th scope="col"></th>
    </tr>
  </thead>
  <tbody>
    @foreach ($comics as $comic )
    <tr>
      <th scope="row">{{$comic['id']}}</th>
      <td>{{$comic['title']}}</td>
      <td><a href="{{route('comics.show',$comic)}}"><button type="button" class="btn btn-primary">SHOW</button></a></td>
      <td> <a href="{{route('comics.edit',$comic)}}"><button type="button" class="btn btn-secondary">EDIT</button></a></td>
      <td>
        <form action="{{route('comics.destroy',$comic)}}" method="POST">
          @csrf
          @method('DELETE')
          <button type="submit" class="btn btn-danger">DELETE</button>
        </form>
        </td>
    </tr>
    @endforeach
    
  </tbody>
</table>

@endsection