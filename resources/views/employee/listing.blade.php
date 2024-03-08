@extends('layouts.main')
@section('title', 'List Employees')
@section('content')
    <table class="table table-striped table-bordered">
        <thead class="thead-dark">
        <tr>
            <th>ID</th>
            <th>Name</th>
            <th>Email</th>
            <th>Job Name</th>
            <th>Action</th>
        </tr>
        </thead>
        <tbody>
        @foreach($employees as $employee)
            <tr>
                <td>{{ $employee->id }}</td>
                <td>{{ $employee->name }}</td>
                <td>{{ $employee->email }}</td>
                <td>{{ $employee->job->title }}</td>
                <td>
                    <a href="{{ route('employees.edit', $employee->id) }}"><button type="button" class="btn btn-primary">Edit</button></a>
                    <a href="{{ route('employees.show', $employee->id) }}"><button type="button" class="btn btn-warning">Show</button></a>
                    <form action="{{ route('employees.destroy', $employee->id) }}" method="post" style="display: inline">
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

