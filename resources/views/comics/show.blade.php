@extends('layout.main')

@section('content')

<h1 class="my-3 text-center text-danger">{{$comic->title}}</h1>

<div class="row flex-column text-white">
    <div class="col d-flex  justify-content-center   ">
        <img class="img-fluid  bg-dark" src="{{$comic->thumb}}" alt="">
    </div>

    <div class="col m-4">
        <span class="fs-2 text-danger">Descrizione</span>
        <p class="mt-3"> {{$comic->description}}</p>
        <div class="col d-flex my-3">
            <p class="pe-2">{{$comic->series}} |</p>
            <p class="pe-2">{{$comic->type}} |</p>
            <p class="pe-2"> {{$comic->sale_date}} |</p>
            <p class="pe-2">{{$comic->price}}</p>
        </div>


        <div class="col my-3">
            <span class="fw-bold text-white">Artists:</span>
            <div class="bg-dark p-2 rounded mt-2">
                <table class="table table-dark table-striped">
                    <tbody>
                        @foreach(json_decode($comic->artists) as $artist)
                            <tr>
                                <td>{{$artist}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>
        <div class="col my-3">
            <span class="fw-bold text-white">Writers:</span>
            <div class="bg-dark p-2 rounded mt-2">
                <table class="table table-dark table-striped">
                    <tbody>
                        @foreach(json_decode($comic->writers) as $writer)
                            <tr>
                                <td>{{$writer}}</td>
                            </tr>
                        @endforeach
                    </tbody>
                </table>
            </div>
        </div>

        <div class="my-5">
            <a href="{{route('comics.index')}}" class="btn btn-danger "><i class="fa-solid fa-backward"></i></a>
        </div>


    </div>

</div>

@endsection
