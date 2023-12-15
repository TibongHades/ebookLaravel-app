@extends('page.base')

@section('content')
<style>
    .create-book-container {
        margin-top: 50px;
    }

    .create-book-form {
        width: 80%;
        margin: 0 auto;
        background-color: rgba(41, 39, 41, 0.68);
        padding: 20px;
        border-radius: 10px;
    }

    .form-label {
        color: #fff;
        font-weight: bold;
    }

    .form-control {
        margin-bottom: 15px;
    }

    .form-select {
        margin-bottom: 15px;
    }

    .btn-create-book {
        width: 150px;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container create-book-container">
    <div class="create-book-form">
        <center><h2>Create a New Book</h2></center>
        <hr>
        <form method="POST" action="{{ url('/books') }}">
            @csrf

            <div class="form-group">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="description" class="form-label">Description</label>
                <textarea name="description" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="cover_image" class="form-label">Cover Image Link</label>
                <textarea name="cover_image" class="form-control" required></textarea>
            </div>

            <div class="form-group">
                <label for="author_id" class="form-label">Author</label>
                <select name="author_id" class="form-select" required>
                    @foreach($authors as $author)
                        <option value="{{ $author->id }}">{{ $author->name }}</option>
                    @endforeach
                </select>
            </div>

            <center><button type="submit" class="btn btn-primary btn-create-book">Create Book</button></center>
        </form>
    </div>
</div>
@endsection
