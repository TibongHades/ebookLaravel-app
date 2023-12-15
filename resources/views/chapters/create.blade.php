@extends('page.base')

@section('content')
<style>
    .create-chapter-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .create-chapter-form {
        width: 50%;
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

    .btn-create-chapter {
        width: 200px;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container create-chapter-container">
    <div class="create-chapter-form">
        <center><h1>Create Chapter</h1></center>
        <hr>

        <form action="{{ url('/chapters') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="book_id" class="form-label">Select Book</label>
                <select name="book_id" id="book_id" class="form-select">
                    @foreach ($books as $book)
                        <option value="{{ $book->id }}">{{ $book->title }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group mt-2">
                <label for="title" class="form-label">Title</label>
                <input type="text" name="title" id="title" class="form-control">
            </div>

            <div class="form-group mt-2">
                <label for="content" class="form-label">Content</label>
                <textarea name="content" id="content" class="form-control" rows="4"></textarea>
            </div>

            <div class="d-grip gap-2 d-md-flex justify-content-md-end">
                <button class="btn btn-primary btn-create-chapter" type="submit">Create Chapter</button>
            </div>
        </form>
    </div>
</div>
@endsection
