@extends('layouts.app')

@section('content')
<div class="container my-3">
    <h1>Movies</h1>
    <div class="d-flex flex-wrap">
            @foreach($movies as $movie)
            <div class="p-2 col-6">
                <div class="card w-100 h-100">
                    <h5 class="card-header">{{$movie->title}}</h5>
                    <div class="card-body">
                        @if($movie->title != $movie->original_title)
                            <h5 class="card-title">{{$movie->original_title}}</h5>
                        @endif
                        <p class="card-text">Nationality: {{$movie->nationality}}</p>
                        <p class="card-text">Date: {{$movie->date}}</p>
                        <p class="card-text">Vote: {{$movie->vote}}</p>
                    </div>
                </div>
            </div>
            @endforeach
    </div>

</div>
@endsection