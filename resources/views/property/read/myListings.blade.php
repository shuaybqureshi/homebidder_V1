@extends('layouts.app')

@section('content')


<div class="container"> 
    <div class="title-container"> 
    <h1>My Listing</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
            {{-- <div class="card">
                <div class="card-header">{{ __('30 Greehedges court') }}</div>
                <div class="card-body">
                        <div class="row">
 
                            <div class="col-md-3">
                                <div for="mls" class=""><strong>MLS:</strong> N1212</div>
                                <div for="status" class=""><strong>Status:</strong> Draft</div>
                                <div for="price" class=""><strong>Asking Price:</strong> $540,000</div>
                            </div>
                        <div class="col-md-3">
                                <div for="bed" class=""><strong>Bedrooms:</strong> 3</div>
                                <div for="bath" class=""><strong>Bathrooms:</strong> 4</div>
                                <div for="year" class=""><strong>Year Built:</strong> 1999</div>
                                <div for="taxes" class=""><strong>Taxes:</strong> $2,800</div>
                        </div>
                        <div class="col-md-6 text-md-right">
                                <img src="uploads\homeImages\default.png"  height="200"/>
                        </div>
                </div>
                </div>
            </div> --}}
          
            @foreach ($propertyArray as $property)
            <br>
            <div class="card">
                    <div class="card-header">{{$property['address']}}</div>
                    <div class="card-body">
                            <div class="row">
                                <div class="col-md-3">
                                    <div for="mls" class=""><strong>MLS Number:</strong> {{$property['mls']}}</div>
                                    <div for="status" class=""><strong>Status:</strong> {{$property['status']}}</div>
                                    <div for="price" class=""><strong>Asking Price:</strong> {{$property['price']}}</div>
                                <a href="/editListing/{{$property->id}}" class="btn btn-primary" > Edit Listing</a>
                                <form method="POST" action="{{ route('deleteListing') }}">
                                        @csrf
                                <input type="number" name="property_id" value="{{$property->id}}" hidden />
                                        <button class="btn btn-danger" > Delete Listing</button>
                                </form>
                                </div>
                            <div class="col-md-3">
                                    <div for="bed" class=""><strong>Bedrooms:</strong> {{$property['bed']}}</div>
                                    <div for="bath" class=""><strong>Bathrooms:</strong> {{$property['bath']}}</div>
                                    <div for="year" class=""><strong>Year Built:</strong> {{$property['year']}}</div>
                                    <div for="taxes" class=""><strong>Taxes:</strong> {{$property['taxes']}}</div>
                            </div>

                            <div class="col-md-6 text-md-right">
                                    <img src="uploads\homeImages\{{$property['image']}}"  height="200"/>
                            </div>
                    </div>
                    </div>
                </div>
        @endforeach
        @if (!count($propertyArray) )
        <div class="card">
        <div class="card-body">
                <div class=" row text-center">

                    <div class="col-md-12 ">
                        <h1> You have no listings</h1>
                        <a href="/createListing" class="btn btn-primary">
                            Upload Listing
                        </a>
                    </div>
        </div>
        </div>
    </div> 
       @endif

    </div>
</div>
@endsection
