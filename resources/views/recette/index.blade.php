@extends('posts.index')

@section('content')
<div class="container">
   
    
        <div class="row">
            <div class="col-12">
                <div class="card card-info">
                    <div class="card-header ">
                    <h3 class="card-title">Liste des ingrédients de la recette</h3>
                    <a href="{{route('recette.create')}}">
                        <button class="btn btn-success d-block mx-auto">Add</button>
                    </a>
            
                    </div>
                    <!-- /.card-header -->
                    <div class="card-body table-responsive p-0">
                    <table class="table table-hover text-wrap">
                        <thead>
                        <tr>
                            <th scope="col">Ingrédients</th>
                            <th scope="col">Quantités</th>
                            <th scope="col">Action</th>
                          
                        </tr>
                        </thead>
                        <tbody>
                        @foreach ($recettes as $recette)
                            <tr>
                                <td>{{$recette->ingredient}}</td>
                        
                                <td>{{$recette->quantite}}</td>
          
                                <td class="d-flex">
                                    <a href="{{route('recette.edit', $recette->id)}}">
                                        <button class="btn btn-warning">Edit</button>
                                    </a>
                                    <form action="{{route('recette.destroy',$recette->id)}}" method="post">
                                        @csrf
                                        @method('delete')
                                            <button class="btn btn-danger">Delete</button>
                                    </form>
                                    {{-- <a href="{{route('post.show', $post->id)}}">
                                        <button class="btn btn-info">Show</button>
                                    </a> --}}
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