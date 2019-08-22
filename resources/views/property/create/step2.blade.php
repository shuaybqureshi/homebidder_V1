@extends('layouts.app')

@section('content')
<div class="container"> 
    <div class="title-container"> 
    <h1> Step 2</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Property Info') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('step2store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="bed" class="col-md-4 col-form-label text-md-right">{{ __('Bedrooms') }}</label>

                            <div class="col-md-6">
                                <input id="bed" type="number" class="form-control @error('bed') is-invalid @enderror" name="bed" value="{{ old('bed') }}" required autocomplete="bed" autofocus>

                                @error('bed')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="bath" class="col-md-4 col-form-label text-md-right">{{ __('Bathrooms') }}</label>

                            <div class="col-md-6">
                                <input id="bath" type="number" class="form-control @error('bath') is-invalid @enderror" name="bath" value="{{ old('bath') }}" required autocomplete="bath" autofocus>

                                @error('bath')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="year" class="col-md-4 col-form-label text-md-right">{{ __('Year') }}</label>

                            <div class="col-md-6">
                                <input id="year" type="number" class="form-control @error('year') is-invalid @enderror" name="year" value="{{ old('year') }}" required autocomplete="year" autofocus>
                                @error('year')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row">
                                <label for="taxes" class="col-md-4 col-form-label text-md-right">{{ __('Taxes') }}</label>
    
                                <div class="col-md-6">
                                    <input id="taxes" type="number" class="form-control @error('taxes') is-invalid @enderror" name="taxes" value="{{ old('taxes') }}" required autocomplete="year" autofocus>
    
                                    @error('taxes')
                                        <span class="invalid-feedback" role="alert">
                                            <strong>{{ $message }}</strong>
                                        </span>
                                    @enderror
                                </div>
                            </div>

                            <div class="form-group row">
                                    <label for="desc" class="col-md-12 col-form-label"> {{ __('Description') }}</label>
                                    <div class="col-md-12">
                                    <textarea id = "desc" name="desc"  class="form-control @error('desc') is-invalid @enderror"  rows="5" style="width: 100%">Enter Home Description</textarea>
                                    @error('desc')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                                </div>
                        </div>


                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Proceed to Step 3') }}
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
