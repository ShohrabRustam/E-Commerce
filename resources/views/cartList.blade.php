@extends('master')
@section('content')
<div class="custom-product">

 <div class="col-sm-1O">
    <div class="trending-wrapper">
     <h4>My Cart</h4>
     @foreach ($products as $item)
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
        <div class="col-sm-1O">
                    
            <div class="">
                <h2 width="200px">{{$item->name}}</h2>
                <h3 width="200px">{{$item->price}}</h3>
                <h5 width="200px">{{$item->description}}</h5>

            </div>
        </div>
        <div class="col-sm-3O">
            <a href="/removeItemCart/{{$item->cart_id}}" class="btn btn-warning">Remove</a>
        </div>
        
    </div>

                @endforeach
                <div>
                    <a href="ordernow" class="btn btn-success">Order</a><br><br>
                </div>
            </div>
        </div>
    </div>
@endsection