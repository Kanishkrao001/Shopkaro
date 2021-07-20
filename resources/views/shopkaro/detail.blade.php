@extends('shopkaro.Layout.template')

@section('title') 
{{ $data['Product_Name'] }}
@endsection

 {{-- {{ $data['Product_Name'] }} --}}

 @section('header')
<header>
    <div class="container">
      <h1><span id="acme">Shopkaro</span> Befiker</h1>
      {{-- <ul class="ull">
       <li class="current"><a href="{{ url('shopkaro/watch') }}"><img src="" alt="">Watches</a></li>
       <li><a href="{{ url('shopkaro/mobile') }}">Mobiles</a></li>
       <li><a href="{{ url('shopkaro/laptop') }}">Laptops</a></li>
     </ul> --}}
     <nav>
        <ul class="ul2_1">
          <li class="current"><a href="#"><img src="cart.jpg" alt="">Cart</a></li>
          <li><a href="{{ url('shopkaro/login') }}">Already Registered..!!!</a></li>
        <li><a href="{{ url('shopkaro/login/create') }}">New Users</a></li>
        </ul>
    </nav>
      {{-- <nav>
        <ul class="ul2">
          <li class="current"><a href="#"><img src="" alt="cart image"></a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Sign Up</a></li>
        </ul>
      </nav> --}}
    </div>
</header>
@endsection

@section('section')
    <div class="desc">
        <div class="row"><a href="" style="text-decoration: none">
            <h2>{{$data['Product_Name']}}</h2>
            <h3>Price: {{$data['price']}}</h3>
            <h4>Details: {{$data['Product_Description']}}</h4>
            </a>
        </div>
            <br> <br>
            <div class="row">
            <form action="/shopkaro/cart" method="post">
              {{ @csrf_field() }}
              <input type="hidden" name="product_id" value="{{ $data['product_id'] }}">
              <button>Add to Cart</button>
            </form>
            <br> <br>
            <button>Buy Now..!!!</button>
        </div>
        <div class="con2">
            <div class="con2_1">
            <p>Subscribe for Latest Offers</p>
            <br>
            <form>
              <input for="email" type="email" placeholder="Enter Email">
              <button type="submit" id="email">Subscribe</button>
            </form>
          </div>
          <div class="con2_2">
            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Temporibus ullam ipsam saepe pariatur est, quos suscipit!</p>
          </div>
          </div>
    </div>
@endsection

@section("footer")
<footer>
  <center><p>Shopkaro, Copyright &copy; 2021</p>
</footer>
@stop