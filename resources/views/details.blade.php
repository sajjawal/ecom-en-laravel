
@extends("master")
@section("content")

 <div class="container">
 <div class="row">
 <div class="col-sm-6">
         <img  class="detail-img" src="{{$product['gallery']}}" alt="">
         </div>
         <div class="col-sm-6 margin">
             <a href="/">Go Back</a>
             <h2>{{$product['name']}}</h3>
             <h3>Price : {{$product['price']}}</h3>
             <h5>Detail : {{$product['description']}}</h3>
             <h5>Category : {{$product['category']}}</h3>
             <br>
             <button class=" btn btn-primary">
                 Add Cart
             </button>
             <br><br>
             <button class="btn btn-success">
                 Buy Now 
             </button>
    
         </div>
   </div>
     

 </div>

  
 
@endsection
