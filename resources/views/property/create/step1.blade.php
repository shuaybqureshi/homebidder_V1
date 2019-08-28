@extends('layouts.app_2')

@section('content')
<div class="container"> 
    <div class="title-container"> 
     <h1> Upload Listing</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Property Info') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('step1store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="address" class="col-md-4 col-form-label text-md-right">{{ __('Address') }}</label>

                            <div class="col-md-6">
                                <input id="address" type="text" class="form-control @error('address') is-invalid @enderror" name="address" value="{{ old('address') }}" required autocomplete="address" autofocus>

                                @error('address')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="price" class="col-md-4 col-form-label text-md-right">{{ __('Listing Price') }}</label>

                            <div class="col-md-6">
                                <input id="price" type="number" class="form-control @error('price') is-invalid @enderror" name="price" value="{{ old('price') }}" required autocomplete="price" autofocus>

                                @error('price')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="mls" class="col-md-4 col-form-label text-md-right">{{ __('MLS® Number') }}</label>

                            <div class="col-md-6">
                                <input id="mls" type="text" class="form-control @error('mls') is-invalid @enderror" name="mls" value="{{ old('mls') }}" required autocomplete="mls" autofocus>
                                @error('mls')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="city" class="col-md-4 col-form-label text-md-right">{{ __('City') }}</label>
    
                                <div class="col-md-6">
                                    <input id="city" type="text" class="form-control @error('city') is-invalid @enderror" name="city" value="{{ old('city') }}" required autocomplete="mls" autofocus>
    
                                    @error('city')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="postal" class="col-md-4 col-form-label text-md-right">{{ __('Postal Code') }}</label>
        
                                    <div class="col-md-6">
                                        <input id="postal" type="text" class="form-control @error('postal') is-invalid @enderror" name="postal" value="{{ old('postal') }}" required autocomplete="postal" autofocus>
        
                                        @error('postal')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>


                                

                                

                      

                       

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn sq-primary-color">
                                    {{ __('Proceed to Step 2') }}
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
