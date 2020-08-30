@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Detailed Page</div>

                <div class="card-body">

                    <h3 class="d-flex justify-content-center">Title:</h3>
                    <h2 class="d-flex justify-content-center">{{ $todolist->title }}</h2>

                    <h3 class="d-flex justify-content-center mt-4">Description:</h3>
                    <h2 class="d-flex justify-content-center">{{ $todolist->description }}</h2>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection