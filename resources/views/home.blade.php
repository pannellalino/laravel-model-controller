@extends('layout.main')

@section('content')

<div class="container">
    <a href="{{ route('movies') }}">
        <button type="button" class="btn btn-outline-dark">Movies</button>
    </a>
</div>

@endsection
