@extends('master')
@section('content')
<div class="custom-product">

 <div class="col-sm-20" style="size:!important">
    <div class="trending-wrapper">
     <h4>My Orders</h4>
     @foreach ($orders as $item)
     <div class="row searched-item cart-list-devider">
         <div class="col-sm-3O">
             <a href="detail/{{$item->id}}">
                <img src="{{$item->galary}}" alt="" class="trending-image" width="200px">
                <div class="">
                    {{-- <h2>{{$item->name}}</h2>
                    <h5>{{$item->description}}</h5> --}}
                </div>
            </a>
        </div>
        <div class="col-sm-4">
                    
            <div class="">
                <h2 width="200px">Name : {{$item->name}}</h2>

                <h3 width="200px"> Status : {{$item->status}}</h3>
                <h5 width="200px">Delivery Status : {{$item->status}}</h5>
                <h5 width="200px">Address : {{$item->address_1 }}</h5>
                <h5 width="200px">{{$item->address_2 }}</h5>

                <h5 width="200px">Payment Status : {{$item->payment_status}}</h5>
                <h5 width="200px">Payment Method : {{$item->payment_method}}</h5>

            </div>
        </div>
        
    </div>

                @endforeach
                
            </div>
        </div>
    </div>
@endsection