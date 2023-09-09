@extends('layouts.app')

@section('content')
<div>Create</div>



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
<form action="/georgia" method="post" enctype="multipart/form-data" style="margin-left:860px;">
@csrf
  <div class="form-group" >
    <label  for="formGroupExampleInput">Title</label>
    <input name='title'style="width:250px;" type="text" class="form-control" id="formGroupExampleInput" placeholder="Title">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Description</label>
    <textarea name='description'  style="width:250px;" class="form-control" id="formGroupExampleInput2" placeholder="Description"></textarea>
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Rating.Max-5,Min-1</label>
    <input name='rating_star' style="width:250px;" type="number" class="form-control" id="formGroupExampleInput" placeholder="Rating">
  </div>
  <div class="form-group">
    <label for="formGroupExampleInput2">Image</label>
    <input name='image_path' style="width:250px;" type="file" class="form-control" id="formGroupExampleInput" placeholder="Rating">
  </div>
  <br>
  <button type="submit" class="btn btn-primary">Create</button>
</form>


@endsection