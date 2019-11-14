@extends('layouts.app')


<!DOCTYPE html>
<html>
<head>
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">

</head>
<style>

.button {
  background-color: #FFFFFF;
  border: none;
  color: black;
  padding: 20px;
  text-align: center;
  font-size: 20px;
  opacity: 0.5;
  transition: 0.3s;
  display: inline-block ;
  margin: 5px;
  text-decoration: none;
  cursor: pointer;
  /*top:50%; margin-top:100px;*/
  left:50%; margin-left:750px;
}
.heading {
	font-size:250%;
	color:#32325d;
	font-style:normal;
	font-family:roboto 700;
	text-align:center;
	}

.button:hover {opacity: 1}




</style>

@section('content')

<body>

<h2 align="center">   <img src="https://image.flaticon.com/icons/png/512/1674/1674929.png" alt="TimeStamp" style = "width: 60px" >TimeStamp Payment Options</h2>

<form method="get" action="payment">
<form method="post" action="/paymentselection">
<button class="button"><img src="https://i.imgur.com/EieLte2.jpg" width="200" align="center" height="200" alt="basic">
<span style="font-family:roboto 700">
<font size="6">
<font color="blue">
<div align="center">Basic
</font></div>
<font size="3">
<div>- $10/month </div>
<div>- 50 Users</div>
</font>
</button>
</form>
</form>

<form method="get" action="payment">
<form method="post" action="PaymentAction2">
<button class="button"><img src="https://i.imgur.com/zmdRkX2.jpg" width="200" align="center" height="200" alt="Standard">
<span style="font-family:roboto 700">
<font size="6">
<font color="blue">
<div align="center">Standard
</font></div>
<font size="3">
<div>- $25/month</div>
<div>- 200 Users</div>
</font>
</button>
</form>
</form>

<form method="get" action="payment">
<form method="post" action="PaymentAction3">
<button class="button"><img src="https://i.imgur.com/RgF79Pn.png" width="200" align="center" height="200" alt="pro">
<span style="font-family:roboto 700">
<font size="6">
<font color="blue">
<div align="center">Pro
</font></div>
<font size="3">
<div>- $40/month</div>
<div>- 500 Users</div>
</font>
</button>
</form>
</form>

</body>
</html>
@endsection
