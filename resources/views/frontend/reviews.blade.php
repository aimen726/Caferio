@extends('frontend.layouts.main')
@section('title', 'Reviews')
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
                    <h4>Food Reviews</h4>
                    <h2>Experience The Taste <br>of Italian Food.</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="review-section bg-grey padding">
           <div class="bg-shape white"></div>
            <div class="container">
                <div class="row">
                    <div class="col-md-6 padding-15">
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
                    <div class="col-md-6 padding-15">
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
                    <div class="col-md-6 padding-15">
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
                    <div class="col-md-6 padding-15">
                        <div class="testimonial-item">
                            <div class="testi-thumb">
                                <img src="{{url('frontend/img/testi04.jpg')}}" alt="img">
                                <div class="author">
                                    <h3>Alex Henry</h3>
                                    <h4>CEO Fstyer</h4>
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
            </div>
        </section>
@endsection
