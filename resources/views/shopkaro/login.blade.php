@extends("shopkaro.Layout.template")

@section('title', 'Login - Shopkaro')

@section('header')
    <header>
        <div class="container">
        <h1><span id="acme">Shopkaro</span> Befiker</h1>
        {{-- <ul class="ull">
        <li class="current"><a href="{{ url('shopkaro/watch') }}"><img src="" alt="">Watches</a></li>
        <li><a href="{{ url('shopkaro/mobile') }}">Mobiles</a></li>
        <li><a href="{{ url('shopkaro/laptop') }}">Laptops</a></li>
        </ul> --}}

        {{-- if(not logged in user) --}}
        <nav>
            <ul class="ul2_1">
                <li class="current"><a href="#"><img src="cart.jpg" alt="">Cart</a></li>
                <li><a href="{{ url('shopkaro/login') }}">Login</a></li>
            <li><a href="{{ url('shopkaro/login/create') }}">New Users</a></li>
            </ul>
        </nav>
            
        {{-- @else --}}
        {{-- <nav>
            <ul class="ul2">
            <li class="current"><a href="#"><img src="" alt="cart image"></a></li>
            <li><a href="#">User ka naam</a></li>
            <li><a href="#">Update Profile</a></li>
            </ul>
        </nav> --}}
            
        </div>
    </header>
@endsection

@section('section')
<br>
   <form method="post" action="/shopkaro/check" >
    {{ csrf_field() }}
    <div class="form-group">
      <label for="exampleInputEmail1">Email address</label>
      <br>
      <br>
      <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" style="border:1px solid red">
      <br>
      <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
      <br>
    </div>
    <div class="form-group">
        <br>
      <label for="exampleInputPassword1">Password</label>
      <br>
      <br>
      <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" style="border:1px solid red">
    </div>
    <br>
    <br>
    <button style="margin-left: 7%" type="submit" class="btn btn-primary">Submit</button>
  </form>
@endsection

@section('footer')
    <aside class="newsletter">
        <div class="container">
        <p>Subscribe for Latest Offers</p>
        <form>
            <input for="email" type="email" placeholder="Enter Email">
            <button type="submit" id="email">Subscribe</button>
        </form>
        </div>
    </aside>
    <footer>
    <center><p>Shopkaro, Copyright &copy; 2021</p>
    </footer>
@endsection