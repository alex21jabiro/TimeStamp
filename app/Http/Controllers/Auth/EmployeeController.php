<?php

namespace App\Http\Controllers;

use App\Employee;
use Illuminate\Http\Request;

class EmployeeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
    $employees = Employee::all();
    
    return view('employees.index', compact('employees'));
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view ('employees.create');
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return \Illuminate\Http\Response
     */
    public function store(Request $request)
    {
        $request->validate([
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required'
        ]);

        $employee = new Employee([
            'f_name' => $request->get('f_name'),
            'l_name' => $request->get('l_name'),
            'job_title' => $request->get('job_title'),
            'phone' => $request->get('phone'),
            'email' => $request->get('email'),
            'password' => $request->get('password')
        ]);
        $employee->save();
        return redirect('/employees')->with('success', 'Employee saved!');
    }

    /**
     * Display the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
          $employee = Employee::find($id);
          return view('employees.edit', compact('employee'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'f_name'=>'required',
            'l_name'=>'required',
            'email'=>'required'
        ]);

        $employee = Employee::find($id);
        $employee->f_name =  $request->get('f_name');
        $employee->l_name = $request->get('l_name');
        $employee->job_title = $request->get('job_title');
        $employee->phone = $request->get('phone');
        $employee->email = $request->get('email');
        $employee->save();

        return redirect('/employees')->with('success', 'Employee updated!');
    }
    /**
     * Remove the specified resource from storage.
     *
     * @param  int  $id
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $employee = Employee::find($id);
        $employee->delete();
        
        return redirect('/employees')->with('success', 'Employee deleted!');
    }
}
