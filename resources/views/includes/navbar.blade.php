<nav class="navbar navbar-expand justify-content-center navbar-dark top-navigation py-0">
    <div class="navbar-nav py-0">
        <a class="nav-link" href="/register"><i class="fas fa-plus"></i> Register</a>
        <a class="nav-link" href="/login"><i class="fas fa-user-lock"></i> Login</a>
        <a class="nav-link" href="/contact"><i class="fas fa-file-signature"></i> Contact Us</a>
    </div>
</nav>

<nav class="navbar navbar-expand-md navigation navbar-dark sticky-top">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="images/unesco-new.png" alt="Store Logo">
    </a>

    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse ml-right" id="navbarSupportedContent">
        <!-- Left Side Of Navbar -->
        <ul class="navbar-nav">
            <li class="nav-item dropdown hidden">
                <input class="form-control input-lg searchnav mt-4" type="text" placeholder="Search" aria-label="Search">
                <br>
                <button class="btn btn-secondary" style="float:right;"><i class="fas fa-shopping-cart"></i> Cart
                    Items</button>
                <br>
                <a class="nav-link" href="/register"><i class="fas fa-plus"></i> Register</a>
                <a class="nav-link" href="/login"><i class="fas fa-user-lock"></i> Login</a>
                <a class="nav-link" href="/contact"><i class="fas fa-file-signature"></i> Contact Us</a>
                <br>
            </li>
            <li>
                <a href="{{ url('/store') }}" class="nav-link font-weight-bold"><i class="fas fa-store"></i> VIEW STORE</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Food
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Drinks
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Electronics
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
                <a class="nav-link dropdown-toggle" data-toggle="dropdown" data-target="dropdown_target" href="#">Cloths
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
        <li class="mr-3"><input class="form-control input-lg searchnav" type="text" placeholder="Search" aria-label="Search"></li>
        <li><button type="button" class="btn btn-primary mybtn cart-btn" data-toggle="modal" data-target="#myModal"
                style="font-size:17px"><i class="fas fa-shopping-cart"></i>
                Cart Items</button></li>
        </div>
    @include('includes.cart.cart_modal')
    </ul>
</nav>
