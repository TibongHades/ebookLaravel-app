@extends('page.base')

@section('content')
<style>
    .booksign {
        font-size: 50px;
        font-weight: bolder;
        margin-bottom: 20px;
    }

    .btn-action {
        margin-right: 5px;
    }

    .table-container {
        margin-top: 30px;
        width: 100%; 
        margin-left: auto;
        margin-right: auto;
        overflow-x: auto;
    }

    .table-header {
        background-color: #343a40;
        color: #fff;
    }

    .btn-add {
        margin-bottom: 20px;
        float: left;
    }

    .custom-table {
        background-color: rgba(41, 39, 41, 0.68);
    }

    .search-bar {
        width: 300px;
        float: right;
        margin-bottom: 20px;
    }
    .container {
        padding-top: 50px;
    }
</style>
<div class="container mt-4">
    <center><h2 class='booksign'>Books</h2></center>
    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <div class="search-bar">
        <form action="{{ url('/books') }}" method="GET">
            <div class="input-group">
                <input type="text" class="form-control" name="search" placeholder="Search for books">
                <div class="input-group-append">
                    <button class="btn btn-primary" type="submit">
                        <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="currentColor"
                            class="bi bi-search" viewBox="0 0 16 16">
                            <path
                                d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0" />
                        </svg>Search</button>
                </div>
            </div>
        </form>
    </div>

    <a href="{{ url('/books/create') }}" class="btn btn-primary btn-add">Add New Book</a>

    <div class="table-container">
        <table class="table table-bordered custom-table">
            <thead class="thead-dark table-header">
                <tr>
                    <th>Title</th>
                    <th>Description</th>
                    <th>Author</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($books as $book)
                    <tr>
                        <td>{{ $book->title }}</td>
                        <td>{{ $book->description }}</td>
                        <td>{{ $book->author->name }}</td>
                        <td>
                            <a href="{{ url('/books/'.$book->id) }}"
                                class="btn btn-info btn-sm btn-action">View</a>
                            <a href="{{ url('/books/'.$book->id.'/edit') }}"
                                class="btn btn-warning btn-sm btn-action">Edit</a>
                            <form action="{{ url('/books/'.$book->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit"
                                    class="btn btn-danger btn-sm btn-action"
                                    onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>
@endsection
