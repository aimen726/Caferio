@extends('frontend.layouts.main')
@section('title', 'Shop')
@section('main-container')

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
                    <button id="popup-search-button" type="submit" name="submit"><i class="las la-search"></i></button>
                </form>
            </div>
        </div><!-- /#popup-search-box -->

        <section class="page-header">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="page-header-content">
                    <h4>Shop</h4>
                    <h2>Online Food Shop</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="food-menu bg-grey pt-80">
            <div class="container">
                <div class="heading-wrap">
                    <div class="section-heading mb-30">
                        <h4>Popular Dishes</h4>
                        <h2>Our Popular <span>Dishes</span></h2>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                    </div>
                    <div>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                        <a href="#" class="default-btn"><i class="fas fa-utensils"></i>Full Menu <span></span></a>
                    </div>
                </div>
                <div class="nav-outside">
                  <div class="food-carousel swiper-container nav-visible">
                       <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="product-item">
                                   <div class="sale">-15%</div>
                                    <div class="product-thumb">
                                        <img src="{{url('frontend/img/food01.png')}}" alt="food">
                                        <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Chicken</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Fried Chicken Unlimited</h3>
                                        <div class="price">
                                            <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-10%</div>
                                    <div class="product-thumb">
                                        <img src="{{url('frontend/img/food02.png')}}" alt="food">
                                        <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Noddles</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Burger King Whopper</h3>
                                        <div class="price">
                                            <h4>Price: <span>$29.00</span> <span class="reguler">$39.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-25%</div>
                                    <div class="product-thumb">
                                        <img src="{{url('frontend/img/food03.png')}}" alt="food">
                                        <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Pizzas</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>White Castle Pizzas</h3>
                                        <div class="price">
                                            <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="product-item">
                                    <div class="sale">-20%</div>
                                    <div class="product-thumb">
                                        <img src="{{url('frontend/img/food04.png')}}" alt="food">
                                        <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                                    </div>
                                    <div class="food-info">
                                       <ul class="ratting">
                                           <li>Burrito</li>
                                           <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                            <li><i class="las la-star"></i></li>
                                       </ul>
                                        <h3>Bell Burrito Supreme</h3>
                                        <div class="price">
                                            <h4>Price: <span>$59.00</span> <span class="reguler">$69.00</span></h4>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="dl-slider-controls style-2">
                            <div class="dl-slider-button-prev"><i class="las la-arrow-left"></i></div>
                            <div class="dl-swiper-pagination"></div>
                            <div class="dl-slider-button-next"><i class="las la-arrow-right"></i></div>
                        </div>
                        <div class="carousel-preloader"><div class="dot-flashing"></div></div>
                   </div>
                </div>
            </div>
        </section><!--/.food-menu-->

        <section class="food-menu bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
               <div class="heading-wrap">
                    <div class="section-heading mb-30">
                        <h4>Popular Dishes</h4>
                        <h2>Our Bestselling <span>Dishes</span></h2>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                    </div>
                    <div>
                        <p>Food is any substance consumed to provide nutritional <br> support for an organism.</p>
                        <a class='default-btn' href='food-menu.html'><i class="fas fa-utensils"></i>Full Menu <span></span></a>
                    </div>
                </div>
                <div class="row">
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                           <div class="sale">-15%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food01.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Chicken</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>Fried Chicken Unlimited</h3>
                                <div class="price">
                                    <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                            <div class="sale">-10%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food02.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Noddles</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>Burger King Whopper</h3>
                                <div class="price">
                                    <h4>Price: <span>$29.00</span> <span class="reguler">$39.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                            <div class="sale">-25%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food03.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Pizzas</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>White Castle Pizzas</h3>
                                <div class="price">
                                    <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                            <div class="sale">-20%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food04.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Burrito</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>Bell Burrito Supreme</h3>
                                <div class="price">
                                    <h4>Price: <span>$59.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                            <div class="sale">-5%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food05.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Nuggets</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>Kung Pao Chicken BBQ</h3>
                                <div class="price">
                                    <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-sm-6 padding-15">
                        <div class="product-item">
                            <div class="sale">-15%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food06.png')}}" alt="food">
                                <div><a class='order-btn' href='shop-details.html'>Order Now</a></div>
                            </div>
                            <div class="food-info">
                               <ul class="ratting">
                                   <li>Chicken</li>
                                   <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                                    <li><i class="las la-star"></i></li>
                               </ul>
                                <h3>Wendy's Chicken Nuggets</h3>
                                <div class="price">
                                    <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <ul class="pagination-wrap text-center mt-30">
                    <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                </ul><!--/.pagination -->
            </div>
        </section><!--/.food-menu-->
@endsection
