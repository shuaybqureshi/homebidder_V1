@extends('layouts.app_1')

@section('content')
<section class="hero-section set-bg single-property-r" data-setbg="img/bg.jpg" style="background-image: url(&quot;img/bg.jpg&quot;);">
    <div class="container hero-text text-white">
        <h2>Property Page</h2>
    </div>
</section>
<!-- Single Property Section Begin -->
<div class="single-property">
        <div class="container">
            <div class="row spad-p">
                <div class="col-lg-12">
                    <div class="property-title">
                        <h3>{{$property['address']}}, {{$property['city']}}, {{$property['postal']}}</h3>
                    <a href="#">MLS® Number: {{$property['mls']}} </a>
                    </div>
                    <div class="property-price">
                        <p>For Sale</p>
                        <span>${{$property['price']}}</span>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-12">
                    <div class="property-img owl-carousel owl-loaded owl-drag">
                        
                        
                    <div class="owl-stage-outer">
                        <div class="owl-stage" style="transform: translate3d(-1860px, 0px, 0px); transition: all 0s ease 0s; width: 5580px;">
                        {{-- <div class="owl-item cloned" style="width: 930px;"><div class="single-img">
                            <img src="img/single-property/1.jpg" alt="">
                        </div></div>
                        <div class="owl-item cloned" style="width: 930px;"><div class="single-img">
                            <img src="img/single-property/2.jpg" alt="">
                        </div></div>
                        <div class="owl-item active" style="width: 930px;"><div class="single-img">
                            <img src="img/single-property/1.jpg" alt="">
                        </div></div> --}}
                        @foreach ($images as $image)
                        <div class="owl-item active" style="width: 930px; height:400px"><div class="single-img">
                                <img src='{{$homeImageLocation}}{{$image->url}}' height="400px" />
                            </div></div>
            
            @endforeach
                       
                    </div>
                </div><div class="owl-nav"><button type="button" role="presentation" class="owl-prev"><i class="fa fa-angle-left"></i></button><button type="button" role="presentation" class="owl-next"><i class="fa fa-angle-right"></i></button></div><div class="owl-dots disabled"></div></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Single Property End -->
    <!-- Single Property Deatails Section Begin -->
    <section class="property-details">
        <div class="container">
            <div class="row sp-40 spt-40">
                <div class="col-lg-8">
                    <div class="p-ins">
                        <div class="row details-top">
                            <div class="col-lg-12">
                                <div class="t-details">
                                    <div class="register-id">
                                        <p>MLS® Number: <span> {{$property['mls']}} </span></p>
                                        {{-- <a href="#" class="btn btn-primary">Make an offer </a> --}}
                                        <form method="POST" action="{{ route('createOffer') }}">
                                            @csrf
                            <input type="number" name="property_id" value="{{$property->id}}" hidden/>
                            <button type="submit" class="btn btn-primary">
                                    {{ __('Make an Offer') }}
                            </form>
                                    </div>
                                    <div class="popular-room-features single-property">
                                       
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
                            </div>
                        </div>
                        <div class="row">
                            <div class="col-lg-12">
                                <div class="property-description">
                                    <h4>Description</h4>
                                    <p>{{$property['desc']}} </p>
                                </div>
                                <div class="property-features">
                                    <h4>Property Details</h4>
                                    <div class="property-table">
                                        <table>
                                            <tbody>
                                            <tr>
                                                <td>Beds: {{$property['bed']}}</td>
                                                <td>Baths: {{$property['bath']}}</td>
                                            </tr>
                                             <tr>
                                                <td>Year: {{$property['year']}}</td>
                                                <td>Taxes:${{$property['taxes']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Asking Price:${{$property['price']}}</td>
                                                <td>City: {{$property['city']}}</td>
                                            </tr>
                                            <tr>
                                                <td>Zip-Code: {{$property['postal']}}</td>
                                                <td>MLS® Number: {{$property['mls']}}</td>
                                            </tr>
                                        </tbody></table>
                                    </div>
                                </div>
                                
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4">
                    <div class="row pb-30">
                        <div class="col-lg-12">
                            <div class="contact-service">
                                <img src="{{$profileImageLocation}}{{$seller->image}}" alt="">
                                {{-- <img src="{{$profileImageLocation}}{{$image->url}}" src="img/single-property/small.png" alt=""> --}}
                                <p>Listed by</p>
                            <h5>{{$seller->first_name}} {{$seller->last_name}}</h5>
                                <table>
                                    <tbody><tr>
                                        <td>Phone: <span>{{$seller->phone}}</span></td>
                                    </tr>
                                    <tr>
                                        <td>Company: <span>{{$seller->company_name}} </span></td>
                                    </tr>
                                    <tr>
                                        <td>Email: <span>{{$seller->email}} </span></td>
                                    </tr>
                                </tbody></table>
                            </div>
                        </div>
                    </div>
                    
                </div>
            </div>
        </div>
    </section>
    <!-- Single Property Deatails Section End -->
    <!-- Footer Section Begin -->
@endsection
