@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="bg-image" 
style="background-image: url(&quot;https://www.thespruceeats.com/thmb/w9RrQdVY3oZMT2o7IpIig2pMbNk=/940x0/filters:no_upscale():max_bytes(150000):strip_icc():format(webp)/GettyImages-545285962-5ad89accae9ab800380ec5a2.jpg&quot);
            height: 500px; position:relative;top:-25px;background-position:center center;
            background-size:cover;">
<h1 style="color:white;font-weight: bold;text-transform:uppercase;text-align:center;
position:relative; top:200px;font-size:100px;">
</h1>
</div>
<div style="text-align:center; font-weight:bold;font-size:70px;">Chinese Food</div>
<!-- <hr style="width:1450px; margin-left:200px;"> -->

@if(session()->has('message'))

<div >
<p style="color:green";>

{{session()->get('message')}}

</p>
</div>
@endif



@if(Auth::check())
   <p><a href="/chinaCreate" class="btn btn-primary" role="button" style="margin-left:200px;">Create Post Food</a> 

@endif

@foreach($dishes as $food)

<!-- <div class="row" style="margin-left:860px;" >
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
      <img src="https://www.w3schools.com/images/w3schools_green.jpg" style='width:200px;'alt="...">
      <div class="caption">
        <h3>{{$food->title}}</h3>
        <p>{{$food->description}}</p>

        <div class="text-danger">
          @for($i=1;$i<=$food->rating_star;$i++)
        <span class="fa fa-star checked"></span>
        @endfor
        </div>
        
      </div>
    </div>
  </div>
</div> -->


<!-- <div class="row" style="margin-left:1125px;position:relative;top:-373px; width:330px;" >
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
      <img src="https://www.w3schools.com/images/w3schools_green.jpg" style='width:200px;'alt="...">
      <div class="caption">
        <h3>Thumbnaifff</h3>
        <p>fwrgddddddddd</p>
        <div class="text-danger">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        </div>
        <<p><a href="#" class="btn btn-primary" role="button">Button</a> <a href="#" class="btn btn-default" role="button">Button</a></p> 
      </div>
    </div>
  </div>
</div> -->
<hr style="width:1360px; margin-left:200px;"> 

<div  class="row" style="margin-left:690px;" >
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
      <img src="{{asset('images/'.$food->image_path)}}" style='width:500px;'alt="...">
      <div class="caption">
        <h3>{{$food->title}}</h3>
        <p>{{$food->description}}</p>

        <div class="text-danger">
          @for($i=1;$i<=$food->rating_star;$i++)
        <span class="fa fa-star checked"></span>
        @endfor
        </div>
        @if(Auth::check())
        <p><a href="/Chinaedit/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:green;">Edit</a>
        <a href="/Chinadelete/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:red; border:solid red 1px;">Delete</a>  
        @endif
      </div>
    </div>
  </div>
</div>
<!-- <hr style="width:100px; margin-left:200px;"> -->


<!-- <div class="row" style="margin-left:860px;   " >
  <div class="col-sm-6 col-md-4" >
    <div class="thumbnail">
      <img src="https://www.w3schools.com/images/w3schools_green.jpg" style='width:200px;'alt="...">
      <div class="caption">
        <h3>Thumbnail label</h3>
        <p>fwrgrg</p>
<div class="text-danger">
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        <span class="fa fa-star checked"></span>
        </div>
        
      </div>
    </div>
  </div>
</div>
@endforeach -->



@endsection