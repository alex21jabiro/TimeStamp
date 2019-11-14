@extends('layouts.app')

@section('content')



<div class="container">

    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                
			<body  style="font-family: 'Roboto 700', sans-serif;" >

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <a class="navbar-brand" href="#">
        
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <!--<li>-->
            <!--  <a style = "font-size: 18px" class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>-->
            <!--</li>-->
            <li class="nav-item">
              <a style = "font-size: 20px" class="nav-link" href="/business">Business Registration</a>
            </li>
            <li class="nav-item">
              <a style = "font-size: 20px" class="nav-link" href="/paymentselection">Plans</a>
            </li>
            <li class="nav-item">
              <a style = "font-size: 20px" class="nav-link" href="/payment">Payment</a>
            </li>
            <li class="nav-item">
              <a style = "font-size: 20px" class="nav-link" href="/employees">Employee Registration</a>
            </li>
            <li class="nav-item">
                <a style = "font-size: 20px" class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>

<div class="jumbotron text-center" style = "padding: 12px;">
  <div><img src="https://image.flaticon.com/icons/png/512/1674/1674929.png" alt="TimeStamp" style = "width: 60px"></div>
  <h1 style = "font-size: 70px">TimeStamp</h1>
  <p style = "font-size: 20px">"Timekeeping Made Easy!"</p> 
</div>
  
<div class="container">
  <div class="row">
  
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Business Register</h5>
              <h6 class="card-subtitle mb-2 text-muted">Business Register</h6>
              <p class="card-text">Get started and register your business here!</p>
        
            </div>
    </div>
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Plan Selection</h5>
              <h6 class="card-subtitle mb-2 text-muted">Plans</h6>
              <p class="card-text">Let's choose a plan that fits your needs.</p>
           
            </div>
    </div>
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Payment Portal</h5>
              <h6 class="card-subtitle mb-2 text-muted">Pay Here</h6>
              <p class="card-text">Pay your monthly payment here.</p>
             
            </div>
    </div>
   
  </div>
</div>


</body>
                <div class="card-body">
                    @if (session('status'))
                        <div class="alert alert-success" role="alert">
                            {{ session('status') }}
                        </div>
                    @endif

                  
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
