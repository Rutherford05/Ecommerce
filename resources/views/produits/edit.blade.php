@extends('layouts.master')
@extends('layouts.style')

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
<br>
<h2 class="alert alert-success " > Modification du produit {{$data->designation_prod}} </h2>
</div>
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-12">

<form method="post" action="{{ route('mes_articles.update', $data->id) }}" enctype="multipart/form-data">
{{csrf_field()}}
{{method_field('PUT')}}
<form>
  <div class="form-row">
    <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="designation_prod" id="nom" value="{{ $data->designation_prod }}" placeholder="Designation">
    </div>
    <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="prix" id="nom" value="{{ $data->prix }}" placeholder="Prix">
    </div>
    <div class="form-group col-md-6">
      <input mdbInput type="text" class="form-control" name="quantite" id="nom" value="{{ $data->quantite }}" placeholder="Quantite">
    </div>
    <div class="row">
    <div class="form-group col-md-4">
        <input type="file" name="image_prod" id="image" class="form-control">
        </div>
    <div class="form-group col-md-3">
        <img src="{{ URL::to('/') }}/images/{{ $data->image_prod}}"  width="80" height="80" />
        <input type="hidden" name="hidden_image" value="{{ $data->image_prod }}" />
    </div>
    </div>
  </div>
 <a href="{{ route('mes_articles.index') }}" class="btn btn-warning">Annuler</a>
 <button type="submit"  name="add" class="btn btn-info input-lg">Modifier</button>
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
 $('#browse_file').on('click',function(){
                            $('#image').click();                 
                        })
                        $('#image').on('change', function(e){
                            showFile(this, '#showImage');
                        })
</script>

@endsection