@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-10" >
        <div class="tranding-wrapper">
            <h3>List of Product</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach($products as $item)
            <div class=" row searched-item  cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="tranding-img" src={{$item->gallery}} />
                        </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                          <h2>{{$item->name}}</h2>
                          <h4>{{$item->description}}</h4>
                        </div>
                </div>
                <div class="col-sm-3">
                 <a href="/removecart/{{$item->cart_id}}" class="btn btn-warning">Remove to Cart</a>
                </div>
         
             
            </div>
            @endforeach
            
        </div>
        <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
     </div>
    
    
</div>
@endsection