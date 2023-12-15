@extends('page.base')

@section('content')
<style>
    .create-author-container {
        margin-top: 50px;
    }

    .create-author-form {
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

    .form-select {
        margin-bottom: 15px;
    }

    .btn-create-author {
        width: 150px;
    }
</style>
<div class="container create-author-container">
    <div class="create-author-form">
        <h1>Create Author</h1>

        <form action="{{ url('/authors') }}" method="POST">
            @csrf

            <div class="form-group">
                <label for="name" class="form-label">Name</label>
                <input type="text" name="name" id="name" class="form-control" required>
            </div>

            <div class="form-group">
                <label for="user_id" class="form-label">Select User</label>
                <select name="user_id" id="user_id" class="form-select">
                    @foreach ($users as $user)
                        <option value="{{ $user->id }}">{{ $user->name }}</option>
                    @endforeach
                </select>
            </div>

            <div class="form-group">
                <label for="bio" class="form-label">Bio</label>
                <textarea name="bio" id="bio" class="form-control" rows="4"></textarea>
            </div>

            
                <center><button class="btn btn-primary btn-create-author" type="submit">Create Author</button></center>
        </form>
    </div>
</div>
@endsection
