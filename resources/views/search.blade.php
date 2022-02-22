@extends('master')
@section('content')
<div class="custom-product">
    <div class="col-sm-4">
        <div class="trending-wrapper">
            <h4>Result for Products</h4>
            @foreach ($product as $item )
            <div class="searched-item">
                <a href="detail/{{$item['id']}}">
                    <img src="{{$item['galary']}}" alt="" class="trending-img">
                    <div class="">
                        <h2>$item['name']</h2>
                        <h5>$item['description']</h5>
                    </div>
                </a>
            </div>
                
            @endforeach
        </div>
    </div>
</div>
@endsection