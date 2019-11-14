@extends('layouts.app') 
@section('content')
<div class="row">
    <div class="col-sm-8 offset-sm-2">
        <h1 class="display-3">Update Employee</h1>

        @if ($errors->any())
        <div class="alert alert-danger">
            <ul>
                @foreach ($errors->all() as $error)
                <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
        <br /> 
        @endif
        <form method="post" action="{{ route('employees.update', $employee->id) }}">
            @method('PATCH') 
            @csrf
            <div class="form-group">

                <label for="f_name">First Name:</label>
                <input type="text" class="form-control" name="f_name" value={{ $employee->f_name }} />
            </div>

            <div class="form-group">
                <label for="l_name">Last Name:</label>
                <input type="text" class="form-control" name="l_name" value={{ $employee->l_name }} />
            </div>
            <div class="form-group">
                <label for="job_title">Job Title:</label>
                <input type="text" class="form-control" name="job_title" value={{ $employee->job_title }} />
            </div>
            <div class="form-group">
                <label for="phone">Phone:</label>
                <input type="text" class="form-control" name="phone" value={{ $employee->phone }} />
            </div>
            <div class="form-group">
                <label for="email">Email:</label>
                <input type="text" class="form-control" name="email" value={{ $employee->email }} />
            </div>
            <div class="form-group">
                <label for="password">Password:</label>
                <input type="text" class="form-control" name="password" value={{ $employee->password }} />
            </div>
            <button type="submit" class="btn btn-primary">Update</button>
        </form>
    </div>
</div>
@endsection