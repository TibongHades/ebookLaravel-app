@extends('page.base')

@section('content')
<style>
    .btn {
        margin-bottom:2%;
    }
    h2{
        font-size: 50px;
        font-weight: bolder;
    }
</style>
    <center><h2>Authors</h2></center>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ url('/authors/create') }}" class="btn btn-primary btn-add">Add New Author</a>

    <div class="table-container">
        <table class="table table-bordered custom-table">
            <thead class="thead-dark table-header">
                <tr>
                    <th>Name</th>
                    <th>User Name</th>
                    <th>Bio</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($authors as $author)
                    <tr>
                        <td>{{ $author->name }}</td>
                        <td>{{ $author->user->name }}</td>
                        <td>{{ $author->bio }}</td>
                        <td>
                            <a href="{{ url('/authors/'.$author->id) }}" class="btn btn-info btn-sm btn-action">View</a>
                            <a href="{{ url('/authors/'.$author->id.'/edit') }}" class="btn btn-warning btn-sm btn-action">Edit</a>
                            <form action="{{ url('/authors/'.$author->id) }}" method="POST" style="display:inline;">
                                @csrf
                                @method('DELETE')
                                <button type="submit" class="btn btn-danger btn-sm btn-action" onclick="return confirm('Are you sure?')">Delete</button>
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
@endsection
