@extends('page.base')

@section('content')
    <style>
        body {
            background-image: url('images/background.png'); 
            background-size: cover;
            background-position: center;
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
        }

        .img-fluid {
            width: 100%;
            border-radius: 8px;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .card-body {
            background-color: rgba(41, 39, 41, 0.68); 
        }

        .card-footer {
            background-color: rgba(41, 39, 41, 0.68); 
            border: none;
        }

        .btn-dark {
            background-color: #343a40; 
            color: #fff; 
        }

        .btn-dark:hover {
            background-color: #292e33; 
        }
    </style>

    <div class="container">
        <div class="card">
            <div class="card-header">
                <h2>{{ $book->title }}</h2>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <img src="{{ asset($book->cover_image) }}" alt="Book Cover" class="img-fluid">
                    </div>
                    <div class="col-md-6">
                        <p class="lead"><strong>Content:</strong></p>
                        <p>{{ $book->content }}</p>
                        
                        <p class="lead"><strong>Author:</strong></p>
                        <p>{{ $book->author->name }}</p>
                    </div>
                </div>
            </div>
            <div class="card-footer">
                <a href="{{ url('/books') }}" class="btn btn-primary">Back to Books</a>
                <a href="{{ route('books.read', $book->id) }}" class="btn btn-success">Read Book</a>
            </div>

        </div>
    </div>
@endsection
