@extends('posts.index')

@section('content')

<h1 class="text-center m-5 bg-info">Show a post</h1>

{{-- <form action="{{route('post.store')}}" method="POST">
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
</form> --}}

<div class="row">
    <div class="col-6">
        <h3 class="text-info">Title of the post</h3>
        <h5>{{$post->title}}</h5>
    </div>
    <div class="col-6">
        <h3 class="text-info">Text of the Post</h3>
        <h5>{{$post->text}}</h5>
    </div>
</div>

@endsection 