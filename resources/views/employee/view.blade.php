@extends('layouts.main')
@section('title','Show Employee')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Enter Your Information
                    </div>
                    <div class="card-body">
                        <form action="{{route("employees.show",$employees->id)}}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$employees->name}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$employees->email}}" readonly> <br>
                            </div>
                            <div class="form-group">
                                <label for="title">job title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$employees->job->title}}" readonly>
                            </div><br>
                            <a href="{{route('employees.index')}}"><button type="button" class="btn btn-info">Back</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
