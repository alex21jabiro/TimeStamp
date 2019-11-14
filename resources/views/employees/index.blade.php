@extends('layouts.app')

@section('content')
<div class="row">
<div class="col-sm-12">
  
  @if(session()->get('success'))
    <div class="alert alert-success">
      {{ session()->get('success') }}  
    </div>
  @endif

    
    <h1 class="display-3">Employees</h1>  
    <div>
    <a style="margin: 19x;" href="{{ route('employees.create')}}" class="btn btn-primary">New Employee</a>
    </div>  
  <table class="table table-striped">
    <thead>
        <tr>
          <td>ID</td>
          <td>Name</td>
          <td>Job Title</td>
          <td>Phone</td>
          <td>Email</td>
          <td colspan = 2>Actions</td>
        </tr>
    </thead>
    <tbody>
        @foreach($employees as $employee)
        <tr>
            <td>{{$employee->id}}</td>
            <td>{{$employee->f_name}} {{$employee->l_name}}</td>
            <td>{{$employee->job_title}}</td>
            <td>{{$employee->phone}}</td>
            <td>{{$employee->email}}</td>
            <td>
                <a href="{{ route('employees.edit',$employee->id)}}" class="btn btn-primary">Edit</a>
            </td>
            <td>
                <form action="{{ route('employees.destroy', $employee->id)}}" method="post">
                  @csrf
                  @method('DELETE')
                  <button class="btn btn-danger" type="submit">Delete</button>
                </form>
            </td>
        </tr>
        @endforeach
    </tbody>
  </table>

</div>
</div>
@endsection