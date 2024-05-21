@extends('layout.main')

@section('content')

<h1 class="my-3 text-white">{{$comic->title}}</h1>

@if ($errors->any())
    <div class="alert alert-danger" role="alert">
        <ul class="d-flex flex-column">
            @foreach ($errors->all() as $error)
                <li>{{$error}}</li>
            @endforeach
        </ul>
    </div>
@endif

<div class="row">
    <div class="col">
        <form action="{{route('comics.update', $comic)}}" method="POST">
            @csrf
            @method('PUT')
            <div class="mb-3 text-white">
                <label for="title" class="form-label">Titolo</label>
                <input
                    name="title"
                    type="text"
                    class="form-control @error('title') is-invalid @enderror"
                    id="title"
                    value="{{old('title', $comic->title)}}">

                @error('title')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="slug" class="form-label">Slug</label>
                <input
                    name="slug"
                    type="text"
                    class="form-control @error('slug') is-invalid @enderror"
                    id="slug"
                    value="{{old('slug', $comic->slug)}}">

                @error('slug')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="description" class="form-label">Descrizione</label>
                <textarea
                    name="description"
                    class="form-control @error('description') is-invalid @enderror"
                    id="description">{{old('description', $comic->description)}}</textarea>

                @error('description')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="thumb" class="form-label">Copertina</label>
                <input
                    name="thumb"
                    type="text"
                    class="form-control @error('thumb') is-invalid @enderror"
                    id="thumb"
                    value="{{old('thumb', $comic->thumb)}}">

                @error('thumb')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="price" class="form-label">Prezzo</label>
                <input
                    name="price"
                    type="text"
                    class="form-control @error('price') is-invalid @enderror"
                    id="price"
                    value="{{old('price', $comic->price)}}">

                @error('price')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="series" class="form-label">Saga</label>
                <input
                    name="series"
                    type="text"
                    class="form-control @error('series') is-invalid @enderror"
                    id="series"
                    value="{{old('series', $comic->series)}}">

                @error('series')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="sale_date" class="form-label">Giorno di Uscita</label>
                <input
                    name="sale_date"
                    type="text"
                    class="form-control @error('sale_date') is-invalid @enderror"
                    id="sale_date"
                    value="{{old('sale_date', $comic->sale_date)}}">

                @error('sale_date')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="type" class="form-label">Genere</label>
                <input
                    name="type"
                    type="text"
                    class="form-control @error('type') is-invalid @enderror"
                    id="type"
                    value="{{old('type', $comic->type)}}">

                @error('type')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="artists" class="form-label">Artisti</label>
                <textarea
                    name="artists"
                    class="form-control @error('artists') is-invalid @enderror"
                    id="artists">{{old('artists', $comic->artists)}}</textarea>

                @error('artists')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-3 text-white">
                <label for="writers" class="form-label">Sceneggiatori</label>
                <textarea
                    name="writers"
                    class="form-control @error('writers') is-invalid @enderror"
                    id="writers">{{old('writers', $comic->writers)}}</textarea>

                @error('writers')
                <small class="text-danger">
                    {{$message}}
                </small>
                @enderror
            </div>

            <div class="mb-4 mt-4">
                <button class="btn btn-danger" type="submit">Aggiorna Fumetto</button>
                <button class="btn btn-warning" type="reset">Reset</button>
            </div>
        </form>
    </div>
</div>

@endsection

