@extends('frontend.layouts.main')
@section('title', 'Blog')
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
                    <h4>Recent Posts</h4>
                    <h2>Book of Recipes and <br>Cooking Tips!</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="blog-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row blog-posts">
                    <div class="col-lg-8 sm-padding">
                        <div class="row grid-layout">
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{url('frontend/img/post-1.jpg')}}" alt="img">
                                        <div class="category"><a href="#">Desert</a></div>
                                    </div>
                                    <div class="post-content">
                                        <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="#">Incredible Mac and Cheese.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{url('frontend/img/post-2.jpg')}}" alt="img">
                                        <div class="category"><a href="#">Fish</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="#">Burrata Salad with Fried.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
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
                                        <h3><a href="#">Chicken Tinga cahos.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{url('frontend/img/post-4.jpg')}}" alt="img">
                                        <div class="category"><a href="#">Salad</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="#">Quinoa Sweet Potato Salad.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{url('frontend/img/post-5.jpg')}}" alt="img">
                                        <div class="category"><a href="#">Chicken</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="#">Hot Chessyraw Pasta.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-6 padding-15">
                                <div class="post-card">
                                    <div class="post-thumb">
                                        <img src="{{url('frontend/img/post-6.jpg')}}" alt="img">
                                        <div class="category"><a href="#">Pizza</a></div>
                                    </div>
                                    <div class="post-content">
                                       <ul class="post-meta">
                                           <li><i class="far fa-calendar-alt"></i><a href="#">Jan 01 2021</a></li>
                                           <li><i class="far fa-user"></i><a href="#">Jonathan Smith</a></li>
                                        </ul>
                                        <h3><a href="#">Tasty Cheese Pizza.</a></h3>
                                        <p>Financial experts support or help you to to find out which way you can raise your funds more...</p>
                                        <a href="#" class="read-more">Read More <i class="las la-long-arrow-alt-right"></i></a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <ul class="pagination-wrap text-left mt-30">
                            <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                            <li><a href="#">1</a></li>
                            <li><a href="#" class="active">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                        </ul><!--/.pagination -->
                    </div><!--/. col-lg-8 -->
                    <div class="col-lg-4 sm-padding">
                        <div class="sidebar-wrap">
                            <div class="sidebar-widget">
                                <form action="#" class="search-form">
                                    <input type="text" class="form-control" placeholder="Search">
                                    <button class="search-btn" type="button"><i class="fa fa-search"></i></button>
                                </form>
                            </div><!--/.search-form-->
                            <div class="sidebar-widget">
                                <div class="widget-tittle">
                                   <h2>Categories</h2>
                                   <span></span>
                                </div>
                                <ul class="categories">
                                    <li><a href="#">Burger Strips<span>23</span></a></li>
                                    <li><a href="#">Catalonian Salad <span>15</span></a></li>
                                    <li><a href="#">Nicoise Salad <span>05</span></a></li>
                                    <li><a href="#">Fried Chicjken <span>18</span></a></li>
                                    <li><a href="#">Spacial Cawmin <span>04</span></a></li>
                                </ul>
                            </div><!--/. categories-->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Follow Us</h2>
                                   <span></span>
                                </div>
                                <ul class="social-widget">
                                    <li><a class="facebook" href="#"><i class="fab fa-facebook-f"></i>Facebook</a></li>
                                    <li><a class="twitter" href="#"><i class="fab fa-twitter"></i>Twitter</a></li>
                                    <li><a class="instagram" href="#"><i class="fab fa-instagram"></i>Instagram</a></li>
                                    <li><a class="pinterest" href="#"><i class="fab fa-pinterest"></i>Pinterest</a></li>
                                    <li><a class="dribbble" href="#"><i class="fab fa-dribbble"></i>Dribbble</a></li>
                                    <li><a class="linkedin" href="#"><i class="fab fa-linkedin"></i>Linkedin</a></li>
                                </ul>
                            </div>
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                   <h2>Recent Articles</h2>
                                   <span></span>
                                </div>
                                <ul class="recent-post">
                                    <li>
                                        <div class="thumb">
                                            <img src="{{url('frontend/img/post-thumb-1.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="#">How to go about initiating an startup in few days.</a></h3>
                                            <a href="#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="{{url('frontend/img/post-thumb-2.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="#">Financial experts support or help you to to find way.</a></h3>
                                            <a href="#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                    <li>
                                        <div class="thumb">
                                            <img src="{{url('frontend/img/post-thumb-3.jpg')}}" alt="thumb">
                                        </div>
                                        <div class="recent-post-meta">
                                            <h3><a href="#">Innovative helping your business all over the world.</a></h3>
                                            <a href="#" class="date"><i class="far fa-calendar-alt"></i>Jan 01 2021</a>
                                        </div>
                                    </li>
                                </ul>
                            </div><!--/.recent-posts -->
                            <div class="sidebar-widget">
                               <div class="widget-tittle">
                                    <h2>Tags</h2>
                                    <span></span>
                                </div>
                                <ul class="tags">
                                    <li><a href="#">business</a></li>
                                    <li><a href="#">marketing</a></li>
                                    <li><a href="#">startup</a></li>
                                    <li><a href="#">design</a></li>
                                    <li><a href="#">consulting</a></li>
                                    <li><a href="#">development</a></li>
                                    <li><a href="#">tips</a></li>
                                    <li><a href="#">strategy</a></li>
                                    <li><a href="#">Seo</a></li>
                                </ul>
                            </div><!--/.tags -->
                        </div>
                    </div><!--/. col-lg-4 -->
                </div>
            </div>
        </section><!--/. blog-section -->
@endsection
