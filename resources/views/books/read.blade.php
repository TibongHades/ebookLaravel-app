@extends('page.base')

@section('content')
    <style>
        body {
            background-color: black;
        }

        .container {
            padding-top: 50px;
        }

        .card {
            border: none;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }

        .card-header {
            background-color: #343a40;
            color: #fff;
            border: none;
            margin-bottom: 0;
            text-align: center;
            padding: 20px;
        }

        .card-body {
            background-color: #fff;
            padding: 20px;
            border-bottom: 1px solid #dee2e6;
        }

        .chapter-title {
            font-size: 1.5em;
            color: #343a40;
        }

        .chapter-content {
            color: #555;
        }

        .card-footer {
            background-color: #343a40;
            border: none;
            padding: 15px;
            text-align: center;
        }

        .btn-primary {
            background-color: #007bff;
            color: #fff;
        }

        .btn-primary:hover {
            background-color: #0056b3;
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $book->title }}</h2>
            </div>
            <div class="card-body">
                @foreach($book->chapters as $chapter)
                    <div class="mb-3">
                        <h4 class="chapter-title">{{ $chapter->title }}</h4>
                        <p class="chapter-content">{{ $chapter->content }}</p>
                    </div>
                @endforeach
            </div>
            <div class="card-footer">
                <a href="{{ url('/books') }}" class="btn btn-primary">Back to Books</a>
            </div>
        </div>
    </div>
@endsection
