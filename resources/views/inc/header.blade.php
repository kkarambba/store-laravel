@section('header')



<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <div class="container-fluid">

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">    
           <a class="nav-link active" @routeactive('index') aria-current="page" href="{{ route('index') }}">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @routeactive('about') href="{{ route('about') }}">About</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @routeactive('contact')  href="{{ route('contact') }}">Contact</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @routeactive('contact-data') href="{{ route('contact-data') }}">Data</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" @routeactive('categories') href="{{ route('categories') }}">Store</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" @routeactive('basket') href="{{ route('basket') }}">Cart</a>
        </li>

    	@guest
        <li class="nav-item">
           <a class="nav-link" @routeactive('register') href="{{ route('register') }}">Register</a>
        </li> 
        <li class="nav-item">
           <a class="nav-link" @routeactive('login') href="{{ route('login') }}">Sign in</a>
        </li> 
    	@endguest
    	
    	@if(Auth::user() and Auth::user()->is_admin !=1)
         <li class="nav-item">
           <a class="nav-link" href="{{ route('person.orders-index') }}">Orders</a>
        </li>   	
    	@endif
    	
    	
    	
    	@if(Auth::user() and Auth::user()->is_admin==1)
        <li class="nav-item">
           <a class="nav-link" @routeactive('products.index') href="{{ route('products.index') }}">Products</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" @routeactive('categories.index') href="{{ route('categories.index') }}">Categories</a>
        </li>
        <li class="nav-item">
           <a class="nav-link" @routeactive('home') href="{{ route('home') }}">Orders</a>
        </li>
        @endif 
        
        @auth
        <li class="nav-item">
           <a class="nav-link" @routeactive('get-logout') href="{{ route('get-logout') }}">Logout</a>
        </li>
        @endauth	          
        
        
        
        
                                                                       
       <!-- <li class="nav-item dropdown">
          <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false">
            Dropdown
          </a>
          <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
            <li><a class="dropdown-item" href="#">Action</a></li>
            <li><a class="dropdown-item" href="#">Another action</a></li>
            <li><hr class="dropdown-divider"></li>
            <li><a class="dropdown-item" href="#">Something else here</a></li>
          </ul>
        </li> -->

      </ul>
<!--      <form class="d-flex">
        <input class="form-control me-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success" type="submit">Search</button>
      </form> -->
    </div>
  </div>
</nav>

    
    
    