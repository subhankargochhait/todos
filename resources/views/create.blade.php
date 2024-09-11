@extends('layout.main')
@push('head')
    <title>Add Todo</title>
@endpush

@section('main-section')
    <div class="container">
        <div class="d-flex justify-content-between align-items-center my-5">
            <div class="h2">Create Add Todo</div>
            <a href="{{route("todo.home")}}" class="btn btn-primary btn-lg">Back</a>
        </div>
        <div class="card">
            <div class="card-body">

                <form action="{{route("todo.store")}}" method="post">
                    @csrf
                    <label class="form-label mt-4" for="">Name</label>
                    <input type="text" name="name" class="form-control">
                    <div class="text-danger">
                        @error('name')
                        {{$message}}
                        @enderror
                    </div>

                    <label class="form-label mt-4" for="">Work</label>
                    <input type="text" name="work" class="form-control">
                    <div class="text-danger">
                        @error('work')
                        {{$message}}
                        @enderror
                    </div>

                    <label class="form-label mt-4" for="">Due Date</label>
                    <input type="date" name="dueDate" class="form-control">
                    <div class="text-danger">
                        @error('dueDate')
                        {{$message}}
                        @enderror
                    </div>

                    <button class="btn btn-primary btn-lg mt-4">Add Todo</button>

                    
                </form>

            </div>
        </div>
    @endsection
