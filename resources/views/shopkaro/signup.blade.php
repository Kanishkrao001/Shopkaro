@extends("shopkaro.Layout.template")

@section('title', 'Sign Up - Shopkaro')

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
        <li><a href="{{ url('/shopkaro')}}">
           @if(Auth::check()) {{auth()->user()->name }}
               
           @else
               {{ "home" }}
           @endif 
          </a></li>
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
<br>

{{-- {{json_encode($errors)}} --}}


<div class="com">
        @if($errors->any() > 0)
        {
          <div class="form-group">
            <div class="alert alert-danger">
              <ul>
                @foreach ($res->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
              </ul>
            </div>
          </div>
        }
        @endif

      <center><form method="post" action="/shopkaro/login">
        {{ csrf_field() }}
        {{-- <input type="hidden" name="type" value="bading" class="form-control"> --}}
        <input type="radio" name="type" value="user"> Register as a User..!!!
        <input type="radio" name="type" value="seller"> Register as a Seller..!!!

           <br> <br>
        <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <br>
            <br>
            <input type="email" class="form-control" id="exampleInputEmail1" name="email" placeholder="Enter email" style="border:1px solid red">
            <br>
            <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
            <br>
          </div>
          <br>
        <div class="form-group">
          <label for="exampleInputEmail1">Name</label>
          <br>
          <br>
          <input type="text" class="form-control" id="exampleInputEmail1" name="name" placeholder="Enter name" style="border:1px solid red">
          <br>
        </div>
        <br>
        {{-- <div class="form-group">
            <label for="exampleInputEmail1">Phone No</label>
            <br>
            <br>
            <input type="number" class="form-control" id="exampleInputEmail1" name="no" placeholder="Enter your mobile no" style="border:1px solid red">
            <br>
        </div>
          <br> --}}
        <div class="form-group">
            <br>
          <label for="exampleInputPassword1">Password</label>
          <br>
          <br>
          <input type="password" class="form-control" id="exampleInputPassword1" name="pass" placeholder="Password" style="border:1px solid red">
        </div>
        <br>
        <div class="form-group">
          <br>
        <label for="exampleInputPassword1">Confirm Password</label>
        <br>
        <br>
        <input type="password" class="form-control" id="exampleInputPassword1" name="cpass" placeholder="confirm Password" style="border:1px solid red">
      </div>
        <br>
        <button style="margin-left: 2%" type="submit" class="btn btn-primary">Submit</button>
         
      </form>
    </div>

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