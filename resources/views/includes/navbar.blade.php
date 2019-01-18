        <nav class="navbar navbar-expand-md top-navigation">
               <ul class="navbar-nav navbar-brand ml-auto">
                    <li class="nav-item navbar-brand"> <a class="nav-link" href="/contact">Contact Us</a></li> 
                    @if (Route::has('register'))
                    <li class="nav-item navbar-brand">
                        <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                    </li>
                @endif
            </ul>
            <ul class ="navbar-nav ml-auto">
                    <form class="form-inline">
                          <input class="form-control mr-sm-2 input-lg searchnav" type="text" placeholder="Search" aria-label="Search">
                    </form>
            </ul>
        </nav>
        <nav class="navbar navbar-expand-md navigation navbar-dark sticky-top nav-icon">
            
                <a class="navbar-brand" href="{{ url('/') }}">
                    <img src="images/unesco-new.png" alt="IC NORTE Logo">
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>
                
                <div class="collapse navbar-collapse ml-right" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                    <ul class="navbar-nav">
                        <li class="nav-item dropdown hidden">
                            <input class="form-control mr-sm-2 input-lg searchnav" type="text" placeholder="Search" aria-label="Search">
                            <br>
                            <button class="btn btn-secondary" style="float:right;"><i class="fas fa-shopping-cart"></i>&nbsp;&nbsp;Cart Items</button>
                            <br>
                            <a class="nav-link" href="/contact">Contact Us</a>                           
                            <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            <br>
                        </li>
                            <li class="nav-item dropdown">
                              <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Shopping
                                  <span class="caret"></span>
                              </a>
                              <div class="dropdown-menu" aria-labelledby="dropdown_target">
                                  <a href="#" class="dropdown-item">Electronics</a>
                                  <a href="#" class="dropdown-item">Food</a>
                                  <a href="#" class="dropdown-item">Drinks</a>
                                  <a href="#" class="dropdown-item">Cloths</a>
                              </div>
                            </li>
                            <li class="nav-item dropdown">
                                    <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Shopping
                                        <span class="caret"></span>
                                    </a>
                                    <div class="dropdown-menu" aria-labelledby="dropdown_target">
                                        <a href="#" class="dropdown-item">Electronics</a>
                                        <a href="#" class="dropdown-item">Food</a>
                                        <a href="#" class="dropdown-item">Drinks</a>
                                        <a href="#" class="dropdown-item">Cloths</a>
                                    </div>
                                  </li>
                                  <li class="nav-item dropdown">
                                        <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Shopping
                                            <span class="caret"></span>
                                        </a>
                                        <div class="dropdown-menu" aria-labelledby="dropdown_target">
                                            <a href="#" class="dropdown-item">Electronics</a>
                                            <a href="#" class="dropdown-item">Food</a>
                                            <a href="#" class="dropdown-item">Drinks</a>
                                            <a href="#" class="dropdown-item">Cloths</a>
                                        </div>
                                      </li>
                                        <li class="nav-item dropdown">
                                            <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Shopping
                                                <span class="caret"></span>
                                            </a>
                                            <div class="dropdown-menu" aria-labelledby="dropdown_target">
                                                <a href="#" class="dropdown-item">Electronics</a>
                                                <a href="#" class="dropdown-item">Food</a>
                                                <a href="#" class="dropdown-item">Drinks</a>
                                                <a href="#" class="dropdown-item">Cloths</a>
                                            </div>
                                        </li>
                          </ul>
                        </div>
                          
                 
                    <!-- Right Side Of Navbar -->
                    <ul class="navbar-nav ml-auto cartMenu">
                            <ol>
                                <button class="btn btn-secondary" style="font-size:17px"><i class="fas fa-shopping-cart fa-2x "></i>&nbsp;&nbsp;Cart Items</button>
                        <!-- Authentication Links -->
                        @guest
                            <li class="nav-item loginMenu">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            </ol>
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
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