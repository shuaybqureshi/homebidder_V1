@extends('layouts.app')

@section('content')


<div class="container"> 
  <div class="title-container"> 
    <h1>{{$property['address']}}</h1>
    </div>
    <div class="row justify-content-center">
            <div class="col-md-12">
                    @foreach ($images as $image)
            <img src='{{$homeImageLocation}}{{$image->url}}' height='200px' style="margin: auto;"/>

@endforeach
            </div>
        </div> 
        <br>

        <div class="card">
                <div class="card-header">{{ __('Property Info') }}</div>
                <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 text-md-left">
                            <p> {{$property->desc}}</p>
                        </div>
                </div>                
                </div>
        </div>
<br>
        <div class="card">
                <div class="card-header">{{ __('Property Details') }}</div>
                <div class="card-body">
                        <div class="row">
                        <div class="col-md-6 text-md-left">
                                <div><strong>Asking Price:</strong> {{$property->price}}</div>
                                <div><strong>Status:</strong> {{$property->status}}</div>
                                <div><strong>MLS:</strong> {{$property->mls}}</div>
                                <div><strong>City:</strong> {{$property->city}}</div>
                                <div><strong>Zip-Code:</strong> {{$property->postal}}</div>
                        </div>
                </div>                
                </div>
        </div>
        <br>
        <div class="card">
                <div class="card-header">{{ __('Addtional Details') }}</div>
                <div class="card-body">
                        <div class="row">
                        <div class="col-md-6 text-md-left">
                                <div><strong>Bedrooms:</strong> {{$property->bed}}</div>
                                <div><strong>Bathrooms:</strong> {{$property->bath}}</div>
                                <div><strong>Year:</strong> {{$property->year}}</div>
                                <div><strong>Taxes:</strong> {{$property->taxes}}</div>
                        </div>
                </div>                
                </div>
        </div>
      
</div>
@endsection
