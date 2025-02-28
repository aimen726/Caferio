
@extends('frontend.layouts.main')
@section('title', 'Contact')
@section('main-container')

        <div id="popup-search-box">
            <div class="box-inner-wrap d-flex align-items-center">
                <form id="form" action="#" method="get" role="search">
                    <input id="popup-search" type="text" name="s" placeholder="Type keywords here..." />
                    <button id="popup-search-button" type="submit" name="submit"><i class="las la-search"></i></button>
                </form>
            </div>
        </div><!-- /#popup-search-box -->

        <div class="map-wrapper pt-90">
            <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d109823.40674456599!2d73.01216356759433!3d30.662650548103485!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3922b62cd8405a6d%3A0x6cce79c0f78cbfb7!2sSahiwal%2C%20Sahiwal%20District%2C%20Punjab%2C%20Pakistan!5e0!3m2!1sen!2s!4v1719362325853!5m2!1sen!2s" width="100%" height="400" frameborder="0" style="border:0;"allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
		</div><!-- /#google-map -->

        <section class="contact-section padding">
            <div class="bg-shape grey"></div>
           <div class="map"></div>
            <div class="container">
                <div class="row align-items-center">
                   <div class="col-md-6">
                        <div class="contact-details-wrap">
                            <div class="contact-title">
                                <h2>Do You Have Any Questions? <span></span></h2>
                                <p>Get in touch to discuss your employee wellbeing needs today. Please give us a call, drop us an email or fill out the contact form.</p>
                            </div>
                           <ul class="contact-details">
                                <li><i class="fas fa-map-marker-alt"></i> Avenue,<br> Sahiwal, Farid Town</li>
                                <li><i class="fas fa-envelope"></i>hello@themeaster.net <br>aimen1857@gmail.com</li>
                                <li><i class="fas fa-phone"></i>(+92)-318-4858118</li>
                            </ul>
                        </div>
                   </div>
                    <div class="col-md-6">
                        <div class="contact-form">
                            @if($message = Session::get('success'))
                                <div class = "alert alert-block p-4 border-left-warning" style = "background-color: green; opacity:1">
                                <strong>
                                    <h2 style = "color: black"> {{$message}}</h2>
                                </strong>
                                </div>
                                @endif
                            <form action="{{url('/contact')}}" method="post" id="ajax_contact" class="form-horizontal">
                                @csrf

                                <div class="contact-title">
                                    <h2>Drop Us A Line <span></span></h2>
                                </div>
                               <div class="contact-form-group">
                                   <div class="form-field">
                                       <input type="text" id="firstname" name="firstname" class="form-control" placeholder="First Name" value="{{old('firstname')}}" required >
                                       @if($errors->has('firstname'))
                                                <span class="text-danger">
                                                    {{$errors->first('firstname')}}
                                                </span>
                                                @endif
                                   </div>
                                   <div class="form-field">
                                       <input type="text" id="lastname" name="lastname" class="form-control" placeholder="Last Name" value="{{old('lastname')}}" required >
                                       @if($errors->has('lastname'))
                                                <span class="text-danger">
                                                    {{$errors->first('lastname')}}
                                                </span>
                                                @endif
                                   </div>
                                   <div class="form-field">
                                       <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{old('email')}}" required >
                                       @if($errors->has('email'))
                                                <span class="text-danger">
                                                    {{$errors->first('email')}}
                                                </span>
                                                @endif
                                   </div>
                                   <div class="form-field">
                                       <input type="text" id="phone" name="phone" class="form-control" placeholder="Phone Number" value="{{old('phone')}}" required >
                                       @if($errors->has('phone'))
                                                <span class="text-danger">
                                                    {{$errors->first('phone')}}
                                                </span>
                                                @endif
                                   </div>
                                   <div class="form-field message">
                                       <textarea id="message" name="message" cols="30" rows="4" class="form-control" placeholder="Message" value="{{old('message')}}" required></textarea>
                                       @if($errors->has('message'))
                                                <span class="text-danger">
                                                    {{$errors->first('message')}}
                                                </span>
                                                @endif

                                   </div>
                                   <div class="form-field">
                                       <button id="submit" class="default-btn" type="submit">Send Massage<span></span></button>
                                   </div>
                                </div>
                                <div id="form-messages" class="alert" role="alert"></div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.contact-section-->

        <section class="branches-section bg-grey padding">
            <div class="bg-shape white"></div>
            <div class="container">
                <div class="row branches-lists">
                    <div class="col-lg-3 col-sm-6 sm-padding">
                       <div class="branches-list">
                           <h3>Lahore (Head Office)</h3>
                           <ul>
                               <li>Gulshan Road</li>
                               <li>North , NSW 2113</li>
                               <li><a href="#">(+92)-318-4858118</a></li>
                               <li><a href="#">aimen1857@gmail.com</a></li>
                            </ul>
                       </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                            <h3>Faislabad</h3>
                          <ul>
                            <li>Gulshan Road</li>
                            <li>North , NSW 2113</li>
                            <li><a href="#">(+92)-318-4858118</a></li>
                            <li><a href="#">aimen1857@gmail.com</a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                           <h3>Karachi</h3>
                           <ul>
                            <li>Gulshan Road</li>
                            <li>North , NSW 2113</li>
                            <li><a href="#">(+92)-318-4858118</a></li>
                            <li><a href="#">aimen1857@gmail.com</a></li>
                           </ul>
                        </div>
                    </div>
                    <div class="col-lg-3 col-sm-6 sm-padding">
                        <div class="branches-list">
                           <h3>Islamabad</h3>
                           <ul>
                            <li>Gulshan Road</li>
                            <li>North , NSW 2113</li>
                            <li><a href="#">(+92)-318-4858118</a></li>
                            <li><a href="#">aimen1857@gmail.com</a></li>
                           </ul>
                        </div>
                    </div>
                </div>
            </div>
        </section><!--/.branches-section-->
@endsection
