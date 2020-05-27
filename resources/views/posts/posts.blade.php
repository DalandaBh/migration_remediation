@extends('posts.index')

@section('content')
<div class="container">
        {{-- <div class="content-header">
            <div class="container-fluid">
                <div class="row mb-2">
                <div class="col-sm-6">
                    <h1 class="m-0 text-dark">Dashboard</h1>
                </div><!-- /.col -->
                <div class="col-sm-6">
                    <ol class="breadcrumb float-sm-right">
                    <li class="breadcrumb-item"><a href="/admin">Home</a></li>
                    <li class="breadcrumb-item active">Articles Blog</li>
                    </ol>
                </div><!-- /.col -->
                </div><!-- /.row -->
            </div><!-- /.container-fluid -->
        </div> --}}
    
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header ">
                    <h3 class="card-title">Posts</h3>
                    <a href="{{route('post.create')}}">
                        <button class="btn btn-light d-block mx-auto">Add</button>
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
{{-- {{$articles->links()}} --}}
@endsection