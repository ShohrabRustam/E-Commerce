<!doctype html>
<html lang="en">
  <head>
    <title>E-Commerce Project</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
  </head>
  <body>
      {{-- @include() --}}
      {{-- {{View::make('header')}} --}}
      @include('header')
    @yield('content')
    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha256-/xUj+3OJU5yExlq6GSYGSHk7tPXikynS7ogEvDej/m4=" crossorigin="anonymous"></script>
    {{-- {{View::make('footer')}} --}}
    @include('footer')
  </body>

  <style>
    img.slider-img{
      height: 400px !important;
    }
    
    .custom-products{
      height: 600px;
    }
    .slider-text{
      background-color: #35443585 !important;
      width: 40%;
      padding-right: auto;
      margin-left: 600px;
         }
         .trending-image{
           height: 100px;
         }
         .trending-items{
           float: left;
           width: 20%;
         }
         .trending-wrapper{
           margin: 30px
         }

         .detail-img{
              height: 300px;
         }
         .cart-list-devider{
           border-bottom: 1px solid #ccc;
           margin: 20px;
           padding: 20px;
         }
  </style>
  <script>
    //   $(document).ready(function(){
    //       $("button").click(function(){
    //           alert("All Set")
    //       })
    //   })
  </script>
</html>