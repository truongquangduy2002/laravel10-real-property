<header class="main-header">
    <!-- header-top -->
    <div class="header-top">
        <div class="top-inner clearfix">
            <div class="left-column pull-left">
                <ul class="info clearfix">
                    <li><i class="far fa-map-marker-alt"></i>Discover St, New York, NY 10012, USA</li>
                    <li><i class="far fa-clock"></i>Mon - Sat 9.00 - 18.00</li>
                    <li><i class="far fa-phone"></i><a href="tel:2512353256">+251-235-3256</a></li>
                </ul>
            </div>
            <div class="right-column pull-right">
                <ul class="social-links clearfix">
                    <li><a href="index.html"><i class="fab fa-facebook-f"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-twitter"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-pinterest-p"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-google-plus-g"></i></a></li>
                    <li><a href="index.html"><i class="fab fa-vimeo-v"></i></a></li>
                </ul>
                @auth
                    <div class="sign-box">
                        <a href="{{ route('dashboard') }}"><i class="fas fa-user"></i>Dashboard</a>
                        <a href="{{ route('user.logout') }}"><i class="fas fa-user"></i>Logout</a>
                    </div>
                @else
                    <div class="sign-box">
                        <a href="{{ route('login') }}"><i class="fas fa-user"></i>Sign In</a>
                    </div>
                @endauth
            </div>
        </div>
    </div>
    <!-- header-lower -->
    <div class="header-lower">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="{{ route('user.index') }}"><img
                                src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <!--Mobile Navigation Toggler-->
                    <div class="mobile-nav-toggler">
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                        <i class="icon-bar"></i>
                    </div>
                    <nav class="main-menu navbar-expand-md navbar-light">
                        <div class="collapse navbar-collapse show clearfix" id="navbarSupportedContent">
                            <ul class="navigation clearfix">
                                <li><a href="{{ route('user.index') }}"><span>Home</span></a>
                                </li>
                                {{-- <li class="dropdown"><a href="index.html"><span>Listing</span></a>
                                    <ul>
                                        <li><a href="agents-list.html">Agents List</a></li>

                                    </ul>
                                </li> --}}
                                <li class="dropdown"><a href="index.html"><span>Property</span></a>
                                    <ul>
                                        <li><a href="property-list.html">Property List</a></li>

                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html"><span>Pages</span></a>
                                    <div class="megamenu">
                                        <div class="row clearfix">
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li>
                                                        <h4>Pages</h4>
                                                    </li>
                                                    <li><a href="about.html">About Us</a></li>
                                                    <li><a href="services.html">Our Services</a></li>
                                                    <li><a href="faq.html">Faq's Page</a></li>
                                                    <li><a href="pricing.html">Pricing Table</a></li>
                                                    <li><a href="compare-roperties.html">Compare Properties</a></li>
                                                    <li><a href="categories.html">Categories Page</a></li>
                                                    <li><a href="career.html">Career Opportunity</a></li>
                                                    <li><a href="testimonials.html">Testimonials</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li>
                                                        <h4>Pages</h4>
                                                    </li>
                                                    <li><a href="gallery.html">Our Gallery</a></li>
                                                    <li><a href="profile.html">My Profile</a></li>
                                                    <li><a href="signin.html">Sign In</a></li>
                                                    <li><a href="signup.html">Sign Up</a></li>
                                                    <li><a href="error.html">404</a></li>
                                                    <li><a href="agents-list.html">Agents List</a></li>
                                                    <li><a href="agents-grid.html">Agents Grid</a></li>
                                                    <li><a href="agents-details.html">Agent Details</a></li>
                                                </ul>
                                            </div>
                                            <div class="col-xl-4 column">
                                                <ul>
                                                    <li>
                                                        <h4>Pages</h4>
                                                    </li>
                                                    <li><a href="blog-1.html">Blog 01</a></li>
                                                    <li><a href="blog-2.html">Blog 02</a></li>
                                                    <li><a href="blog-3.html">Blog 03</a></li>
                                                    <li><a href="blog-details.html">Blog Details</a></li>
                                                    <li><a href="agency-list.html">Agency List</a></li>
                                                    <li><a href="agency-grid.html">Agency Grid</a></li>
                                                    <li><a href="agency-details.html">Agency Details</a></li>
                                                    <li><a href="contact.html">Contact Us</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </li>
                                <li class="dropdown"><a href="index.html"><span>Agency</span></a>
                                    <ul>
                                        <li><a href="agency-list.html">Agency List</a></li>
                                        <li><a href="agency-grid.html">Agency Grid</a></li>
                                        <li><a href="agency-details.html">Agency Details</a></li>
                                    </ul>
                                </li>
                                <li class="dropdown"><a href="index.html"><span>Blog</span></a>
                                    <ul>
                                        <li><a href="blog-1.html">Blog 01</a></li>
                                        <li><a href="blog-2.html">Blog 02</a></li>
                                        <li><a href="blog-3.html">Blog 03</a></li>
                                        <li><a href="blog-details.html">Blog Details</a></li>
                                    </ul>
                                </li>
                                <li><a href="contact.html"><span>Contact</span></a></li>
                                <li>
                                    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                                </li>
                            </ul>
                        </div>
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                </div>
            </div>
        </div>
    </div>

    <!--sticky Header-->
    <div class="sticky-header">
        <div class="outer-box">
            <div class="main-box">
                <div class="logo-box">
                    <figure class="logo"><a href="index.html"><img
                                src="{{ asset('frontend/assets/images/logo.png') }}" alt=""></a></figure>
                </div>
                <div class="menu-area clearfix">
                    <nav class="main-menu clearfix">
                        <!--Keep This Empty / Menu will come through Javascript-->
                    </nav>
                </div>
                <div class="btn-box">
                    <a href="index.html" class="theme-btn btn-one"><span>+</span>Add Listing</a>
                </div>
            </div>
        </div>
    </div>
</header>
