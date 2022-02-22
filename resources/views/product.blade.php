@extends('master')
@section('content')
<div class="custom-products">


  <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
    <div class="carousel-inner">
        @foreach ($product as $item)

        <div class="carousel-item {{$item['id']==1?'active':''}}">
          <a href="detail/{{$item['id']}}">
        <img class="slider-img" src="{{$item['galary']}}" alt="image">
        <div class="carousel-caption slider-text">
          <h5 >{{$item['name']}}</h5>
          <p>{{$item['description']}}</p>
        </div>  
      </a>
      </div>
      @endforeach
      {{-- <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=666&fg=444&text=Second slide" alt="Second slide">
      </div>
      <div class="carousel-item">
        <img class="d-block w-100" src=".../800x400?auto=yes&bg=555&fg=333&text=Third slide" alt="Third slide">
      </div> --}}
    </div>
    <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
  </div>

   
  <div class="trending-wrapper">
    <h2>Trending products</h2>
    @foreach ($product as $item)
   <a href="detail/{{$item['id']}}">
    <div class="trending-items">
      <img class="trending-image" src="{{$item['galary']}}" alt="image">
      <div class="">
        <h5 >{{$item['name']}}</h5>
        <p>{{$item['description']}}</p>
      </div>  
    </div>
   
   </a>
    @endforeach
  </div>
      


</div>
  @endsection

  










  
 