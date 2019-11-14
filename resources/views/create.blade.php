@extends('layouts.master')

@section('content')

@if($errors->any())
<div class="alert alert-danger">
 <ul>
  @foreach($errors->all() as $error)
  <li>{{ $error }}</li>
  @endforeach
 </ul>
</div>
@endif
<style>
        .container{
            padding:0.5%;
        }
    </style>
<div class="container">
<h2 class="alert alert-success text-center color:red">AJOUTER UN PRODUIT</h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<form method="post" action="{{ route('prod.store') }}" enctype="multipart/form-data">

{{csrf_field()}}
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="designation_prod" id="nom" placeholder="Designation">
    </div>
    <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="prix" id="nom" placeholder="prix">
      </div>
      <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="quantite" id="nom" placeholder="Quantité">
    </div>
    <div class="form-group col-md-6">
    <label for="exampleFormControlSelect1">Categorie</label>
    <select class="form-control" id="cat_id" name="cat_id">
    <option>Selectionner une catégorie</option>
    @foreach($categories as $cat)
      <option value="{{$cat->id}}">{{ $cat->designation_cat }}</option>
    @endforeach
    </select>
    </div>
    <div class="form-group col-md-3">
        <input type="file" name="image_prod" id="image" class="form-control">
    </div>
  </div>
  <a href="{{ route('prod.index') }}" class="btn btn-warning">Annuler</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Ajouter</button>
</form>
</div>
 </div>
</form>
</div>
</div>
</div>

@endsection

@section('scripts')

<script>
 //---------------------Browse image----------------
 $('#browse_file').on('click',function(){
                            $('#image').click();                 
                        })
                        $('#image').on('change', function(e){
                            showFile(this, '#showImage');
                        })
</script>

@endsection