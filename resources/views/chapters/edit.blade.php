@extends('page.base')

@section('content')
<style>
    .edit-chapter-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-chapter-form {
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

    .btn-update-chapter {
        width: 200px;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container edit-chapter-container">
    <div class="edit-chapter-form">
        <center><h2>Edit Chapter</h2></center> 
        <hr>
        <form action="{{ url('/chapters/'.$chapter->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="form-group">
                <label for="title" class="form-label">Title:</label>
                <input type="text" class="form-control" id="title" name="title" value="{{ $chapter->title }}" required>
            </div>

            <div class="form-group">
                <label for="content" class="form-label">Content:</label>
                <textarea class="form-control" id="content" name="content" rows="4" required>{{ $chapter->content }}</textarea>
            </div>

            <center><button type="submit" class="btn btn-primary btn-update-chapter">Update Chapter</button></center>
        </form>
    </div>
</div>
@endsection
