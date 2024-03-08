<?php

namespace App\Http\Controllers;

use App\Models\Employee;
use App\Models\Job;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $employees = Employee::with('job')->get();
        return view('employee.listing' , compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create(Job $job)
    {
        $jobs = Job::all();
        return view('employee.create',compact('jobs'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request , Job $job)
    {
        $this->validate($request, [
            'name' => 'required',
            'email' => 'required|email|unique:employees,email,'. $request->id,
        ]);
        $jobId = $request->job;
        Employee::create([
            'name' => $request->name,
            'email' => $request->email,
            'job_id' => $jobId,
        ]);
        return redirect()->route('employees.index');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $employees = Employee::findorfail($id);
        return view('employee.view',compact('employees'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $employees = Employee::findorfail($id);
        $jobs = Job::all();
        return view('employee.edit',compact('employees','jobs'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $this->validate($request, [
            'email' => 'email|unique:employees,email,'. $request->id,
        ]);
        $employee = Employee::findorfail($id);
        $employee->update([
            'name' => $request->name,
            'email' => $request->email
        ]);
        return redirect()->route('employees.index');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        Employee::findorfail($id)->delete();
        return redirect()->route('employees.index');
    }
}
