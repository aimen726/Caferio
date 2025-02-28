@extends('frontend.layouts.main')
@section('title', 'FAQ')
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
                    <h4>Help and Faq's</h4>
                    <h2>Frequently Asked Question</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="blog-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row blog-posts">
                    <div class="col-lg-8 sm-padding">
                       <div class="accordion faq-accordion" id="faq-accordion">
                          <div class="accordion-item">
                                <h2 class="accordion-header" id="headingOne">
                                  <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne"> How to Order Fried Chicken Online? </button>
                                </h2>
                                <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#faq-accordion">
                                  <div class="accordion-body">
                                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingTwo">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo"> How To Payment Caferio Restaurant Online? </button>
                                </h2>
                                <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#faq-accordion">
                                  <div class="accordion-body">
                                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingThree">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="false" aria-controls="collapseThree"> How to Go Caferio Restaurnt by Road? </button>
                                </h2>
                                <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#faq-accordion">
                                  <div class="accordion-body">
                                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFour">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="false" aria-controls="collapseFour"> What Should I be Asking For Fast Food? </button>
                                </h2>
                                <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#faq-accordion">
                                  <div class="accordion-body">
                                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                                  </div>
                                </div>
                            </div>
                            <div class="accordion-item">
                                <h2 class="accordion-header" id="headingFive">
                                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFive" aria-expanded="false" aria-controls="collapseFive"> How Many Food Items Cafrerio Have? </button>
                                </h2>
                                <div id="collapseFive" class="accordion-collapse collapse" aria-labelledby="headingFive" data-bs-parent="#faq-accordion">
                                  <div class="accordion-body">
                                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families. The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion.</p>
                                  </div>
                                </div>
                            </div>
                        </div>
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
                        </div>
                    </div><!--/. col-lg-4 -->
                </div>
            </div>
        </section>
@endsection
