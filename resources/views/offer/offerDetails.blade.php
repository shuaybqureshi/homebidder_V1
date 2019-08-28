@extends('layouts.app_2')

@section('content')
<div class="container">
        <div class="title-container"> 
                <h1 class="sq-main-title">Property Details</h1>
        </div>
    <div class="row justify-content-center">
            <div class="col-md-12">

             <div class="card">
                <div class="card-header">{{ $property->address }}</div>
                <div class="card-body">
                        <div class="row">
 
                                <div class="col-md-3">
                                        <div for="mls" class=""><strong>MLS Number:</strong> {{$property['mls']}}</div>
                                        <div for="status" class=""><strong>Status:</strong> {{$property['status']}}</div>
                                        <div for="price" class=""><strong>Asking Price:</strong> {{$property['price']}}</div>
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
    </div>
</div>
<br>

<div class="row justify-content-center">
        <div class="title-container"> 
                <h1 class="sq-main-title">Offer History</h1>
        </div>
        <div class="col-md-12">
<?php $i=1; ?>
                @foreach ($offersArray as $offer)

                <div class="card">
                <div class="card-header">Offer #{{$i++}}</div>
                    <div class="card-body">
                            <div class=" row">
                                    <div class="col-md-6">
                                            <label><strong>Offer Value:</strong></label> ${{$offer->value}} <br>
                                            <label><strong>Offer Status:</strong></label> {{$offer->status}}
                                    </div>
                                    <div class="col-md-6">
                                            <label><strong>Deposit:</strong></label> ${{$offer->deposit}}
                                    </div>
                            </div>
                                
                 
                    <div class=" row">
                    <div class="col-md-12">
                            <label><strong>Conditions:</strong></label> 
                            <p> {{$offer->conditions}}</p>
                    </div>
               
                </div>
        </div>
</div>
                 <br>
                @endforeach
            
    </div>
</div>
</div>
@endsection
