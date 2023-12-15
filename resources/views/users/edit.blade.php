@extends('page.base')

@section('content')
<style>
    .edit-user-container {
        margin-top: 50px;
        background-image: url('images/background.png');
        background-size: cover;
        background-position: center;
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .edit-user-form {
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

    .btn-update-user {
        width: 150px;
    }
    h2 {
        text-align:center;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container edit-user-container">
    <div class="edit-user-form">
        <h2>Edit User</h2>
        <hr>
        <form action="{{ url('/users/'.$user->id) }}" method="POST">
            @csrf
            @method('PUT')
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" value="{{ $user->name }}" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" value="{{ $user->email }}" required>
            </div>

            <center><button type="submit" class="btn btn-primary btn-update-user">Update User</button></center>
        </form>
    </div>
</div>
@endsection
