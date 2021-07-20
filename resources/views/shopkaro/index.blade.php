
@extends("shopkaro.Layout.template")

@section("title", "Shopkaro")
 
 @section("header")
   <header>
     <div class="container">
       <div class="first">
       <h1><span id="acme">Shopkaro</span> Befiker</h1>
      </div>
      <div class="second">
        <div class="second1">
          <ul class="ull">
          <li class="current"><a href="{{ url('shopkaro/Watches') }}"><img src="" alt="">Watches</a></li>
          <li><a href="{{ url('shopkaro/Mobiles') }}">Mobiles</a></li>
          <li><a href="{{ url('shopkaro/Laptops') }}">Laptops</a></li>
          </ul> 
        </div>
       
      <div class="second2">
        <nav>
         <ul class="ul2">
           <li class="current"><a href="#"><img src="cart.jpg" alt="">Cart</a></li>
           {{ json_encode(auth()->user() )}}
           @if(!\Auth::check())
           <li><a href="{{ url('shopkaro/login') }}">Login</a></li>
           <li><a href="{{ url('shopkaro/login/create') }}">Sign Up</a></li>

           @else  
              {{-- <li><a href="{{ url('shopkaro/login') }}">{{ Auth::user()->name }}</a></li>  --}}
              <li><a href="{{ url('shopkaro') }}">Home</a></li> 
            {{-- <li><a href="{{ url('shopkaro/login/create') }}">Sign Up</a></li>  --}}
           @endif
         </ul>
       </nav>
       </div>
      </div>
     </div>
</header>
@stop

   @section("section")
   {{-- <div class="sec1">
   {{-- <section class="showcase"> --}}
     {{-- <div class="container sec1_1">
       <h1>Affordable Products</h1>
       <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Etiam eu luctus ipsum, rhoncus semper magna. Nulla nec magna sit amet sem interdum condimentum.</p>
     </div> --}}
   {{-- </section> --}}
   {{-- @stop

   @section("aside") --}}
   {{-- <aside class="newsletter"> --}}
     {{-- <div class="container sec1_2">
       <p>Subscribe for Latest Offers</p>
       <form>
         <input for="email" type="email" placeholder="Enter Email">
         <button type="submit" id="email">Subscribe</button>
       </form>
     </div>
   {{-- </aside>
  </div> --}}
  <div class="con">
    <div class="con1">
      <div class="temp">
      <h1>Affordable Products</h1>
      </div>
      <div class="items">
        <div class="element">
          {{-- <div class="list">
          <ul>
          <li>desc1</li>
          <li>desc2</li>
          <li>desc3</li>
          <li>desc4</li>
          </ul>
        </div> --}}

        </div>
        <div class="element">This is element davjbh ik hriojhnio nehobh rio </div>
        <div class="element">This is element davjbh ik hriojhnio nehobh rio </div>
        <div class="element">This is element davjbh ik hriojhnio nehobh rio </div>
        <div class="element">This is element davjbh ik hriojhnio nehobh rio </div>
        <div class="element">This is element davjbh ik hriojhnio nehobh rio </div>
      </div>
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
   @stop 
{{-- 
    <section class="boxes">
     <div class="container">
       <div class="box">
         <img src="images\logo_html.png" width="90" height="90" alt="HTML5 Markup Logo">
         <h3>HTML5 Markup</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
       </div>
       <div class="box">
         <img src="images\logo_css.png" width="90" height="90" alt="CSS3 Styling Logo">
         <h3>CSS3 Styling</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
       </div>
       <div class="box">
         <img src="images\logo_brush.png" width="90" height="90" alt="Graphic Design Logo">
         <h3>Graphic Design</h3>
         <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus mi augue, viverra sit amet ultricies</p>
       </div>
     </div>
   </section>
   <div style="clear:both"></div>  --}}
   @section("footer")
   <footer>
     <center><p>Shopkaro, Copyright &copy; 2021</p>
   </footer>
   @stop
 