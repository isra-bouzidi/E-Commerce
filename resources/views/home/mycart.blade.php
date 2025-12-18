<!DOCTYPE html>
<html>

<head>
  @include('home.css')
</head>

<style type="text/css">

  .div_deg
  {

    display: flex;
    justify-content: center;
    align-items: center;
    margin: 60px;
  }

  table
  {
    border: 2px solid black;
    text-align: center;
    width: 800px;
  }

  th
  {
    border: 2px solid black;
    text-align: center;
    color: white;
    font: 20px;
    font-weight: bold;
    background-color: black;
  }

  td
  {
    border: 2px solid skyblue;
  }


</style>

<body>
  <div class="hero_area">


    <!-- header section strats -->
    @include('home.header')
    <!-- end header section -->

</div>
    


<div class="div_deg">


<table>

<tr>

<th>Product title</th>

<th>Price</th>

<th>Image</th>


</tr>
@foreach($cart as $cart)
<tr>

<td>{{$cart->product->title}}</td>
<td>{{$cart->product->price}}</td>
<td><img width="150" src="/products/{{$cart->product->image}}" alt="Product Image" style="width: 100px; height: 100px;"></td>


</tr>

@endforeach
</table>

</div>


   

  <!-- info section -->

  @include('home.footer')

  <!-- end info section -->


  <script src="{{('js/jquery-3.4.1.min.js')}}"></script>
  <script src="{{('js/bootstrap.js')}}"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js">
  </script>
  <script src="{{('js/custom.js')}}"></script>

</body>

</html>