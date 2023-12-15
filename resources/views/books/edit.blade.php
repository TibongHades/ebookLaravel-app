@extends('page.base')

@section('content')
<style>
    .edit-book-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-book-form {
        width: 100%;
        margin: 0 auto;
        background-color: rgba(41, 39, 41, 0.68);
        border-radius: 10px;
        padding: 20px;
    }

    .form-group {
        margin-bottom: 20px;
    }

    .form-label {
        color: #fff;
    }

    .form-control {
        width: 100%;
        padding: 8px;
        box-sizing: border-box;
        border: 1px solid #ccc;
        border-radius: 4px;
        background-color: #f8f8f8;
        color: #333;
    }

    .btn-update-book {
        width: fit-content;
        padding: 10px;
        box-sizing: border-box;
        background-color: #007bff;
        color: #fff;
        border: none;
        border-radius: 4px;
        cursor: pointer;
    }
    h2 {
        text-align:center;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container edit-book-container">
    @if (session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="edit-book-form">
        <h2>Edit Book: {{ $book->title }}</h2>
        <hr>

        <form method="POST" action="{{ url('/books/'.$book->id) }}">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" value="{{ $book->title }}" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required>{{ $book->description }}</textarea>
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" required>{{ $book->content }}</textarea>
            </div>

            <div class="form-group">
                <label for="author_id" class="form-label">Author</label>
                <select name="author_id" class="form-control" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}" {{ $book->author_id == $author->id ? 'selected' : '' }}>
                            {{ $author->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <center><button type="submit" class="btn btn-primary btn-update-book">Update Book</button></center>
        </form>
    </div>
</div>
@endsection
