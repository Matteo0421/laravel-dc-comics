@extends('layout.main')

@section('content')

<div class="my_container">
    <h1 class="my-3 text-white">Comics D.C.</h1>
<p class="text-white">Nel nostro database abbiamo {{$num_comic}} Comics</p>

<div class="video-bg">
    <div class="video-container">
        <video src="{{ asset('videos/video1.mp4') }}" autoplay muted loop></video>

    </div>
</div>
</div>

@endsection
