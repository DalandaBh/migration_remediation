@extends('posts.index')

@section('content')
<div class="container">
   
    
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header ">
                    <h3 class="card-title">Posts</h3>
                    <a href="{{route('post.create')}}">
                        <button class="btn btn-success d-block mx-auto">Add</button>
                    </a>
            
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-wrap">
                        <thead>
                        <tr>
                            <th scope="col">Title</th>
                            <th scope="col">Text</th>
                            <th scope="col">Action</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($posts as $post)
                            <tr>
                                <td>{{$post->title}}</td>
                        
                                <td>{{$post->text}}</td>
          
                                <td class="d-flex">
                                    <a href="{{route('post.edit', $post->id)}}">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <form action="{{route('post.destroy',$post->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                    </form>
                                    <a href="{{route('post.show', $post->id)}}">
                                        <button class="btn btn-info">Show</button>
                                    </a>
                                </td>
                            </tr>
                            
                        @endforeach
                        </tbody>
                    </table>
                    </div>
                    <!-- /.card-body -->
                </div>
                <!-- /.card -->
            </div>
        </div>
</div>

@endsection