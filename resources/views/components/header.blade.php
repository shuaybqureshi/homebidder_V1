   <!-- Header Section Begin -->
   <header class="header-section">
    <div class="container-fluid">
        <div class="row">
            <div class="col-lg-12">
                
                
            <nav class="navbar navbar-sq navbar-expand-md navbar-dark   ">
                    <div class="navbar-collapse collapse w-100 order-1 order-md-0 dual-collapse2">
                        <ul class="navbar-nav mr-auto">
                            <li class="nav-item active">
                                <a class="nav-link" href="/home">Home</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="/Listings">View Homes</a>
                            </li>
                            <li class="nav-item">
                                    <a class="nav-link" href="/Blog">Blog</a>
                                </li>
                        </ul>
                    </div>
                    <div class="mx-auto order-0">
                            <a class="navbar-brand mx-auto" href="/home">Homebidder</a>
                            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                                <span class="navbar-toggler-icon"></span>
                            </button>
                        </div>
                    <div class="sq-mobile-nav order-0">
                        {{-- <a class="navbar-brand mx-auto" href="#">Navbar 2</a> --}}
                        <button class=" bg-dark navbar-toggler" type="button" data-toggle="collapse" data-target=".dual-collapse2">
                            <span class="navbar-toggler-icon"></span>
                        </button>
                    </div>
                    <div class="navbar-collapse collapse w-100 order-3 dual-collapse2">
                        <ul class="navbar-nav ml-auto">
                            @guest
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                          @else 
                              <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->first_name }} <span class="caret"></span>
                                </a>
                                
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('userinfo') }}">
                                        {{ __('User Info') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('createListing') }}">
                                            {{ __('Upload Listing') }}
                                        </a>
                                    <a class="dropdown-item" href="{{ route('MyListings') }}">
                                            {{ __('My Listings') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('myoffers') }}">
                                             {{ __('My Offers') }}
                                    </a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                    onclick="event.preventDefault();
                                                  document.getElementById('logout-form').submit();">
                                     {{ __('Logout') }}
                                 </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                            @endguest
                        </ul>
                    </div>
                </nav>
            
            
            </div></div>
            </div>
        </div>
    </div>
</header>