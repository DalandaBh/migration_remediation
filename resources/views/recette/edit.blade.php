@extends('posts.index')

@section('content')

<h1 class="text-center">Edit</h1>

<form action="{{route('recette.update',$recette->id)}}" method="POST" method="POST">
    @csrf
    @method('put')
    <div class="form-group">
        <label for="ingredient">Ingrédient</label>
          <input type="text" name="ingredient" id="" class="form-control" placeholder="" value="{{$recette->ingredient}}" 
          aria-describedby="helpId">
      </div>
      <div class="form-group">
          <label for="quantite">Quantité</label>
          <input type="text" name="quantite" id="" class="form-control" placeholder="" value="{{$recette->quantite}}" 
          aria-describedby="helpId">
      </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 