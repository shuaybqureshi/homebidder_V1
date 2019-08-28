@extends('layouts.app_2')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('Create an Offer') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('storeOffer') }}">
                        @csrf
                        <div class="form-group row">
                            <label for="value" class="col-md-4 col-form-label text-md-right">{{ __('Offer Value') }}</label>

                            <div class="col-md-6">
                                <input id="value" type="text" class="form-control @error('value') is-invalid @enderror" name="value" value="{{ old('value') }}" required autocomplete="value" autofocus>

                                @error('value')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="deposit" class="col-md-4 col-form-label text-md-right">{{ __('Deposit') }}</label>

                            <div class="col-md-6">
                                <input id="deposit" type="text" class="form-control @error('deposit') is-invalid @enderror" name="deposit" value="{{ old('deposit') }}" required autocomplete="deposit" autofocus>

                                @error('deposit')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </div>
                        </div>
                        <div class="form-group row">
                            <label for="conditions" class="col-md-12 col-form-label"> {{ __('Conditions') }}</label>
                            <div class="col-md-12">
                                <textarea id = "conditions" name="conditions"  class="form-control @error('conditions') is-invalid @enderror"  rows="5" style="width: 100%">Enter Condtions</textarea>
                                @error('conditions')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                                @enderror
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Submit') }}
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
