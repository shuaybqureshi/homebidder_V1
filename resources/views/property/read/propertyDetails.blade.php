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
                        <div class="card-header">{{ __('Buyer Info') }}</div>
                        <div class="card-body">
                        <div class="row">
                        <div class="col-md-12 text-md-left">
                                        <div class="col-md-6 text-md-left">
                                                        <div>
                                                          <strong>Name :</strong>  <a href="/user?userid={{$seller->id}}" > {{$seller->first_name}} {{$seller->last_name}}
                                                        </a>
                                                        </div>
                                                        <div><strong>Company:</strong> {{$seller->company_name}}</div>
                                                        <div><strong>Phone:</strong> {{$seller->phone}}</div>
                                        </div>
                        </div>                
                        </div>
                        </div>
                        </div>
        <br>
<div class="card">
<div class="card-header">{{ __('Action') }}</div>
<div class="card-body">
<div class="row">
<div class="col-md-12 text-md-left">
        <form method="POST" action="{{ route('createOffer') }}">
                @csrf
<input type="number" name="property_id" value="{{$property->id}}" hidden/>
<button type="submit" class="btn btn-primary">
        {{ __('Make an Offer') }}
</form>
</button>                                
</div>                
</div>
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
