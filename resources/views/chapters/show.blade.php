@extends('page.base')

@section('content')
<style>
    .chapter-details-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .chapter-details-card {
        width: 100%;
        margin: 0 auto;
        background-color: rgba(41, 39, 41, 0.68);
        border-radius: 10px;
    }

    .card-header {
        background-color: #343a40;
        color: #fff;
        text-align: center;
        border-bottom: 2px solid #fff;
    }

    .card-body {
        color: #fff;
        padding: 20px;
    }

    .card-footer {
        text-align: center;
        background-color: #343a40;
        border-top: 2px solid #fff;
        padding: 10px;
    }

    .btn-back-to-chapters {
        width: 200px;
    }
</style>
<div class="container chapter-details-container">
    <div class="card chapter-details-card">
        <div class="card-header">
            <h2>{{ $chapter->title }}</h2>
        </div>
        <div class="card-body">
            <p>{{ $chapter->content }}</p>
        </div>
        <div class="card-footer">
            <a href="{{ url('/chapters') }}" class="btn btn-primary btn-back-to-chapters">Back to Chapters</a>
        </div>
    </div>
</div>
@endsection
