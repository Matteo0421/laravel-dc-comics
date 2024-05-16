@extends('layout.main')

@section('content')

<h1 class="my-3 text-white">Nuovo Comics D.C.</h1>

<div class="row">
    <div class="col">
        <form action="{{route('comics.store')}}" method="POST">
            @csrf
            <div class="mb-3 text-white">

             <label for="title" class="form-label ">Titolo</label>
             <input name="title" type="Text" class="form-control" id="title" >

            </div>
            <div class="mb-3 text-white">

             <label for="slug" class="form-label">Slug</label>
             <input name="slug" type="Text" class="form-control" id="slug" >

            </div>
            <div class="mb-3 text-white">

             <label for="description" class="form-label ">Descrizione</label>
             <textarea name="description" class="form-control" id="description"> </textarea>

            </div>

            <div class="mb-3 text-white">

             <label for="thumb" class="form-label">Copertina</label>
             <input name="thumb" type="Text" class="form-control" id="thumb" >

            </div>

            <div class="mb-3 text-white">

             <label for="price" class="form-label">Prezzo</label>
             <input name="price" type="Text" class="form-control" id="price" >

            </div>
            <div class="mb-3 text-white">

             <label for="series" class="form-label">Saga</label>
             <input name="series" type="Text" class="form-control" id="series" >

            </div>
            <div class="mb-3 text-white">

             <label for="sale_date" class="form-label">Giorno di Uscita</label>
             <input name="sale_date" type="Text" class="form-control" id="sale_date" >

            </div>
            <div class="mb-3 text-white ">

             <label for="type" class="form-label ">Genere</label>
             <input name="type" type="Text" class="form-control" id="type" >

            </div>

            <div class="mb-3 text-white">
                <label for="artists" class="form-label">Artisti</label>
                <textarea name="artists" class="form-control" id="artists"></textarea>
            </div>

            <div class="mb-3 text-white">
                <label for="writers" class="form-label">Sceneggiatori</label>
                <textarea name="writers" class="form-control" id="writers"></textarea>
            </div>

            <button class="btn btn-danger" type="submit">Invia il nuovo Fumetto</button>

            <button class="btn btn-warning" type="submit">Reset</button>

         </form>
    </div>
</div>

@endsection
