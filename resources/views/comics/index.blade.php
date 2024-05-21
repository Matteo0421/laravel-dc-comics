@extends('layout.main')

@section('content')

<div class="container">
    <h1 class="text-center m-4 text-white  ">I FUMETTI DISPONIBILI</h1>

    @if (session('deleted'))
      <div class="alert alert-danger " role="alert">
        {{ session('deleted')}}
      </div>

    @endif

<table class="table table-dark ">
    <thead>
      <tr>
        <th scope="col">ID</th>
        <th scope="col">TITOLO</th>
        <th scope="col">TIPO</th>
        <th scope="col">DATA</th>
        <th scope="col">PREZZO</th>
        <th  scope="col">AZIONE</th>

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
            <th class="d-flex ">
              <a href="{{ route('comics.show', $comic->id)}}" class="btn btn-danger"><i class="fa-regular fa-eye"></i></a>
              <a href="{{ route('comics.edit' , $comic)}}" class="btn btn-danger"><i class="fa-solid fa-pencil"></i></a>

              <form
               action="{{route('comics.destroy', $comic)}}"
               method="POST"
               onsubmit="return confirm('sei sicuro di voler eliminare {{ $comic->title}}?')"
               >
                @csrf
                @method('DELETE')
                <button type="submit" class="btn btn-danger"><i class="fa-solid fa-trash"></i></button>


             </form>
            </th>

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

