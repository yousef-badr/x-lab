@extends('layouts.main')
@section('title','Show Job')
@section('content')
    <div class="container mt-5">
        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        Enter Your Information
                    </div>
                    <div class="card-body">
                        <form action="{{route("jobs.show",$job->id)}}" method="get">
                            @csrf
                            <div class="form-group">
                                <label for="title">Title</label>
                                <input type="text" class="form-control" id="title" name="title" value="{{$job->title}}" readonly>
                            </div>
                            <div class="form-group">
                                <label for="description">Description</label>
                                <textarea id="description" name="description" class="form-control" readonly>{{$job->description}}</textarea> <br>
                            </div>
                            <a href="{{route('jobs.index')}}"><button type="button" class="btn btn-info">Back</button></a>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection
