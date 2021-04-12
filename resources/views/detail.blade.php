@extends('master')
@section('content')
<div class="custom-product">
    <div class="container">
        <div class="row">
            <p><br/><b><a href="/">Go Back</a></b></p>
            <div class="col-sm-6">
                <img class="detail-img" src="{{$product['gallery']}}" alt="">
            </div>
            <div class="col-sm-6">
               <h2>{{$product['name']}}</h2> 
               <h3>Price:  {{$product['price']}}</h3>
               <h4>Details : {{$product['description']}}</h4>
               <h4>Category : {{$product['category']}}</h4>
               <br/><br/>
               <form action="/add_to_cart" method="POST">
                @csrf
                   <input type="hidden" name="product_id" value="{{$product['id']}}">
                <button class="btn btn-primary mr-10">Add to Cart</button>
               </form>
               <br/>
               <button class="btn btn-success mr-10">Buy Now</button>
            </div>

        </div>

    </div>
    
    
</div>
@endsection