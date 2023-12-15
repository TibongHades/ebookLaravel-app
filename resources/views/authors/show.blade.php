@extends('page.base')

@section('content')
<style>
    .details-container {
        margin-top: 50px;
    }

    .details-card {
        width: 50%;
        margin: 0 auto;
        margin-bottom: 20px;
        background-color: rgba(41, 39, 41, 0.68);
    }

    .details-card .card-header {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
    }

    .details-card .card-body {
        padding: 20px;
        color: #fff;
    }

    .details-card .card-footer {
        text-align: center;
        padding: 10px;
        background-color: #343a40;
    }

    .back-btn {
        width: 140px;
    }
</style>
<div class="container details-container">
    <div class="card details-card">
        <div class="card-header">
            <h2>{{ $author->name }}</h2>
        </div>
        <div class="card-body">
            <p><strong>User:</strong> {{ $author->user->name }}</p>
            <p><strong>Bio:</strong> {{ $author->bio }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ url('/authors') }}" class="btn btn-primary back-btn">Back to Authors</a>
        </div>
    </div>
</div>
@endsection
