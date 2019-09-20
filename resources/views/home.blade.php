@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">Dashboard</div>
			<body  style="font-family: 'Roboto 700', sans-serif;" >

    <nav class="navbar navbar-expand-lg navbar-light bg-light" >
            <a class="navbar-brand" href="#">
        <img src="TimeStamp.png" alt="TimeStamp" style = "width: 60px">
            </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav" aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>
        <div class="collapse navbar-collapse" id="navbarNav">
          <ul class="navbar-nav">
            <li>
              <a style = "font-size: 25px" class="nav-link" href="#">Dashboard <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
              <a style = "font-size: 25px" class="nav-link" href="#">Projects</a>
            </li>
            <li class="nav-item">
              <a style = "font-size: 25px" class="nav-link" href="#">Invoice</a>
            </li>
            <li class="nav-item">
                <a style = "font-size: 25px" class="nav-link" href="#">Logout</a>
            </li>
          </ul>
        </div>
      </nav>


<div class="jumbotron text-center" style = "padding: 12px;">
  <h1 style = "font-size: 70px">TimeStamp</h1>
  <p style = "font-size: 20px">"Timekeeping Made Easy!"</p> 
</div>
  
<div class="container">
  <div class="row">
  
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
        
            </div>
    </div>
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
           
            </div>
    </div>
    <div class="card col-sm-4"  style="width: 18rem;">
            <div class="card-body">
              <h5 class="card-title">Card title</h5>
              <h6 class="card-subtitle mb-2 text-muted">Card subtitle</h6>
              <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
             
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

                    You are logged in!
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
