@extends('layouts.main')
@section('title', 'List Jobs')
@section('content')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Title</th>
            <th>Description</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($jobs as $job)
            <tr>
                <td>{{ $job->id }}</td>
                <td>{{ $job->title }}</td>
                <td>{{ $job->description }}</td>
                <td>
                    <a href="{{ route('jobs.edit', $job->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="{{ route('jobs.show', $job->id) }}"><button type="button" class="btn btn-warning">Show</button></a>
                    <form action="{{ route('jobs.destroy', $job->id) }}" method="post" style="display: inline">
                        @csrf
                        @method('DELETE')
                        <button type="submit" class="btn btn-danger">Delete</button>
                    </form>
                </td>
            </tr>
        @endforeach
        </tbody>
    </table>
@endsection
