@extends('layouts.app_2')

@section('content')
<div class="container">
        <div class="title-container"> 
                <h1>My Offers</h1>
                </div>
        @foreach($propertyArray as $property)
    <div class="row justify-content-center">

        <div class="col-md-10">
                <div class="card">
                        <div class="card-header"> 
                                        <a href="/Listing/{{$property->property_id}}">{{$property->address}}
                                        </a>
                                        </div>
                        <div class="card-body">
                                <div class="row">
                                    <div class="col-md-4">
                                            <div for="mls" class=""><strong>MLS Number:</strong> {{$property['mls']}}</div>
                                            <div for="status" class=""><strong>Status:</strong> {{$property['status']}}</div>
                                            <div for="price" class=""><strong>Asking Price:</strong>$ {{$property['price']}}</div>
                                    </div>
                                    <div class="col-md-3">
                                            <div for="bed" class=""><strong>Bedrooms:</strong> {{$property['bed']}}</div>
                                            <div for="bath" class=""><strong>Bathrooms:</strong> {{$property['bath']}}</div>
                                            <div for="year" class=""><strong>Year Built:</strong> {{$property['year']}}</div>
                                            <div for="taxes" class=""><strong>Taxes:</strong> {{$property['taxes']}}</div>
                                    </div>
                             
                            <div class="col-md-5 text-md-right">
                                        <a href="/Listing/{{$property->property_id}}">
                                    <img src="uploads\homeImages\{{$property['image']}}"  height="200"/>
                                        </a>
                            </div>
                        </div>
                        <h4>Offer Details</h4>
                        <hr>
                        <div class=" row">
                            
                                <div class="col-md-6">
                                        <label><strong>Offer Value:</strong></label> ${{$property['offerValue']}}
                                </div>
                                <div class="col-md-6">
                                        <label><strong>Deposit:</strong></label> ${{$property['offerDeposit']}}
                                </div>
                        </div>
                        <div class="form-group row mb-0">
                                <div class="col-md-12 ">
                                    <form method="POST" action="{{ route('offerDetails') }}">
                                                @csrf
                                                <input hidden name="property_id" type="number" value={{$property->id}} />
                                    <button type="submit" class="btn btn-success">
                                        {{ __('View Offers') }}
                                    </button>
                                        </form>
                            </div>
                        </div>
                    </div>
         
        </div>
    </div>
</div>
        <br>
        @endforeach
        @if (!count($propertyArray) )
        <div class="card">
        <div class="card-body">
                <div class=" row text-center">
                    <div class="col-md-12 ">
                            <div class="title-container"> 
                        <h1> No Offers Present. <br>Please browse through listings </h1>
                                                </div>
                        <a href="/Listings" class="btn btn-primary">
                            Browse For Homes
                        </a>
                    </div>
        </div>
        </div>
    </div> 
    @endif

                </div>
            </div>
        </div>
    </div>
</div>
@endsection
