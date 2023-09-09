@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="bg-image" 
style="background-image: url(&quot;https://winesgeorgia.com/wp-content/uploads/2020/07/Foods1.jpeg&quot);
            height: 500px; position:relative;top:-25px;background-position:center center;
            background-size:cover;">
<h1 style="color:white;font-weight: bold;text-transform:uppercase;text-align:center;
position:relative; top:200px;font-size:100px;">
</h1>
</div>
<div style="text-align:center; font-weight:bold;font-size:70px;">Georgia Food</div>


@if(session()->has('message'))

<div >
<p style="color:green";>

{{session()->get('message')}}

</p>
</div>
@endif



@if(Auth::check())
   <p><a href="/georgiaCreate" class="btn btn-primary" role="button" style="margin-left:200px;">Create Post Food</a> 

@endif



@foreach($georgias as $food)
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
        <p><a href="/Georgiaedit/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:green;">Edit</a>
        <a href="/Georgiadelete/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:red; border:solid red 1px;">Delete</a>  
        @endif
      </div>
    </div>
  </div>
</div>


 @endforeach 
@endsection