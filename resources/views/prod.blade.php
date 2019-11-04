    
@extends('layouts.master')
@section('content')
<div class="container-fluid">

@if($message = Session::get('Success'))
<div class="alert alert-success">
<p align="center">{{$message}}</p>
</div>
@endif

@if($message = Session::get('error'))
<div class="alert alert-danger">
<p align="center">{{$message}}</p>
</div>
@endif

</div>
<div class="input-group">
<form class="form-inline ml-auto" action="/search">
      <div class="md-form my-0">
      <input class="form-control form-control-sm mr-3 w-85" type="search" name="search" placeholder="Rechercher"
    aria-label="Search">
      </div>
      <i class="fas fa-search" aria-hidden="true"></i>
    </form>
<div align="right">
 <a href="{{ route('prod.create') }}" class="btn btn-success">
 <span class="fa fa-plus-circle">AJOUTER UN PRODUIT</span></a>
</div>
<table class="table table-bordered table-striped bg-dark" style="color:white; border:none">
 <tr class="text-center">
  <th width="10%">Images</th>
  <th >Designation</th>
  <th >Prix</th>
  <th >Quantité</th>
  <th >Categorie</th>
  <th >Action</th>
 </tr>
 @foreach($data as $prod)
 <tbody style="color:black; font:blod; background:#ffff">
  <tr class="text-center">
   <td><img src="{{ URL::to('/') }}/images/{{ $prod->image_prod }}"  width="90" height="90" /></td>
   <td>{{ $prod->designation_prod }}</td>
   <td>{{ $prod->prix }}</td>
   <td>{{ $prod->quantite }}</td>
   <td>{{ $prod->cat_id }}</td>
   <td width="25%">
   <form action="{{ route('prod.destroy', $prod->id) }}" method="post">
	<a href="{{ route('prod.edit', $prod->id) }}" class="btn btn-primary"><span class="fa fa-edit"></span></a>
	{{csrf_field()}}
    {{method_field('DELETE')}}
	<button type="submit" class="btn btn-danger"><span class="fa fa-trash"></span></button>
	</form>
    
            
   </td>
  </tr>
  </tbody>
 @endforeach
</table>
{!! $data->links() !!}
@endsection