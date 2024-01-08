



<!-- Topbar Start -->
<!-- <div class="container-fluid bg-dark">
        <div class="row py-2 px-lg-5">
            <div class="col-lg-6 text-center text-lg-left mb-2 mb-lg-0">
                <div class="d-inline-flex align-items-center text-white">
                    <small><i class="fa fa-phone-alt mr-2"></i>+012 345 6789</small>
                    <small class="px-3">|</small>
                    <small><i class="fa fa-envelope mr-2"></i>info@example.com</small>
                </div>
            </div>
            <div class="col-lg-6 text-center text-lg-right">
                <div class="d-inline-flex align-items-center">
                    <a class="text-white px-2" href="">
                        <i class="fab fa-facebook-f"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-twitter"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-linkedin-in"></i>
                    </a>
                    <a class="text-white px-2" href="">
                        <i class="fab fa-instagram"></i>
                    </a>
                    <a class="text-white pl-2" href="">
                        <i class="fab fa-youtube"></i>
                    </a>
                </div>
            </div>
        </div>
    </div> -->
    <!-- Topbar End -->


    <!-- Navbar Start -->
    <div class="container-fluid p-0">
        <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 px-lg-5">
            <a href="index.html" class="navbar-brand ml-lg-3">
                <h1 class="m-0 text-uppercase text-primary"><i class="fa fa-book-reader mr-3"></i>KnowledgeNet</h1>
            </a>
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse justify-content-between px-lg-3" id="navbarCollapse">
                <div class="navbar-nav mx-auto py-0">
                    <a href="{{route('home')}}" class="nav-item nav-link active">Home</a>
                    <a href="about.html" class="nav-item nav-link">About</a>
                    <a href="{{route('mycourse')}}" class="nav-item nav-link">My Courses</a>
                    <a href="{{route('courses')}}" class="nav-item nav-link">All Courses</a>
                    <a href="{{route('books')}}" class="nav-item nav-link">Books</a>

                    <div class="nav-item dropdown">
                        <a href="#" class="nav-link dropdown-toggle" data-toggle="dropdown">Pages</a>
                        <div class="dropdown-menu m-0">
                            <a href="detail.html" class="dropdown-item">Course Detail</a>
                            <a href="feature.html" class="dropdown-item">Our Features</a>
                            <a href="team.html" class="dropdown-item">Instructors</a>
                            <a href="testimonial.html" class="dropdown-item">Testimonial</a>
                        </div>
                    </div>
                    <a href="contact.html" class="nav-item nav-link">Contact</a>
                </div>
               
                
                                
                           

                <a class="btn btn-outline-dark" href="{{route('cart.view')}}">
                            <i class="bi-cart-fill me-1"></i>
                            Cart
                            <span class="badge bg-dark text-white ms-1 rounded-pill">
                                @if(session()->has('vcart'))
                                    {{ count(session()->get('vcart')) }}
                                @else
                                0
                                @endif
                            </span>
                        </a>
                  
                @guest
                <a href="{{route('customer.login')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Log In</a>
                <a href="{{route('customer.registration')}}" class="btn btn-primary py-2 px-4 d-none d-lg-block">Registration</a>
                @endguest
                @auth
                <a href="{{route('customer.logout')}}">Logout</a>|
                <a href="{{route('profile.view')}}">Profile</a>|
                <p class="text-muted font-size-sm">{{auth()->user()->role}}</p>
                @endauth

            </div>
        </nav>
    </div>
    <!-- Navbar End -->

