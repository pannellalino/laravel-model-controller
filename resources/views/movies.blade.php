@extends('layout.main')

@section('content')

<div class="container">
    <h1>Movies</h1>
    <div class="container">
        <div class="row">
            @foreach ($movies as $movie)
                <div class="col-3 my-4">
                    <div class="card py-4">
                        <img src="..." class="card-img-top" alt="{{ $movie->title }}">
                        <div class="card-body">
                          <h5 class="card-title">{{ $movie->title }}</h5>
                          <p class="card-text">{{ $movie->nationality }}</p>
                          <p class="card-text">{{ $movie->vote }}</p>
                          <a href="#" class="btn btn-outline-dark">Watch Now</a>
                        </div>
                      </div>
                </div>
            @endforeach
        </div>
    </div>
</div>

@endsection
