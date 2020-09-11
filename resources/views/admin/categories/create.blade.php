@extends('layouts.app')

@section('content')
<div class="container">
    <h1>Ajouter une category</h1>
    <form method="post" action="{{ route('admin.category.store') }}" enctype="multipart/form-data">
    @csrf
<div class="row">

<div class="col-md-12">
<div class="form-group">
 <label for="category_name">Nom catégories: </label>
 <input type="text" name="category_name" id="category_name" class="form-control" placeholder="Ajouter un nom de catégorie" value="{{old('category_name')}}">
</div>
</div>

<div class="col-md-12">
<div class="form-group">
 <label for="description">Description: </label>
 <textarea name="description" class="form-control" rows="7" cols="2" placeholder="Description facultatif"></textarea>
</div>
</div>


<div class="col-md-4">
<div class="form-group">
 <label for="image">Upload une image 1 </label><br>
 <input type="file" name="image" id="image" class="btn btn-primary" placeholder="Ajouter une image" value="{{old('image')}}" >
</div>
</div>

</div>

<div class="form-group">
 <button type="submit" class="btn btn-success">Ajouter une catégorie</button>

</div>
</form>
</div>
@endsection