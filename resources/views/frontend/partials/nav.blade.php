<nav class="navbar navbar-default" role="navigation">
  <div class="navbar-header">
    <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
      <span class="icon-bar"></span>
    </button>    
  </div>
<div class="navbar-collapse collapse">
    <ul class="nav navbar-nav navbar-left">

       <li>
                    <a href="{{ route('frontend.home') }}">Home</a>
                    </li>
                    <li>
                        <a href="#">Reservation</a>
                    </li>
                    <li>
                        <a href="{{ route('frontend.packages') }}">Menu & Packages</a>
                    </li>

                    <li>
                        <a href="{{ route('frontend.contact')}}">Contact</a>
                    </li>
    </ul>
    <ul class="nav navbar-nav navbar-right">
        <li>
        <a href="{{ route('user.login') }}"><u>Login</u></a>
        </li>
         <li>
         <a href="{{ route('user.register') }}"><u>Register</u></a>  
         </button>
        </li>
    </ul>
  </div>
</nav>