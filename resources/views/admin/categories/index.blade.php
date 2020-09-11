@extends('layouts.app')

@section('content')
    <div class="container">
        <h3>Category Information</h3>
        <p><a href="{{ route('admin.categories.create') }}" class="btn btn-primary">Nouvelle catégories</a></p>
 
       <table class="table table-condensed">
      <tr style="background-color:tomato;color:#fff;height:50px;">
          <td>#</td>
          <td>Name</td>
          <td>Description</td>
          <td>Active</td>
          <td>Created</td>
          <td>Last Update</td>
          <td>Image</td>
          <td>Editer</td>
          <td>Supprimer</td>
      </tr>
      @foreach($categories as $category)
      <tr>
          <td>{{ $category->id }} </td>
          <td>{{ $category->category_name }}</td>
          <td>{{ $category->description }}</td>
          <td>{{ $category->is_active }}</td>
          <td>{{ $category->created_at }}</td>
          <td>{{ $category->updated_at }}</td>
          <td>
              <img src="{{ asset('image/categories/'.$category->image) }}" alt="" width="80" height="50">
          </td>
          <td><a href="{{ route('admin.categories.edit', $category->id) }}" class="btn btn-secondary">Editer</a> </td>
          <td> 
          <form action="{{ route('admin.category.destroy', $category->id) }}"  method="POST" enctype="multipart/form-data">
              @csrf 
              @method('DELETE')

              <button type="submit" class="btn btn-danger">Supprimer</button>
          </form>
        </td>
          <td></td>
      </tr>

      @endforeach
  
   </table>
     </div>

     <div class="container">
         <p>{{ $categories->links() }}</p>
     </div>


@endsection
