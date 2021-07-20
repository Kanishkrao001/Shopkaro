@extends("shopkaro.Layout.template")

@section('title', 'Mobiles - Shopkaro')

@section('header')
<header>
    <div class="container">
      <a href="{{ url('shopkaro')}}"><h1><span id="acme">Shopkaro</span> Befiker</h1></a>
      <ul class="ull">
       <li class="current"><a href="{{ url('shopkaro/Watches') }}"><img src="" alt="">Watches</a></li>
       <li><a href="{{ url('shopkaro/Mobiles') }}">Mobiles</a></li>
       <li><a href="{{ url('shopkaro/Laptops') }}">Laptops</a></li>
     </ul>
      {{-- <nav>
        <ul class="ul2">
          <li class="current"><a href="#"><img src="" alt="cart image"></a></li>
          <li><a href="#">Login</a></li>
          <li><a href="#">Sign Up</a></li>
        </ul>
      </nav> --}}
      <div class="second2">
        <nav>
         <ul class="ul2">
           <li class="current"><a href="#"><img src="cart.jpg" alt="">Cart</a></li>
           <li><a href="{{ url('shopkaro/login') }}">Login</a></li>
           <li><a href="{{ url('shopkaro/login/create') }}">Sign Up</a></li>
         </ul>
       </nav>
       </div>
    </div>
</header>
@endsection

@section('section')
<div class="con">
  <div class="con1">
    {{-- <h1>Affordable Products</h1> --}}
    {{-- <div class="items"> --}}
      {{-- <div class="element">
        <div class="list">
        <ul>
        <li>desc1</li>
        <li>desc2</li>
        <li>desc3</li>
        <li>desc4</li>
        </ul>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>

      </div>
      </div> --}}
      {{-- <div class="element"><p>
        This is element davjbh ik hriojhnio nehobh rio </p>
        <br>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>
       </div>
      <div class="element"><p>
        This is element davjbh ik hriojhnio nehobh rio </p>
        <br>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>
       </div>
      <div class="element"><p>
        This is element davjbh ik hriojhnio nehobh rio </p>
        <br>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>
       </div>
      <div class="element"><p>
        This is element davjbh ik hriojhnio nehobh rio </p>
        <br>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>
       </div>
      <div class="element"><p>
        This is element davjbh ik hriojhnio nehobh rio </p>
        <br>
        <button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button>
       </div> --}}
       @foreach ($data as $item)
       <div class="items">
        <div class="element">
          <a href="details/{{ $item->product_id }}">
            <br>
            <p>{{ $item->Product_Name}}</p>
          </a></div>
           <div class="element">
             <br>
            <p>{{ $item->Product_Description}}</p>
            <br><br>
            <p>{{ $item->price}}</p>
            <br><br>
            {{-- <p><button><a href="{{ url('shopkaro/cart') }}">Add to Cart</a></button></p> --}}
            <form action="/shopkaro/cart" method="post">
              {{ @csrf_field() }}
              <input type="hidden" name="product_id" value="{{ $item->product_id }}">
              <button>Add to Cart</button>
            </form>
          </div>  
          {{-- <div class="element">
            <p>{{ $item->price}}</p>
      
          </div>   --}}
        </div>
       @endforeach
   
  </div>
  <div class="con2">
    <div class="con1_1">
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

@section('footer')
<footer>
  <center><p>Shopkaro, Copyright &copy; 2021</p>
</footer>
@endsection
