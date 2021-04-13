@extends('master')
@section('content')
<div class="custom-product">
     <div class="col-sm-10" >
        <div class="tranding-wrapper">
            <h3>My Orders</h3>
            <a class="btn btn-success" href="ordernow">Order Now</a><br><br>
            @foreach($orders as $item)
            <div class=" row searched-item  cart-list-divider">
                <div class="col-sm-3">
                    <a href="detail/{{$item->id}}">
                        <img class="tranding-img" src={{$item->gallery}} />
                        </a>
                </div>
                <div class="col-sm-3">
                        <div class="">
                          <h3>Name : {{$item->name}}</h3>
                          <h4> Delivery Status : {{$item->status}}</h4>
                          <h4>Address : {{$item->address}}</h4>
                          <h4>Payment Status : {{$item->payment_status}}</h4>
                          <h4>Payment Method : {{$item->payment_method}}</h4>
                        </div>
                </div>
            </div>
            @endforeach
            
        </div>
         </div>
    
    
</div>
@endsection