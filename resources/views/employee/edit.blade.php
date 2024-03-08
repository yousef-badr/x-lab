@extends('layouts.main')
@section('title','Edit Employee')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Enter Your Information
                    </div>
                    <div class="card-body">
                        <form action="{{route("employees.update",$employees->id)}}" method="POST">
                            @csrf
                            @method('PUT')
                            <div class="form-group">
                                <label for="name">Name</label>
                                <input type="text" class="form-control" id="name" name="name" value="{{$employees->name}}" >
                            </div>
                            <div class="form-group">
                                <label for="email">Email</label>
                                <input type="email" id="email" name="email" class="form-control" value="{{$employees->email}}"> <br>
                            </div>
                            <select name="job" id="job">
                                @foreach($jobs as $job)
                                    @if($job->id == $employees->job->id)
                                        <option value="{{ $job->id }}" selected>{{ $job->title }}</option>
                                    @else
                                        <option value="{{ $job->id }}">{{ $job->title }}</option>
                                    @endif
                                @endforeach
                            </select>
                            <button type="Submit" class="btn btn-info">Update</button>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
