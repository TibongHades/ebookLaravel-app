@extends('page.base')

@section('content')
<style>
    .btn {
        margin-bottom: 2%;
    }
    h2 {
        font-size: 50px;
        font-weight: bolder;
    }
</style>
    <center><h2>Chapters</h2></center>

    @if(session('message'))
        <div class="alert alert-success">
            {{ session('message') }}
        </div>
    @endif

    <a href="{{ url('/chapters/create') }}" class="btn btn-primary btn-add">Add New Chapter</a>

    <div class="table-container">
        <table class="table table-bordered custom-table">
            <thead class="thead-dark table-header">
                <tr>
                    <th>Title</th>
                    <th>Content</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach($chapters as $chapter)
                    <tr>
                        <td>{{ $chapter->title }}</td>
                        <td>{{ Illuminate\Support\Str::limit($chapter->content, $limit = 50, $end = '...') }}</td>
                        <td>
                            <a href="{{ url('/chapters/'.$chapter->id) }}" class="btn btn-info btn-sm btn-action">View</a>
                            <a href="{{ url('/chapters/'.$chapter->id.'/edit') }}" class="btn btn-warning btn-sm btn-action">Edit</a>
                            <form action="{{ url('/chapters/'.$chapter->id) }}" method="POST" style="display:inline;">
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
@endsection
