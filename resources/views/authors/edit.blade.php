@extends('page.base')

@section('content')
<style>
    .edit-author-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-author-form {
        width: 50%;
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

    .btn-update-author {
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
<div class="container edit-author-container">
    

    <div class="edit-author-form">
    <h2 class="text-light mb-4">Edit Author</h2>
    <hr>
        <form action="{{ url('/authors/'.$author->id) }}" method="POST">
            @csrf
            @method('PUT')

            <div class="mb-3">
                <label for="name" class="form-label text-light">Name:</label>
                <input type="text" class="form-control" id="name" name="name" value="{{ $author->name }}" required>
            </div>

            <div class="mb-3">
                <label for="user_id" class="form-label text-light">Select User:</label>
                <select name="user_id" id="user_id" class="form-select" required>
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}" {{ $author->user_id == $user->id ? 'selected' : '' }}>
                            {{ $user->name }}
                        </option>
                    @endforeach
                </select>
            </div>

            <div class="mb-3">
                <label for="bio" class="form-label text-light">Bio:</label>
                <textarea class="form-control" id="bio" name="bio" rows="4">{{ $author->bio }}</textarea>
            </div>

            <center><button type="submit" class=" btn-primary btn-update-author">Update Author</button></center>
        </form>
    </div>
</div>
@endsection
