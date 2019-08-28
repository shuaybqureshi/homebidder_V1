@extends('layouts.app_1')

@section('content')
<section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg" style="background-image: url(&quot;img/bg.jpg&quot;);">
    <div class="container hero-text text-white">
        <h2>Listings</h2>
    </div>
</section>
<section class="hotel-rooms spad">
        <div class="container">
            <div class="row">
                {{-- Start Loop --}}
                @foreach ($propertyArray as $property)
                <div class="col-lg-4 col-md-6">
                    <div class="room-items">
                            <div class="room-img set-bg" data-setbg="uploads/homeImages/{{$property['image']}}" style="background-image: url(&quot;uploads/homeImages/{{$property['image']}}&quot;);">

                        {{-- <div class="room-img set-bg" data-setbg="uploads\homeImages\{{$property['image']}}" style="background-image: url(&quot;uploads/homeImages/{{$property['image']}}&quot;);"> --}}
                        </div>
                        <div class="room-text">
                            <div class="room-details">
                                <div class="room-title">
                                    <h5>{{$property['address']}} </h5>
                                            <p>MLS® Number: {{$property['mls']}}</p>
                                </div>
                            </div>
                            <div class="room-features">
                                <div class="room-info">
                                    <div class="beds">
                                        <p>Beds</p>
                                        <img src="img/rooms/bed.png" alt="">
                                        <span>{{$property['bed']}}</span>
                                    </div>
                                    <div class="baths">
                                        <p>Baths</p>
                                        <img src="img/rooms/bath.png" alt="">
                                        <span>{{$property['bath']}}</span>
                                    </div>
                                    
                                </div>
                            </div>
                            <div class="room-price">
                                <p>For Sale</p>
                                <span>${{$property['price']}}</span>
                            </div>
                            <a href="#" class="site-btn btn-line">View Property</a>
                        </div>
                    </div>
                </div>

                @endforeach
                {{-- End Loop --}}
           
        </div>
    </section>


@endsection
