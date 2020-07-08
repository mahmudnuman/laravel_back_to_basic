@extends('layouts.app')


@section('content')

<h1 class="text-center my-5">Update ToDo</h1>

<div class="row justify-content-center">
    <div class="col-md-5">
        <div class="card card-default">

            <div class="card-header">Update ToDo</div>

            <div class="card-body">
            <form action="/updatetodo" method="POST">

                    @csrf
            <input type="hidden" name="id" value="{{$todo->id}}">
                    @if ($errors->any())
                            <div class="alert alert-danger">
                                <ul class="list-group">
                                    @foreach ($errors->all() as $error)
                                        <li class="list-group-item">{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                    <div class="form-group">
                        <input type="text" class="form-control" placeholder="Name" name="name" value="{{$todo->name}}">
                    </div>

                    <div class="form-group">
                        <textarea  class="form-control" placeholder="Description" rows="5" cols="5" name="description">{{$todo->description}}</textarea>
                    </div>
                    <div class="form-group text-center">

                        <button type="submit" class="btn btn-success">Update</button>
                    </div>

                </form>
            </div>
        </div>

    </div>

</div>
@endsection