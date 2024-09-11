@extends('layout.main')
@push('head')
    <title>Todo List App</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Update Todo</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
        </div>

        <div class="card">
            <div class="card-body">

                <form action="{{route("todo.updateData")}}" method="post">
                    @csrf
                    <label class="form-label mt-4" for="">Name</label>
                    <input type="text" name="name" class="form-control" value="{{$todo->name}}">

                    <label class="form-label mt-4" for="">Work</label>
                    <input type="text" name="work" class="form-control" value="{{$todo->work}}">

                    <label class="form-label mt-4" for="">Due Date</label>
                    <input type="date" name="dueDate" class="form-control" value="{{$todo->dueDate}}">

                    <input type="number" name="id" value="{{$todo->id}}" hidden>

                    <button class="btn btn-primary btn-lg mt-4">Update Todo</button>

                    
                </form>

            </div>
        </div>
    @endsection
