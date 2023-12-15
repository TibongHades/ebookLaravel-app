@extends('page.base')

@section('content')
<style>
    body {
        background-image: url('images/background.jpg');
        background-size: cover;
        background-position: center;
        color: #fff;
    }

    .container {
        padding-top: 50px;
    }

    .welcome-message {
        text-align: center;
        margin-bottom: 20px;
    }

    img {
        border-radius: 50%;
        width: 60%;

    }

    .start-exploring {
        font-size: 24px;
        margin-top: 20px;
    }

    .explore-button {
        margin-top: 20px;
        padding: 10px 20px;
        font-size: 18px;
        font-weight: bolder;
        background-color: #343a40;
        border: none;
        color: #fff;
        cursor: pointer;
        transition: background-color 0.3s;
    }

    .explore-button:hover {
        background-color: #292e33;
    }
    .message {
        font-weight:bolder;
        color:gold;
    }
</style>

<div class="container mt-4">
    <div class="welcome-message">
        <div class="ebook-logo"><img src="https://img.freepik.com/free-vector/hand-drawn-flat-design-stack-books-illustration_23-2149329902.jpg" alt=""></div>
        <center><div class="message">
        <h2>Welcome to Novel Hall </h2>
        <p class="start-exploring">Read to you hearts Content!</p>
        </div></center>
        <a href="{{ url('/books') }}" class="btn btn-primary explore-button">Explore Books</a>
        
    </div>
</div>
@endsection
