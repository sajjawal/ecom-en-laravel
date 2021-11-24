
@extends("master")
@section("content")


 <div class="container custom-product">
 <div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
   <div class="carousel-inner">
  @foreach ($products as $item)
    <div class="carousel-item  {{ $item['id'] ==1 ? 'active' : ''}}">
      <a href="detail/{{$item['id']}}">
      <img class=" w-100 img-slider" src="{{$item['gallery']}}" alt="First slide">
      <div class="carousel-caption">
        <h3>{{$item['name']}}</h3>
        <p>{{$item['description']}}</p>
      </div>
      </a>
    </div>
    
    @endforeach
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
  <div class="tending-wrapper">
       <h3>trending products</h3>
        @foreach ($products as $item)
      <div class="trending-item">
      <a href="detail/{{$item['id']}}">
        <img class=" trending-img" src="{{$item['gallery']}}" alt="First slide">
         <div class="">
        <h3>{{$item['name']}}</h3>
        <p></p>
      </div>
      </a>
    </div>
    @endforeach

   </div>
  </div>
  
 
@endsection
