@extends('Layouts.FrontendLayouts')
@section('title' )
Ekhoni-Buy.Com
@endsection


@section('content')
<main>
    <section style="padding-top:20px"> 
        <div class="container">
            <div class="gb-hero">
                <div class="row align-items-center g-4">
                    <div class="col-lg-6">
                        <span class="eyebrow">Curated Weekly</span>
                        <h1>Everyday goods,<br>thoughtfully sourced.</h1>
                        <p>Fresh produce, pantry staples and small-batch essentials from local farms and makers —
                            delivered to your door.</p>
                        <div class="d-flex gap-3 mt-4">
                            <a href="shop.html" class="btn btn-terracotta">Shop the Market <i
                                    class="bi bi-arrow-right ms-2"></i></a>
                            <a href="about.html" class="btn btn-ghost">Our story</a>
                        </div>
                        <div class="gb-dots"><span class="active"></span><span></span><span></span></div>
                    </div>
                    <div class="col-lg-6">
                        <img class="hero-img" src="https://placehold.co/900x700/C96F4A/fff?text=Editorial+Basket"
                            alt="Editorial produce basket">
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="d-flex justify-content-between align-items-start flex-wrap ">
                <div>
                    <div class="section-eyebrow">Categories</div>
                    <h2 class="section-title">Shop by aisle</h2>
                </div>
                {{-- <a href="shop.html" class="btn btn-ghost">View all <i class="bi bi-arrow-right ms-2"></i></a> --}}
            </div>
            <div class="row g-3">
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-basket3"></i></div>
                        <div class="cat-name">Fresh Produce</div>
                        <div class="cat-count">124 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-cup-hot"></i></div>
                        <div class="cat-name">Pantry</div>
                        <div class="cat-count">218 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-egg"></i></div>
                        <div class="cat-name">Dairy & Eggs</div>
                        <div class="cat-count">64 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-cup-straw"></i></div>
                        <div class="cat-name">Beverages</div>
                        <div class="cat-count">92 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-heart-pulse"></i></div>
                        <div class="cat-name">Wellness</div>
                        <div class="cat-count">48 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-flower1"></i></div>
                        <div class="cat-name">Spices</div>
                        <div class="cat-count">76 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-box-seam"></i></div>
                        <div class="cat-name">Household</div>
                        <div class="cat-count">110 items</div>
                    </a>
                </div>
                <div class="col-lg col-md-3 col-6">
                    <a href="shop.html" class="cat-card d-block">
                        <div class="cat-icon"><i class="bi bi-gift"></i></div>
                        <div class="cat-name">Gift Boxes</div>
                        <div class="cat-count">22 items</div>
                    </a>
                </div>
            </div>
        </div>
    </section>

    <section style="background:var(--cream)">
        <div class="container">
            <div class="d-flex justify-content-between align-items-end flex-wrap mb-4">
                <div>
                    <div class="section-eyebrow">Featured</div>
                    <h2>This week's picks</h2>
                </div>
                <a href="shop.html" class="btn btn-ghost">Shop featured</a>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Mangoes" alt="Alphonso Mangoes">
                            <span class="badge-discount">-20%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Fresh Produce</span>
                            <span class="p-name">Alphonso Mangoes</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳480</span><span
                                    class="price-old">৳600</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Basmati+Rice"
                                alt="Aromatic Basmati Rice">
                            <span class="badge-discount">-14%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Aromatic Basmati Rice</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳1250</span><span
                                    class="price-old">৳1450</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Mustard+Oil"
                                alt="Cold-Pressed Mustard Oil">

                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Cold-Pressed Mustard Oil</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳520</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Honey" alt="Organic Honey Jar">
                            <span class="badge-discount">-19%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Organic Honey Jar</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳890</span><span
                                    class="price-old">৳1100</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="mb-4">
                <div class="section-eyebrow">New Arrivals</div>
                <h2>Fresh on the shelves</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Ghee" alt="Handmade Ghee">

                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Dairy</span>
                            <span class="p-name">Handmade Ghee</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳1450</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Spices"
                                alt="Assorted Spice Set">
                            <span class="badge-discount">-19%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Assorted Spice Set</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳720</span><span
                                    class="price-old">৳890</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Farm+Eggs"
                                alt="Fresh Farm Eggs">

                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Dairy</span>
                            <span class="p-name">Fresh Farm Eggs</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳180</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Cashews" alt="Roasted Cashews">
                            <span class="badge-discount">-11%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Snacks</span>
                            <span class="p-name">Roasted Cashews</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳640</span><span
                                    class="price-old">৳720</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="padding-top:0">
        <div class="container">
            <div class="row g-3">
                <div class="col-md-6">
                    <div class="promo-card"><small>Limited Offer</small>
                        <h4>Weekly grocery box — 15% off</h4><a href="shop.html" class="btn btn-dark-soft">Shop the
                            box</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="promo-card dark"><small>Local Makers</small>
                        <h4>Small-batch spices</h4><a href="shop.html" class="btn btn-terracotta">Discover</a>
                    </div>
                </div>
                <div class="col-md-3">
                    <div class="promo-card cream"><small>Free Delivery</small>
                        <h4>Orders over ৳1500</h4><a href="shop.html" class="btn btn-outline-terracotta">Learn
                            more</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section style="background:var(--cream)">
        <div class="container">
            <div class="mb-4">
                <div class="section-eyebrow">Best Selling</div>
                <h2>Loved by our shoppers</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Basmati+Rice"
                                alt="Aromatic Basmati Rice">
                            <span class="badge-discount">-14%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Aromatic Basmati Rice</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳1250</span><span
                                    class="price-old">৳1450</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Honey" alt="Organic Honey Jar">
                            <span class="badge-discount">-19%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Organic Honey Jar</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳890</span><span
                                    class="price-old">৳1100</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Spices"
                                alt="Assorted Spice Set">
                            <span class="badge-discount">-19%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Pantry</span>
                            <span class="p-name">Assorted Spice Set</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳720</span><span
                                    class="price-old">৳890</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-4 col-6">
                    <div class="product-card">
                        <div class="p-img">
                            <img src="https://placehold.co/400x400/f4dccd/C96F4A?text=Mangoes" alt="Alphonso Mangoes">
                            <span class="badge-discount">-20%</span>
                            <span class="p-wish"><i class="bi bi-heart"></i></span>
                        </div>
                        <div class="p-body">
                            <span class="p-cat">Fresh Produce</span>
                            <span class="p-name">Alphonso Mangoes</span>
                            <span class="p-rate"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                    class="bi bi-star-half"></i> <span class="text-muted-warm">(128)</span></span>
                            <div class="p-price"><span class="price-new">৳480</span><span
                                    class="price-old">৳600</span></div>
                            <button class="p-cart"><i class="bi bi-bag-plus me-1"></i>Add to Cart</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="mb-4 text-center">
                <div class="section-eyebrow">Kind Words</div>
                <h2>What our shoppers say</h2>
            </div>
            <div class="row g-4">
                <div class="col-lg-4">
                    <div class="testimonial">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div>
                        <p>"Produce arrives crisp, packed with obvious care. It has replaced my weekly market run."</p>
                        <div class="who">
                            <div class="avatar"><img src="https://placehold.co/88x88/f4dccd/C96F4A?text=R"
                                    alt=""></div>
                            <div>
                                <div class="who-name">Rifah Ahmed</div>
                                <div class="who-role">Regular customer, 2 years</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div>
                        <p>"Their pantry staples feel like a small pantry in a village — real, honest, delicious."</p>
                        <div class="who">
                            <div class="avatar"><img src="https://placehold.co/88x88/f4dccd/C96F4A?text=T"
                                    alt=""></div>
                            <div>
                                <div class="who-name">Tanvir Rahman</div>
                                <div class="who-role">Home cook</div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="testimonial">
                        <div class="stars"><i class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i><i class="bi bi-star-fill"></i><i
                                class="bi bi-star-fill"></i></div>
                        <p>"Everything from ordering to unboxing feels considered. It's grocery shopping, refined."</p>
                        <div class="who">
                            <div class="avatar"><img src="https://placehold.co/88x88/f4dccd/C96F4A?text=S"
                                    alt=""></div>
                            <div>
                                <div class="who-name">Sadia Karim</div>
                                <div class="who-role">Chef & baker</div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <section>
        <div class="container">
            <div class="newsletter">
                <h2>Stay in the market loop</h2>
                <p>Weekly picks, seasonal recipes, and the occasional pantry sale — straight to your inbox.</p>
                <form class="form-inline" onsubmit="return false">
                    <input type="email" placeholder="your@email.com" aria-label="Email">
                    <button class="btn">Subscribe</button>
                </form>
            </div>
        </div>
    </section>
</main>


@endsection