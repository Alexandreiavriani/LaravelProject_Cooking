@extends('layouts.app')

@section('content')
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="bg-image" 
style="background-image: url(&quot;https://www.wallpaperup.com/uploads/wallpapers/2018/08/10/1286188/a9a68f184b4beea06a37a90c662439bb-1000.jpg&quot);
            height: 500px; position:relative;top:-25px;background-position:center center;
            background-size:cover;">
<h1 style="color:white;font-weight: bold;text-transform:uppercase;text-align:center;
position:relative; top:200px;font-size:100px;">
</h1>
</div>
<div style="text-align:center; font-weight:bold;font-size:70px;">Italy Food</div>


@if(session()->has('message'))

<div >
<p style="color:green";>

{{session()->get('message')}}

</p>
</div>
@endif



@if(Auth::check())
   <p><a href="/italyCreate" class="btn btn-primary" role="button" style="margin-left:200px;">Create Post Food</a> 

@endif



@foreach($italies as $food)
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
        <p><a href="/Italyedit/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:green;">Edit</a>
        <a href="/Italydelete/{{$food->id}}" class="btn btn-primary" role="button" style="background-color:red; border:solid red 1px;">Delete</a>  
        @endif
      </div>
    </div>
  </div>
</div>


 @endforeach 
@endsection