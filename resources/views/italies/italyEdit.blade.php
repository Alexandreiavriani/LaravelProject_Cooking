@extends('layouts.app')

@section('content')
<div>$Title Post</div>



@if($errors->any())
    <div>
        <ul>
            @foreach($errors->all() as $error)
            <li style="color:red;">
                {{$error}}
            </li>
            @endforeach
        </ul>
    </div>
@endif
<form action="{{route('update3')}}" method="post" enctype="multipart/form-data" style="margin-left:860px;">
@csrf
<input type="hidden" name="cid" value="{{$Info->id}}">
  <div class="form-group" >
    <label  for="formGroupExampleInput">Title</label>
    <input value="{{$Info->title}}" name='title'style="width:250px;" type="text" class="form-control" id="formGroupExampleInput" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea   name='description'  style="width:250px;" class="form-control" id="formGroupExampleInput2" 
    placeholder="Description">{{$Info->description}}
</textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Rating.Max-5,Min-1</label>
    <input value="{{$Info->rating_star}}" name='rating_star' style="width:250px;" type="number" class="form-control" id="formGroupExampleInput" placeholder="Rating">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input value="{{$Info->image_path}}" name='image_path' style="width:250px;" type="file" class="form-control" id="formGroupExampleInput" placeholder="Rating">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Update</button>
</form>


@endsection