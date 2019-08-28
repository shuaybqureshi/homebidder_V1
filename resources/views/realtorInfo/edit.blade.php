@extends('layouts.app_2')

@section('content')
<div class="container">
   
    <div class="row justify-content-center mb-5">
            <div class="col-md-8">
                <div class="card">
                    <div class="card-header">{{ __('Image') }}</div>
                    <form method="POST" action="{{ route($imageRoute) }}" enctype="multipart/form-data">
                            @csrf
                    <div class="card-body">
                            <div class="form-group row text-center">
                                    <label for="profile_image" class="col-md-12 col-form-label text-md-center">{{ __('Profile Image') }}</label>
                                    @if($image)     
                                      <img src='{{$profileImageLocation}}{{$image->url}}' height='200px' style="margin: auto;"/>
                                    @endif

                                    <div class="col-md-12">
                                            <input type="file"  class=" form-control  @error('profile_image') is-invalid @enderror" name="profile_image" id="profile_image">
                                        @error('profile_image')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                            </div>
                    </div>
                    </div>
                    <div class="form-group row">
                            <div class="col-md-6 offset-md-4">
                                <button class="btn btn-primary">
                                    {{ __('Upload Image') }}
                                </button>
                            </div>
                    </div>
                
                </form>
                </div>
            </div>
        </div>
    
        <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('User Info') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('updateUserInfo') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="first_name" class="col-md-4 col-form-label text-md-right">{{ __('First Name') }}</label>

                            <div class="col-md-6">
                                <input id="first_name" type="text" class="form-control @error('first_name') is-invalid @enderror" name="first_name" value="{{ Auth::user()->first_name }}" required autocomplete="first_name" autofocus readonly>
                                @error('first_name')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="last_name" class="col-md-4 col-form-label text-md-right">{{ __('Last Name') }}</label>

                            <div class="col-md-6">
                                <input id="last_name" type="text" class="form-control @error('last_name') is-invalid @enderror" name="last_name" value="{{ Auth::user()->last_name }}" required autocomplete="last_name" autofocus readonly>

                                @error('last_name')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="user_type" class="col-md-4 col-form-label text-md-right">{{ __('User Type') }}</label>
    
                                <div class="col-md-6">
                                    <input id="user_type" type="text" class="form-control @error('user_type') is-invalid @enderror" name="user_type" value="{{ Auth::user()->user_type }}" required autocomplete="user_type" autofocus readonly>
    
                                    @error('user_type')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>


                        <div class="form-group row">
                            <label for="phone" class="col-md-4 col-form-label text-md-right">{{ __('Phone') }}</label>
                            <div class="col-md-6">
                                <input id="phone" type="text" class="form-control @error('phone') is-invalid @enderror" name="phone" value="{{ Auth::user()->phone }}" required autocomplete="phone" autofocus readonly>
                            </div>
                        </div>
                        <div class="form-group row">
                                <label for="company_name" class="col-md-4 col-form-label text-md-right">{{ __('Company Name') }}</label>
                                <div class="col-md-6">
                                    <input id="company_name" type="text" class="form-control @error('company_name') is-invalid @enderror" name="company_name" value="{{ Auth::user()->company_name }}" required autocomplete="company_name" autofocus readonly>
                                </div>
                            </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button id="btn_edit" class="btn btn-warning">
                                    {{ __('Edit') }}
                                </button>
                                <button id="btn_cancel" class="btn btn-secondary" style="display:none">
                                        {{ __('Cancel') }}
                                </button>
                                <button id="btn_submit" class="btn btn-primary" style="display:none">
                                        {{ __('Update') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

    
@endsection
