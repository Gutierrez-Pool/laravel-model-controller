@extends('layouts/app')

@section('content')

    <div class="container">
        <h1 class="py-5">Film</h1>

        <div class="col-12 py-4 d-flex justify-content-around flex-wrap gap-3">
            @foreach ($movies as $movie)   
                <div class="card col-3">
                    <div class="card-body">
                        <h5 class="card-title">{{$movie->title}}</h5>
                        <p class="card-text"><small>{{$movie->original_title}}</small></p>
                    </div>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item">{{$movie->nationality}}</li>
                        <li class="list-group-item">{{$movie->date}}</li>
                        <li class="list-group-item">{{$movie->vote}}</li>
                    </ul>
                </div>
            @endforeach
        </div>
    </div>

@endsection