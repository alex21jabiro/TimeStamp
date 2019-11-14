@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                 <div class="card-header">{<img src="https://image.flaticon.com/icons/png/512/1674/1674929.png" alt="TimeStamp" style = "width: 40px"><font size="5">User Register<font size="3"></div>
                

                <div class="card-body">
                    <form method="post" action="/userregistration">
                     <form method="Get" action="/userregistration">
                         
                
                        @csrf

                        <div class="form-group row">
                            <label for="name" class="col-md-4 col-form-label text-md-right">{{ __('Job Title') }}</label>

                            <div class="col-md-6">
                                <input id="job_title" type="text" placeholder="Job Title" class="form-control @error('name') is-invalid @enderror" name="job_title" value="{{ old('name') }}" required autocomplete="name" autofocus>

                                @error('name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="email" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="f_name" type="text" placeholder="First Name" class="form-control @error('email') is-invalid @enderror" name="f_name" value="{{ old('email') }}" required autocomplete="email">

                                @error('email')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="l_name" type="text"  placeholder="Last Name" class="form-control @error('email') is-invalid @enderror" name="l_name" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                                                <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Phone Number') }}</label>

                            <div class="col-md-6">
                                <input id="phone" type="text" placeholder="Phone" class="form-control @error('email') is-invalid @enderror" name="phone" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Email') }}</label>

                            <div class="col-md-6">
                                <input id="email" type="email" placeholder="Email Address" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text"  placeholder="Password" class="form-control @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            
                            

                            <div class="form-group row">
                            <label for="password" class="col-md-4 col-form-label text-md-right">{{ __('Confirm Password') }}</label>

                            <div class="col-md-6">
                                <input id="password" type="text"  placeholder="Re Enter Password" class="form-control @error('email') is-invalid @enderror" name="password" value="{{ old('email') }}" required autocomplete="email">

                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                            </div>
                            
                
                            
                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
                                    
                                </button>
                            </div>
                            <!-- <div class="col-md-6 offset-md-4">-->

                            <!--        {{ __('Home') }}-->
                                    
                            <!--    </button>-->
                            <!--</div>-->
                        </div>
                        </form>
                    </form>
                    
<!-- <div class="row">-->
<!--<div class="col-sm-12">-->
<!--    <h1 class="display-3">Contacts</h1>    -->
<!--  <table class="table table-striped">-->
<!--    <thead>-->
<!--        <tr>-->
<!--          <td>ID</td>-->
<!--          <td>Name</td>-->
<!--          <td>Email</td>-->
<!--          <td>Job Title</td>-->
<!--          <td>City</td>-->
<!--          <td>Country</td>-->
<!--          <td colspan = 2>Actions</td>-->
<!--        </tr>-->
<!--    </thead>-->
<!--    <tbody>-->
<!--        @foreach($Employees as $employees)-->
<!--        <tr>-->

            <!--<td>{{$employee->id}}</td>-->
<!--            <td>{{$employee->f_name}} {{$employees->l_name}}</td>-->
<!--            <td>{{$employee->job_title}}</td>-->
<!--            <td>{{$employee->phone}}</td>-->
<!--            <td>{{$employee->email}}</td>-->
            <!--<td>{{$employee->password}}</td>-->
<!--            <td>-->
<!--                <a href="{{ route('userregistration.index',$employees->id)}}" class="btn btn-primary">Edit</a>-->
<!--            </td>-->
<!--            <td>-->
<!--                <form action="{{ route('contacts.destroy', $contact->id)}}" method="post">-->
<!--                  @csrf-->
<!--                  @method('DELETE')-->
<!--                  <button class="btn btn-danger" type="submit">Delete</button>-->
<!--                </form>-->
<!--            </td>-->
<!--        </tr>-->
<!--        @endforeach-->
<!--    </tbody>-->
<!--  </table>-->
<!--<div>-->
<!--</div>-->
<!--</div>-->
<!--</div>-->
                    
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
