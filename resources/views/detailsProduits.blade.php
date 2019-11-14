
@extends('layouts.master')
@section('content')

         <div class="jumbotron jumbotron-fluid">
  <div class="container mvnav">
             <nav>
                <ul class="nav">
                <div class="dropdown mondrop">
 
  <a href="/index"><a class="dropdown-toggle" href="#"  data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

 Home
 </a></a>

 <div class="dropdown-menu" aria-labelledby="LinkDropdownDemo">

   <a class="dropdown-item" href="https://www.jquery-az.com/bootstrap-4/">Bootstrap 4</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/jquery-tips/">jQuery</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/html-tutorials/">HTML</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/css-tutorials/">CSS</a>

 </div>

</div>
<div class="dropdown mondrop ">
 
 <a class=" dropdown-toggle" href="#"  id="LinkDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

   Features

 </a>

 <div class="dropdown-menu" aria-labelledby="LinkDropdownDemo">

   <a class="dropdown-item" href="https://www.jquery-az.com/bootstrap-4/">Bootstrap 4</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/jquery-tips/">jQuery</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/html-tutorials/">HTML</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/css-tutorials/">CSS</a>

 </div>

</div>
<div class="dropdown mondrop ">
 
 <a class="dropdown-toggle" href="#"  id="LinkDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

   The Shop

 </a>

 <div class="dropdown-menu" aria-labelledby="LinkDropdownDemo">

   <a class="dropdown-item" href="https://www.jquery-az.com/bootstrap-4/">Bootstrap 4</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/jquery-tips/">jQuery</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/html-tutorials/">HTML</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/css-tutorials/">CSS</a>

 </div>

</div>
<div class="dropdown mondrop ">
 
 <a class="dropdown-toggle" href="#"  id="LinkDropdownDemo" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">

   The Blog

 </a>

 <div class="dropdown-menu" aria-labelledby="LinkDropdownDemo">

   <a class="dropdown-item" href="https://www.jquery-az.com/bootstrap-4/">Bootstrap 4</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/jquery-tips/">jQuery</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/html-tutorials/">HTML</a>

   <a class="dropdown-item" href="https://www.jquery-az.com/css-tutorials/">CSS</a>

 </div>

</div>
<div class="topnav-left">
    <a href="#search">My account</a>
    <a href="#about">Cart</a>
  </div>
  
                </ul>
            </nav>
         </div>

  </div>
  <div class="carousel-caption moncapj">
         <ul>
         <a href="/index">
           <li>Home /</li>
           </a>
           <li>Living Room</li>
         </ul>
       </div>
       <div class="carousel-caption moncapk">
       <a href="#">
          <span class="glyphicon glyphicon-arrow-left " aria-hidden="true"></span>
         <h2>Living Room</h2>
       </div>
       </a>
</div>
</div>
<div class="container">
	<div class="row">
         <div class="col-md-3 monaside">
        <aside>
      <h2>Living Room</h2>
        </aside>
         </div>
         @foreach($products as $post)
            <div class="col-md bb">
            <div class="wprock-img-zoom-hover">
              <div class="wprock-img-zoom">
                <a href="#"><img src="{{URL::asset('images/'. $post->image_prod)}}" alt="" class="img-fluid rd"></a>
                <div class="ppp">
                <h2>{{$post->designation_prod}}</h2>
                </div>
            </div>
            </div>
            </div>
            @endforeach
@endsection