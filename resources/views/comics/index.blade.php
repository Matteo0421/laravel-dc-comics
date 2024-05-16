@extends('layout.main')

@section('content')

<div class="container">
    <h1 class="text-center m-4 ">I FUMETTI DISPONIBILI</h1>

<table class="table">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITOLO</th>
        <th scope="col">TIPO</th>
        <th scope="col">DATA</th>
        <th scope="col">PREZZO</th>
        <th scope="col">AZIONE</th>

      </tr>
    </thead>
    <tbody>
        @foreach ($comics as $comic )


        <tr>
            <th >{{$comic->id}}</th>
            <th >{{$comic->title}}</th>
            <th >{{$comic->type}}</th>
            <th >{{$comic->sale_date}}</th>
            <th >{{$comic->price}}</th>
            <th >{{$comic->departure_time}}</th>

        </tr>
        @endforeach


        </tbody>
  </table>

  {{-- <div class="row justify-content-center">
    <div class="col-md-6">

        {{ $comics->links('pagination::bootstrap-5') }}
    </div>
  </div> --}}

</div>

@endsection

