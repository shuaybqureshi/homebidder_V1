@extends('layouts.app')

@section('content')
<div class="container">
      @if(session()->has('message'))
      <div class="alert alert-success">
            {{ session()->get('message') }}
        </div>
    @endif
    <div class="row justify-content-center">
            <div class="col-md-8">
                    
            <div class="card">
                    <div class="card-header">{{ __('User Profile') }}</div>
                    <div class="card-body">
                            @if($image)     
                            
                    <div class=" row text-center">
                                {{-- <img src="uploads/profileImages/profile-image-102.jpg" height="200px" style="margin: auto;"> --}}
                            <img src="{{$profileImageLocation}}{{$image->url}}" height='200px' style="margin: auto;"/>
                            <br>
                    </div>
                    @endif
                    <div class="user-card-details-container text-center">
                            <p><strong>Name: </strong>{{ $user->first_name}} {{$user->last_name}}</p> 
                            <p><strong>User Type: </strong>{{ $user->user_type}} </p>
                            <p><strong>Phone: </strong>{{ $user->phone}} </p>
                            <p><strong>Company Name: </strong>{{ $user->company_name}} </p>
                            <p><strong>Email: </strong> {{ $user->email}} </p>
                    </div>
                    
                    </div>
                   
                </div>
            </div>
        </div>
 
</div>
@endsection
