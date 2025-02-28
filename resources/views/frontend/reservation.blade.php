@extends('frontend.layouts.main')
@section('title', 'Reservation')
@section('main-container')

<section class="booking-section bg-grey padding">
    <div class="container">
        <div class="row align-items-center">
            <div class="col-lg-6 sm-padding">
                <div class="section-heading">
                    <h4>Reservation</h4>
                    <h2>Enjoy Our Tasty Food <br>Reserve <span>Your Table</span></h2>
                    <p>The restaurants in Hangzhou also catered to many northern Chinese who had fled south from Kaifeng during the Jurchen invasion of the 1120s, while it is also known that many restaurants were run by families.</p>
                    <a href="#" class="default-btn">Contact Us <span></span></a>
                </div>
            </div>
            <div class="col-lg-6 sm-padding">
                <div class="booking-form">
                    <h3>Reservation <span></span></h3>
                    @if(session('success'))
                        <div class="alert alert-success">
                            <strong>{{ session('success') }}</strong>
                        </div>
                    @endif
                    <form action="{{ url('/reservation') }}" method="post" class="form-horizontal">
                        @csrf
                        <div class="booking-form-group">
                            <div class="form-padding">
                                <input type="text" id="name" name="name" class="form-control" placeholder="Name" value="{{ old('name') }}" required>
                                @error('name')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-padding">
                                <input type="email" id="email" name="email" class="form-control" placeholder="Email" value="{{ old('email') }}" required>
                                @error('email')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-padding">
                                <select class="form-select" id="person" name="person" required>
                                    <option value="2" {{ old('person') == '2' ? 'selected' : '' }}>2 Person</option>
                                    <option value="3" {{ old('person') == '3' ? 'selected' : '' }}>3 Person</option>
                                    <option value="4" {{ old('person') == '4' ? 'selected' : '' }}>4 Person</option>
                                    <option value="5" {{ old('person') == '5' ? 'selected' : '' }}>5 Person</option>
                                </select>
                                @error('person')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-padding">
                                <input class="form-control" type="date" id="date" name="date" value="{{ old('date') }}" required>
                                @error('date')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-padding">
                                <textarea id="message" name="message" cols="30" rows="6" class="form-control message" placeholder="Message" required>{{ old('message') }}</textarea>
                                @error('message')
                                    <span class="text-danger">{{ $message }}</span>
                                @enderror
                            </div>
                            <div class="form-field">
                                <button class="default-btn" type="submit">Reservation<span></span></button>
                            </div>
                         </div>
                     </form>
                    </div>
            </div>
        </div>
    </div>
</section>

@if(session('success'))
    <script>
        setTimeout(function() {
            location.reload(); // Reload the page after 2 seconds
        }, 2000);
    </script>
@endif

@endsection
