@extends('posts.index')

@section('content')

<h1 class="text-center">Add a post</h1>

<form action="{{route('post.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="title">Title</label>
        <input type="text" name="title" id="" class="form-control" placeholder="" value="" 
        aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="text">Text</label>
        <textarea type="text" name="text" id="" class="form-control" placeholder="" >
        </textarea>
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 