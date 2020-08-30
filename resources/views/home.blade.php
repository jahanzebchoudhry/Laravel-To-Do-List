@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>

                <div class="card-body">
                    @if (session('status'))
                    <div class="alert alert-success" role="alert">
                        {{ session('status') }}
                    </div>
                    @endif

                    <a href="/todolist/create"><button class="btn btn-dark">Add To-Do-List</button></a>

                </div>
            </div>


            <div class="card mt-4">
                <div class="card-header">All To-Do-Lists</div>

                <div class="card-body">
                    <h1 class="d-flex justify-content-center">To-Do-Lists</h1>


                    @forelse($todolists as $todolist)



                    <div class="container">
                        <div class="row">
                            <div class="col-6">
                                <a href="/todolist/{{ $todolist->id }}/show">
                                    <h3>{{$todolist->title}}</h3>
                                </a>
                            </div>
                            <div class="col-6 d-flex justify-content-end">
                            
                                <a href="/todolist/{{$todolist->id}}/edit"><button
                                        class="btn btn-sm btn-dark mr-1">Update</button>
                                </a>

                                <form action="/todolist/{{$todolist->id}}" method="post">

                                    @csrf

                                    @method('DELETE') 

                                    <button class="btn btn-sm btn-danger">Delete</button>

                                </form>
                            </div>
                        </div>
                    </div>

                    <!-- <div class="d-flex justify-content-start">

                        <a href="/todolist/{{ $todolist->id }}/show">
                            <h3>{{$todolist->title}}</h3>
                        </a>
                        <div>
                            <a href="/todolist/{{$todolist->id}}/edit"><button
                                    class="btn btn-sm btn-dark">Update</button>
                            </a>
                            <a href="#"><button class="btn btn-sm btn-danger">Delete</button>
                            </a>
                        </div>

                    </div> -->

                    @empty

                    <h6>You don't have any To-Do-List</h6>

                    @endforelse


                </div>
            </div>


        </div>
    </div>
</div>
@endsection