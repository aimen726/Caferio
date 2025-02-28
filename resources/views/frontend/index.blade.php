@extends('frontend.layouts.main')
@section('title', 'Home')
@section('main-container')
        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
                    <button id="popup-search-button" type="submit" name="submit"><i class="las la-search"></i></button>
                </form>
            </div>
        </div>

        <div id="main-slider" class="main-slider">
            <div class="single-slide">
                <div class="bg-img kenburns-top" style="background-image: url(assets/img/slider-bg-01.jpg);"></div>
                <div class="slider-shape" style="background-image: url(assets/img/slider-shape-01.png);" data-animation="fade-in-right" data-delay="0.5s"></div>
                <div class="food-img" style="background-image: url(assets/img/food-img-01.png);" data-animation="fade-in-right" data-delay="1s"></div>
                <div class="food-design" style="background-image: url(assets/img/slider-elements.png);" data-animation="zoomIn" data-delay="1.3s"></div>
                <div class="slider-content-wrap d-flex align-items-center">
                    <div class="container">
                        <div class="slider-content">
                            <div class="slider-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="0.5s">Eat Sleep And</div></div></div>
                            <div class="slider-caption big"><div class="inner-layer"><div data-animation="reveal-text" data-delay="1s">Supper delicious<br> Burger in town!</div></div>
                            </div>
                            <div class="slider-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2s">food is any substance consumed to provide nutritional <br>support for an organism.</div></div></div>
                            <div class="slider-btn-group justify-content-left">
                                <div class="inner-layer">
                                    <a class='slider-btn' data-animation='fade-in-bottom' data-delay='2.5s' href="{{url('reservation')}}">Book A Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Slide-1-->
            <div class="single-slide center">
                <div class="bg-img kenburns-top" style="background-image: url(assets/img/slider-bg-02.jpg);"></div>
                <div class="slider-shape" style="background-image: url(assets/img/slider-shape-01.png);" data-animation="fade-in-right" data-delay="0.5s"></div>
                <div class="slider-shape left" style="background-image: url(assets/img/slider-shape-02.png);" data-animation="fade-in-left" data-delay="0.5s"></div>
                <div class="food-img" style="background-image: url(assets/img/food-img-02.png);" data-animation="fade-in-bottom" data-delay="1s"></div>
                <div class="food-design" style="background-image: url(assets/img/slider-elements-center.png);" data-animation="zoomIn" data-delay="1.3s"></div>
                <div class="slider-content-wrap d-flex align-items-center text-center">
                    <div class="container">
                        <div class="slider-content">
                           <div class="slider-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="0.5s">Eat Sleep And</div></div></div>
                            <div class="slider-caption big"><div class="inner-layer"><div class="char-top" data-delay="1s" data-splitting>Tasty Pizza</div></div>
                            </div>
                            <div class="slider-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="1.5s">food is any substance consumed to provide nutritional <br>support for an organism.</div></div></div>
                            <div class="slider-btn-group justify-content-center">
                                <div class="inner-layer">
                                    <a class='slider-btn' data-animation='fade-in-bottom' data-delay='2s' href="{{url('reservation')}}">Book A Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Slide-2-->
            <div class="single-slide right">
                <div class="bg-img kenburns-top" style="background-image: url(assets/img/slider-bg-03.jpg);"></div>
                <div class="slider-shape left" style="background-image: url(assets/img/slider-shape-02.png);" data-animation="fade-in-left" data-delay="0.5s"></div>
                <div class="food-img" style="background-image: url(assets/img/food-img-03.png);" data-animation="fade-in-top" data-delay="1s"></div>
                <div class="food-design" style="background-image: url(assets/img/slider-elements.png);" data-animation="zoomIn" data-delay="1.3s"></div>
                <div class="slider-content-wrap d-flex align-items-center text-right">
                    <div class="container">
                        <div class="slider-content">
                           <div class="slider-caption medium"><div class="inner-layer"><div data-animation="fade-in-top" data-delay="0.5s">Eat Sleep And</div></div></div>
                            <div class="slider-caption big"><div class="inner-layer"><div class="char-right" data-delay="1s" data-splitting>Fried masala <br>in town!</div></div>
                            </div>
                            <div class="slider-caption small"><div class="inner-layer"><div data-animation="fade-in-bottom" data-delay="2s">food is any substance consumed to provide nutritional <br>support for an organism.</div></div></div>
                            <div class="slider-btn-group justify-content-left">
                                <div class="inner-layer">
                                    <a class='slider-btn' data-animation='fade-in-bottom' data-delay='2.5s' href="{{url('reservation')}}">Book A Table</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div><!--Slide-3-->
        </div><!-- slider-section -->

        <section class="promo-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="nav-outside">
                  <div class="food-carousel swiper-container nav-visible">
                       <div class="swiper-wrapper">
                           <div class="swiper-slide">
                               <div class="food-item">
                                    <div class="food-icon">
                                        <i class="fi fi-pizza-slice"></i>
                                    </div>
                                    <div class="food-content">
                                        <h3>Maxican Pizza</h3>
                                        <p>food is any substance consumed to provide nutritional support for an organism.</p>
                                    </div>
                                    <div class="food-thumb">
                                        <img src="{{url('frontend/img/promo01.png')}}" alt="img">
                                    </div>
                                </div>
                           </div>
                            <div class="swiper-slide">
                                <div class="food-item">
                                    <div class="food-icon">
                                        <i class="fi fi-beer"></i>
                                    </div>
                                    <div class="food-content">
                                        <h3>Soft Drinks</h3>
                                        <p>food is any substance consumed to provide nutritional support for an organism.</p>
                                    </div>
                                    <div class="food-thumb">
                                        <img src="{{url('frontend/img/promo02.png')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="food-item">
                                    <div class="food-icon">
                                        <i class="fi fi-fried-potatoes"></i>
                                    </div>
                                    <div class="food-content">
                                        <h3>French Fry</h3>
                                        <p>food is any substance consumed to provide nutritional support for an organism.</p>
                                    </div>
                                    <div class="food-thumb">
                                        <img src="{{url('frontend/img/promo03.png')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="food-item">
                                    <div class="food-icon">
                                        <i class="fi fi-burger"></i>
                                    </div>
                                    <div class="food-content">
                                        <h3>Burger Kingo</h3>
                                        <p>food is any substance consumed to provide nutritional support for an organism.</p>
                                    </div>
                                    <div class="food-thumb">
                                        <img src="{{url('frontend/img/promo04.png')}}" alt="img">
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="food-item">
                                    <div class="food-icon">
                                        <i class="fi fi-chicken-leg"></i>
                                    </div>
                                    <div class="food-content">
                                        <h3>Chicken Masala</h3>
                                        <p>food is any substance consumed to provide nutritional support for an organism.</p>
                                    </div>
                                    <div class="food-thumb">
                                        <img src="{{url('frontend/img/promo05.png')}}" alt="img">
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
        </section><!--/.promo-section-->

        <section class="about-section padding">
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                       <div class="content-img-holder">
                          <img src="{{url('frontend/img/about01.png')}}" alt="img">
                           <div class="sale">
                               <div>
                                   <h4>Get Up To</h4>
                                    <h2><span>50%</span>Off Now</h2>
                                </div>
                            </div>
                       </div>
                   </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="about-info">
                            <h2>Caferio, Burgers, and <br>Best Pizzas <span>in Town!</span></h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <ul class="check-list">
                                <li><i class="fas fa-check"></i>Delicious &amp; Healthy foods</li>
                                <li><i class="fas fa-check"></i>Spacific Family And Kids Zone</li>
                                <li><i class="fas fa-check"></i>Music &amp; Other Facilities</li>
                                <li><i class="fas fa-check"></i>Fastest food Home Delivery</li>
                            </ul>
                            <a class='default-btn' href={{url('shop')}}>Order Now <span></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.about-section-->

        <section class="food bg-grey padding">
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Popular Dishes</h4>
                    <h2>Our Delicious <span>foods</span></h2>
                    <p>food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <ul class="food-filter">
                    <li class="active" data-filter="*">All</li>
                    <li data-filter=".pizza">Pizza</li>
                    <li data-filter=".burger">Burger</li>
                    <li data-filter=".drinks">Drinks</li>
                    <li data-filter=".sandwich">Sandwich</li>
                </ul>
                <div class="row product-items">
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid pizza sandwich">
                        <div class="product-item wow fadeInUp" data-wow-delay="200ms">
                           <div class="sale">-15%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food01.png')}}" alt="food">
                                <div><a class='order-btn' href={{url('shop')}}>Order Now</a></div>
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
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid burger sandwich">
                        <div class="product-item wow fadeInUp" data-wow-delay="400ms">
                            <div class="sale">-10%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food02.png')}}" alt="food">
                                <div><a class='order-btn' href="{{url('shop')}}">Order Now</a></div>
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
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid drinks burger">
                        <div class="product-item wow fadeInUp" data-wow-delay="600ms">
                            <div class="sale">-25%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food03.png')}}" alt="food">
                                <div><a class='order-btn' href="{{url('shop')}}">Order Now</a></div>
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
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid sandwich drinks">
                        <div class="product-item wow fadeInUp" data-wow-delay="200ms">
                            <div class="sale">-20%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food04.png')}}" alt="food">
                                <div><a class='order-btn' href="{{url('shop')}}">Order Now</a></div>
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
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid burger drinks">
                        <div class="product-item wow fadeInUp" data-wow-delay="400ms">
                            <div class="sale">-5%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food05.png')}}" alt="food">
                                <div><a class='order-btn' href="{{url('shop')}}">Order Now</a></div>
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
                    <div class="col-lg-4 col-md-6 padding-15 isotop-grid sandwich pizza">
                        <div class="product-item wow fadeInUp" data-wow-delay="600ms">
                            <div class="sale">-15%</div>
                            <div class="product-thumb">
                                <img src="{{url('frontend/img/food06.png')}}" alt="food">
                                <div><a class='order-btn' href="{{url('shop')}}">Order Now</a></div>
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
                                <h3>Wendy's Chicken</h3>
                                <div class="price">
                                    <h4>Price: <span>$49.00</span> <span class="reguler">$69.00</span></h4>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <section class="content-section">
            <div class="bg-shape white"></div>
            <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="content-info">
                            <h2>The Caferio Have Excellent <br>Of <span>Quality Burgers!</span></h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <a class='default-btn' href="{{url('shop')}}">Order Now <span></span></a>
                        </div>
                    </div>
                    <div class="col-md-6 wow fadeInRight" data-wow-delay="400ms">
                        <div class="content-img-holder">
                            <img src="{{url('frontend/img/food-img-04.png')}}" alt="img">
                            <div class="sale">
                               <div>
                                   <h4>Get Up To</h4>
                                    <h2><span>50%</span>Off Now</h2>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.content-section-->

        <section class="delivery-section padding">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row align-items-center">
                    <div class="col-md-6 wow fadeInLeft" data-wow-delay="200ms">
                        <div class="delivery-info">
                            <h2>A Moments Of Delivered <br> On <span>Right Time</span> &amp; Place</h2>
                            <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                            <div class="order-content">
                               <a class='default-btn' href="{{url('shop')}}">Order Now <span></span></a>
                                <h3><span>Order Number</span>#126</h3>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6">
                       <div class="delivery-boy-wrap">
                           <img class="delivery" src="{{url('frontend/img/cloud.png')}}" alt="img">
                            <div class="delivery-boy"></div>
                       </div>
                    </div>
                </div>
            </div>
        </section><!--/.delivery-section-->

        <section class="testimonial-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Testimonials</h4>
                    <h2>Our Customers <span>Reviews</span></h2>
                    <p>food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <div class="nav-outside">
                  <div class="testimonial-carousel swiper-container nav-visible">
                       <div class="swiper-wrapper">
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="{{url('frontend/img/testi01.jpg')}}" alt="img">
                                        <div class="author">
                                            <h3>Robert William</h3>
                                            <h4>CEO Kingfisher</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="{{url('frontend/img/testi02.jpg')}}" alt="img">
                                        <div class="author">
                                            <h3>Thomas Josef</h3>
                                            <h4>CEO Getforce</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
                                </div>
                            </div>
                            <div class="swiper-slide">
                                <div class="testimonial-item">
                                    <div class="testi-thumb">
                                        <img src="{{url('frontend/img/testi03.jpg')}}" alt="img">
                                        <div class="author">
                                            <h3>Charles Richard</h3>
                                            <h4>CEO Angela</h4>
                                        </div>
                                    </div>
                                    <p> "I would be lost without restaurant. I would like to personally thank you for your outstanding product."</p>
                                    <ul class="ratting">
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                        <li><i class="las la-star"></i></li>
                                    </ul>
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
        </section><!--/.testimonial-section-->

        <section class="banner-section padding">
           <div class="bg-shape grey"></div>
            <div class="container">
                <div class="row banner-wrapper">
                   <div class="col-md-6 wow fadeInUp" data-wow-delay="200ms">
                       <div class="banner-item">
                            <img src="{{url('frontend/img/banner01.jpg')}}" alt="banner">
                            <div class="banner-content">
                                <h3>-50% Off Now!</h3>
                                <h2>Discount For Delicious <br>Tasty Burgers!</h2>
                                <p>Sale off 50% only this week</p>
                                <a class='order-btn' href="{{url('shop')}}">Order Now</a>
                            </div>
                        </div>
                   </div>
                    <div class="col-md-6">
                       <div class="row">
                           <div class="col-md-6 wow fadeInUp" data-wow-delay="400ms">
                               <div class="banner-item">
                                    <img src="{{url('frontend/img/banner02.jpg')}}" alt="banner">
                                    <div class="banner-content">
                                        <h3>Delicious <br> Pizza</h3>
                                        <p>50% off Now</p>
                                        <a class='order-btn' href="{{url('shop')}}">Order Now</a>
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-6 wow fadeInUp" data-wow-delay="600ms">
                               <div class="banner-item">
                                    <img src="{{url('frontend/img/banner03.jpg')}}" alt="banner">
                                    <div class="banner-content">
                                        <h3>American <br>Burgers</h3>
                                        <p>50% off Now</p>
                                        <a class='order-btn' href="{{url('shop')}}">Order Now</a>
                                    </div>
                                </div>
                           </div>
                           <div class="col-md-12 wow fadeInUp" data-wow-delay="800ms">
                               <div class="banner-item">
                                    <img src="{{url('frontend/img/banner04.jpg')}}" alt="banner">
                                    <div class="banner-content">
                                        <h3>Tasty Buzzed <br>Pizza</h3>
                                        <p>Sale off 50% only this week</p>
                                        <a class='order-btn' href="{{url('shop')}}">Order Now</a>
                                    </div>
                                </div>
                           </div>
                       </div>
                    </div>
                </div>
            </div>
        </section><!--/.banner-section-->

        <section class="blog-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="section-heading mb-30 text-center wow fadeInUp" data-wow-delay="200ms">
                    <h4>Latest Blog Posts</h4>
                    <h2>This Is All About <span>foods</span></h2>
                    <p>food is any substance consumed to provide nutritional <br> support for an organism.</p>
                </div>
                <div class="row blog-posts">
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="200ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{url('frontend/img/post-1.jpg')}}" alt="img">
                                <div class="category"><a href="#">Pizza</a></div>
                            </div>
                            <div class="post-content">
                                <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href="{{url('blog')}}">What Do You Think About Cheese Pizza Recipes?</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a class='read-more' href='blog-details.blade.php'>Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="400ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{url('frontend/img/post-2.jpg')}}" alt="img">
                                <div class="category"><a href="#">Burger</a></div>
                            </div>
                            <div class="post-content">
                               <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href='blog-details.blade.php'>Making Chicken Strips With New Delicious Ingridents.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a class='read-more' href="{{url('blog')}}">Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                    <div class="col-lg-4 col-md-6 sm-padding wow fadeInUp" data-wow-delay="600ms">
                        <div class="post-card">
                            <div class="post-thumb">
                                <img src="{{url('frontend/img/post-3.jpg')}}" alt="img">
                                <div class="category"><a href="#">Chicken</a></div>
                            </div>
                            <div class="post-content">
                               <ul class="post-meta">
                                   <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                   <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                </ul>
                                <h3><a href="{{url('blog')}}">Innovative Hot Chessyraw Pasta Make Creator Fact.</a></h3>
                                <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                <a class='read-more' href="{{url('blog')}}">Read More <i class="las la-long-arrow-alt-right"></i></a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        @endsection

