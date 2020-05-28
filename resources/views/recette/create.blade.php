@extends('posts.index')

@section('content')

<h1 class="text-center">Add a post</h1>

<form action="{{route('recette.store')}}" method="POST">
    @csrf
    <div class="form-group">
      <label for="ingredient">Ingrédient</label>
        <input type="text" name="ingredient" id="" class="form-control" placeholder="" value="" 
        aria-describedby="helpId">
    </div>
    <div class="form-group">
        <label for="quantite">Quantité</label>
        <input type="text" name="quantite" id="" class="form-control" placeholder="" value="" 
        aria-describedby="helpId">
    </div>
    <button type="submit" class="btn btn-primary">Submit</button>
</form>

@endsection 