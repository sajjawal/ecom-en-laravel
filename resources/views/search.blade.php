
@extends("master")
@section("content")


 <div class="container ">
     <div class="col-sm-4">
         <a href="3" class="filter">filter</a>

     </div>
    <div class="col-sm-4">
    <div class="tending-wrapper">
       <h3>searcehd result products</h3>
        @foreach ($products as $item)
      <div class="searched-item">
      <a href="detail/{{$item['id']}}">
        <img class=" trending-img" src="{{$item['gallery']}}" alt="First slide">
         <div class="">
        <h3>{{$item['name']}}</h3>
        <h4>{{$item['description']}}</h4>
        <p></p>
      </div>
      </a>
    </div>
    @endforeach

   </div>

    </div>
  </div>
  
 
@endsection
