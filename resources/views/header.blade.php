<?php
use App\Http\Controllers\ProductController;
$total=0;
if(Session::has('user')){
$total = ProductController::cartItem();
}
?>
<nav class="navbar navbar-expand-lg navbar-light  bg-light" >
    <a class="navbar-brand" href="/">E-Commerce</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav mr-auto">
        <li class="nav-item active">
          <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="myorder">Order</a>
        </li>
        {{-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="#">Action</a>
            <a class="dropdown-item" href="#">Another action</a>
            <div class="dropdown-divider"></div>
            <a class="dropdown-item" href="#">Something else here</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link disabled">Disabled</a>
        </li> --}}
        <li>
            <form class="form-inline my-2 my-lg-0">
              <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
              <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
            </form>

          </li>

          <ul class="nav navbar-nav navbar-right " style="padding-left:1000px">
            <li style="margin-right:20px"><a href="/cartList">Cart({{$total}})</a></li>

            <li class="dropdown navbar-right">
              @if(Session::has('user'))
              <a class="btn btn-secondary dropdown-toggle" href="#" data-toggle="dropdown" aria-haspopup="true">
                {{Session::get('user')['name']}}
              </a>

              <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton">
                <li> <a class="dropdown-item" href="/logout">Logout</a></li>
                {{-- <li>  <a class="dropdown-item" href="#">Another action</a></li>
                <li> <a class="dropdown-item" href="#">Something else here</a></li> --}}
              </ul>
            </li>
            @else
            <li><a href="/login">Login</a></li>
            @endif
          </ul>
        </ul>
      </div>
  </nav>
