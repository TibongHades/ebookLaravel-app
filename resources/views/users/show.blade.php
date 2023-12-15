@extends('page.base')

@section('content')
<style>
    .user-details-container {
        margin-top: 50px;
    }

    .user-details-header {
        background-color: #343a40;
        color: #fff;
        padding: 10px;
        text-align: center;
        font-size: 24px;
        font-weight: bold;
        margin-bottom: 20px;
    }

    .details-table {
        width: 50%;
        margin: 0 auto;
        border-collapse: collapse;
        margin-bottom: 20px;
    }

    .details-table th, .details-table td {
        padding: 12px;
        border: 1px solid #ddd;
        text-align: left;
    }

    .details-table th {
        background-color: #343a40;
        color: #fff;
    }

    .back-btn {
        display: block;
        width: 120px;
        margin: 0 auto;
        text-align: center;
    }
</style>
<div class="container user-details-container">
    <div class="user-details-header">
        User Details
    </div>

    <table class="table table-bordered details-table">
        <tr>
            <th>Name</th>
            <td>{{ $user->name }}</td>
        </tr>
        <tr>
            <th>Email</th>
            <td>{{ $user->email }}</td>
        </tr>
    </table>

    <a href="{{ url('/users') }}" class="btn btn-secondary back-btn">Back to Users</a>
</div>
@endsection
