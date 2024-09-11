@extends('layout.main')
@push('head')
<title>Todo List App</title>
    
@endpush

@section('main-section')

<div class="container">
    <div class="d-flex justify-content-between align-items-center my-5">
        <div class="h2">All Todos</div>
        <a href="" class="btn btn-primary btn-lg">Add Todo</a>
    </div>

    <table class="table table-stripped table-dark">
        <tr>
            <th>Name</th>
            <th>Work</th>
            <th>Due Date</th>
            <th>Action</th>
        </tr>

        <tr valign='meddle'>
            <td>Name</td>
            <td>Work</td>
            <td>Due Date</td>
            <td>
                <a href="" class="btn btn-danger btn-sm">Delete</a>
            </td>
        </tr>
    </table>

</div>
    
@endsection