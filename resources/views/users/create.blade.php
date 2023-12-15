@extends('page.base')

@section('content')
<style>
    .create-user-container {
        min-height: 100vh;
        display: flex;
        align-items: center;
        justify-content: center;
    }

    .create-user-form {
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

    .btn-create-user {
        width: 150px;
    }
    hr {
        background-color:white;
    }
</style>
<div class="container create-user-container">
    <div class="create-user-form">
        <center><h2>Create User</h2></center>
        <hr>

        <form action="{{ url('/users') }}" method="POST">
            @csrf
            <div class="form-group">
                <label for="name" class="form-label">Name:</label>
                <input type="text" name="name" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="email" class="form-label">Email:</label>
                <input type="email" name="email" class="form-control" required>
            </div>
            <div class="form-group">
                <label for="password" class="form-label">Password:</label>
                <input type="password" name="password" class="form-control" required>
            </div>

            <center><button type="submit" class="btn btn-primary btn-create-user">Create User</button></center>
        </form>
    </div>
</div>
@endsection
