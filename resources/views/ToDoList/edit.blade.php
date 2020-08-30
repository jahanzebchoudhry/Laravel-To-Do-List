@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Edit To-Do-List</div>
                <div class="card-body">
                    <form action="/todolist/{{ $todolist->id}}/update" method="post">

                    @method('PUT')
                        @csrf
                        <div class="form-group">
                            <label for="title">Title</label>
                            <input type="text" class="form-control" id="title" name='title' aria-describedby="titleHelp"
                                placeholder="Enter title" value="{{ $todolist->title }}">
                            @error('title')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small id="titleHelp" class="form-text text-muted">Update your title</small>
                        </div>
                        <div class="form-group">
                            <label for="description">Description</label>
                            <input type="text" class="form-control" id="description" placeholder="Enter the Description"
                                name='description' value="{{$todolist->description}}">
                            @error('description')
                            <small class="text-danger">{{ $message }}</small>
                            @enderror
                            <small id="descriptionHelp" class="form-text text-muted">Update your description</small>
                        </div>
                        <button type="submit" class="btn btn-dark">Update To-Do-List</button>
                    </form>

                </div>
            </div>
        </div>
    </div>
</div>
@endsection