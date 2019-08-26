@extends('layouts.app')

@section('content')
<div class="container">
        <div class="title-container"> 
                <h1>Offer Details</h1>
        </div>
    <div class="row justify-content-center">
            <div class="col-md-10">
             <div class="card">
                <div class="card-header">
                <a href="/Listing/{{$property->property_id}}"> 
                        {{ $property->address }}
                        </a>
                        </div>
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
                                        <a href="/Listing/{{$property->property_id}}">
                                        <img src="uploads\homeImages\{{$property['image']}}"  height="200"/>
                                        </a>
                        </div>
                </div>
                
                </div>
            </div>
    </div>
</div>
@if (count ($offersActiveArray))
    <h1 style="text-align:center"> Active  Offers</h1>
@endif
<?php $i=1; ?>
    <div class="row justify-content-center">
                <div class="col-md-10">
    @foreach ($offersActiveArray as $offer)
    <div class="card">
                <div class="card-header">Offer #{{$i++}}</div>
                    <div class="card-body">
                            <div class=" row">
                                    <div class="col-md-6">
                                            <label><strong>Offer Value:</strong></label> ${{$offer->value}}
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
                <div class="row">
                               <div class="col-md-12"> 
                                  <div class="row">

                                        <div class="col-md-6">
                                                        <label><strong>Name: </strong></label>  <a href ="/user?userid={{$offer->user_id}}" >{{$offer->buyerName}}  </a><br>
                                                        <label><strong>Email: </strong></label> {{$offer->buyerEmail}}
                                                </div>
                                                <div class="col-md-6">
                                                        <label><strong>Phone:</strong></label> {{$offer->buyerPhone}}
                                                </div>
                                        </div>
                               </div>
                        </div>
                        <div class="form-group row mb-0">
                                        <div class="col-md-12 ">
                                                        <form method="POST">
                                                                        @csrf
                                <input type="number" name="offer_id" value="{{$offer->id}}"  hidden />
                                        <input  class="btn btn-success"  type="submit" formaction="/acceptOffer" value="Accept Offer">
                                        <input  class="btn btn-danger"  type="submit" formaction="/rejectOffer" value="Reject Offer">
                                                        </form>      
                                </div>
                                    </div>
        </div>
                </div>
                 <br>
                 <br>
    @endforeach
</div>
</div>
@if (count ($offersInActiveArray))
<h1 style="text-align:center"> In Active  Offers </h1>
@endif

<?php $i=1; ?>
<div class="row justify-content-center">
            <div class="col-md-10">
@foreach ($offersInActiveArray as $offer)
<div class="card">
            <div class="card-header">Offer #{{$i++}}</div>
                <div class="card-body">
                        <div class=" row">
                                <div class="col-md-6">
                                        <label><strong>Offer Value:</strong></label> ${{$offer->value}} <br>
                                        <label><strong>Status:</strong></label>{{$offer->status}}
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
            <hr>
            <div class="row">
                           <div class="col-md-12"> 
                              <div class="row">
                                    <div class="col-md-6">
                                                    <label>
                                                    <strong>Name: </strong></label>  <a href ="/user?userid={{$offer->user_id}}" >{{$offer->buyerName}}  </a><br>
                                                    <label><strong>Email: </strong></label> {{$offer->buyerEmail}}
                                            </div>
                                            <div class="col-md-6">
                                                    <label><strong>Phone:</strong></label> {{$offer->buyerPhone}}
                                            </div>
                                    </div>
                           </div>
                    </div>
    </div>
            </div>
             <br>
             <br>
@endforeach

   

<br>
@if ( (!count ($offersInActiveArray)) && (!count($offersActiveArray)))

<div class="card">
                    <div class="card-body">
                    <div class=" row">
                    <div class="col-md-12">
                            
                            <p> You don't have any offers</p>
                    </div>
                    
                </div>
                        
        </div>
                </div>

                @endif
                 <br>
                 <br>
    </div>
</div>

@endsection
