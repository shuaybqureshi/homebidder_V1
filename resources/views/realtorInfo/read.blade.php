@extends('layouts.app_2')

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
                                <img class="sq-profile-pic-wrapper" src="{{$profileImageLocation}}{{$image->url}}" height='200px' style="margin: auto;"/>
                                <br>
                    </div>
                    @endif
                    <div class="user-card-details-container text-center">
                            <p><strong>Name: </strong>{{ Auth::user()->first_name}} {{Auth::user()->last_name}}</p> 
                            <p><strong>User Type: </strong>{{ Auth::user()->user_type}} </p>
                            <p><strong>Phone: </strong>{{ Auth::user()->phone}} </p>
                            <p><strong>Company Name: </strong>{{ Auth::user()->company_name}} </p>
                            <p><strong>Email: </strong> {{ Auth::user()->email}} </p>
                    </div>
                    
                    </div>
                    <div class="form-group row justify-content-center">
                                <a href="/editUserInfo" class="btn btn-warning">
                                    {{ __('Edit Info') }}
                                </a>
                    </div>
                </div>
            </div>
        </div>
 
</div>
@endsection
