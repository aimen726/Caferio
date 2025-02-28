@extends('frontend.layouts.main')
@section('title', 'FoodMenu')
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
                    <h4>Our Food Menu</h4>
                    <h2>Experience The Taste <br>of Italian Food.</h2>
                    <p>Food is any substance consumed to provide nutritional <br>support for an organism.</p>
                </div>
            </div>
        </section><!--/.page-header-->

        <section class="foodmenu bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row">
                    @foreach ($menuItems as $item)
                        <div class="col-lg-4 col-sm-6 padding-15">
                            <div class="product-item">
                                <div class="sale">-{{ $item->discount }}%</div>
                                <div class="product-thumb">
                                    <img src="{{ url($item->image) }}" alt="food">
                                    <div><a href="#" class="order-btn">Order Now</a></div>
                                </div>
                                <div class="foodmenu-info">
                                    <ul class="ratting">
                                        <li>{{ $item->category }}</li>
                                        @for ($i = 0; $i < $item->rating; $i++)
                                            <li><i class="las la-star"></i></li>
                                        @endfor
                                    </ul>
                                    <h3>{{ $item->name }}</h3>
                                    <div class="price">
                                        <h4>Price: <span>${{ $item->price }}</span> <span class="reguler">${{ $item->regular_price }}</span></h4>
                                    </div>
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
                <ul class="pagination-wrap text-center mt-30">
                    <li><a href="#"><i class="las la-arrow-left"></i></a></li>
                    <li><a href="#">1</a></li>
                    <li><a href="#" class="active">2</a></li>
                    <li><a href="#">3</a></li>
                    <li><a href="#"><i class="las la-arrow-right"></i></a></li>
                </ul>
            </div>
        </section>

@endsection
