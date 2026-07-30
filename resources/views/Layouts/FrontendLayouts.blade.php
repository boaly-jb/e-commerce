<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width,initial-scale=1">
    <title>@yield('title')</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link
        href="https://fonts.googleapis.com/css2?family=Fraunces:opsz,wght@9..144,400;9..144,600;9..144,700&family=Manrope:wght@400;500;600;700&display=swap"
        rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.css" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('Frontend/assets/css/responsive.css') }}" rel="stylesheet">
</head>

<body>
    <header class="gb-header">
        <div class="container">
            <div class="p-2 row align-items-center">
                <div class="col-lg-3 col-6">
                    <a href="" class="logo">Akhoni<span>Buy</span></a>
                </div>
                <div class="col-lg-6 order-lg-2 order-3">
                    <div class="gb-search">
                        <input class="form-control input-search" type="text"
                            placeholder="Search for groceries, spices, snacks…">
                        <i class="bi bi-search icon"></i>
                    </div>
                </div>
                <div class="col-lg-3 col-6 order-lg-3 order-2 col-actions">
                    <div class="d-flex gap-2 justify-content-end align-items-center">
                        <a href="wishlist.html" class="gb-icon-btn d-none d-sm-inline-flex" aria-label="Wishlist"><i
                                class="bi bi-heart"></i></a>
                        <a href="cart.html" class="gb-icon-btn" aria-label="Cart"><i class="bi bi-bag"></i><span
                                class="gb-badge">3</span></a>
                        <a href="{{ route('login') }}" class="gb-icon-btn" aria-label="Account"><i class="bi bi-person"></i></a>
                        <button class="gb-icon-btn d-lg-none" type="button" data-bs-toggle="offcanvas"
                            data-bs-target="#navMenu" aria-label="Menu"><i class="bi bi-list"></i></button>
                    </div>
                </div>
            </div>
            <nav class="gb-nav d-none d-lg-block">
                <div class="gb-nav-list d-flex align-items-center flex-wrap">
                    <a href="index.html" class="active">Home</a>
                    <a href="shop.html" class="">Shop</a>
                    <a href="shop.html">Fresh Produce</a>
                    <a href="shop.html">Pantry</a>
                    <a href="shop.html">Snacks</a>
                    <a href="shop.html">Beverages</a>
                    <a href="about.html" class="">About</a>
                    <a href="contact.html" class="">Contact</a>
                    <a href="faq.html" class=" ms-auto">FAQ</a>
                </div>
            </nav>
        </div>
    </header>


    <div class="offcanvas offcanvas-start" tabindex="-1" id="navMenu">
        <div class="offcanvas-header"><span class="logo">Akhoni<span
                    style="color:var(--terracotta)">Buy</span></span><button type="button" class="btn-close"
                data-bs-dismiss="offcanvas"></button></div>
        <div class="offcanvas-body">
            <nav class="gb-nav">
                <div class="gb-nav-list d-flex flex-column align-items-start">
                    <a href="index.html">Home</a><a href="shop.html">Shop</a><a href="shop.html">Fresh Produce</a>
                    <a href="shop.html">Pantry</a><a href="shop.html">Snacks</a><a href="shop.html">Beverages</a>
                    <a href="about.html">About</a><a href="contact.html">Contact</a><a href="faq.html">FAQ</a>
                </div>
            </nav>
        </div>
    </div>

    @yield('content')


    <footer class="gb-footer">
        <div class="container">
            <div class="row g-4">
                <div class="col-lg-4 col-12">
                    <a href="index.html" class="logo">Akhoni<span>Buy</span></a>
                    <p>Fresh groceries and pantry staples, thoughtfully sourced and delivered to your door across the
                        country.</p>
                    <div class="social">
                        <a href="#"><i class="bi bi-facebook"></i></a>
                        <a href="#"><i class="bi bi-instagram"></i></a>
                        <a href="#"><i class="bi bi-twitter-x"></i></a>
                        <a href="#"><i class="bi bi-youtube"></i></a>
                    </div>
                </div>
                <div class="col-lg-2 col-6">
                    <h5>Quick Links</h5>
                    <a href="about.html">About Us</a><a href="contact.html">Contact</a>
                    <a href="faq.html">FAQ</a><a href="shop.html">Shop</a><a href="profile.html">My Account</a>
                </div>
                <div class="col-lg-2 col-6">
                    <h5>Categories</h5>
                    <a href="shop.html">Fresh Produce</a><a href="shop.html">Pantry</a>
                    <a href="shop.html">Snacks</a><a href="shop.html">Beverages</a><a href="shop.html">Household</a>
                </div>
                <div class="col-lg-4 col-12">
                    <h5>Get in Touch</h5>
                    <a href="#"><i class="bi bi-geo-alt me-2"></i>House 24, Road 11, Banani, Dhaka 1213</a>
                    <a href="#"><i class="bi bi-telephone me-2"></i>+880 1700 000 000</a>
                    <a href="#"><i class="bi bi-envelope me-2"></i>hello@akhoniby.com</a>
                    <a href="#"><i class="bi bi-clock me-2"></i>Sun – Fri, 9:00 – 21:00</a>
                </div>
            </div>
            <div class="bottom">
                <span>© 2026 AkhoniBuy. All rights reserved.</span>
                <div class="pay">
                    <span>VISA</span><span>Mastercard</span><span>bKash</span><span>Nagad</span><span>COD</span>
                </div>
            </div>
        </div>
    </footer>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
