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
                    <form method="POST" action="{{ route('step3store') }}" enctype="multipart/form-data">
                        @csrf

                        <div class="form-group row text-center">
                            <label for="image-1" class="col-md-12 col-form-label text-md-center">{{ __('image-1') }}</label>
                            <div class="col-md-12">
                                <input type="file"  class=" form-control  @error('image-1') is-invalid @enderror" name="image-1" id="image-1">
                            @error('image-1')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>
                        <div class="form-group row text-center">
                            <div class="col-md-12">
                                <input type="file"  class=" form-control  @error('image-2') is-invalid @enderror" name="image-2" id="image-2">
                                @error('image-2')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-12">
                                <input type="file"  class=" form-control  @error('image-3') is-invalid @enderror" name="image-3" id="image-3">
                                @error('image-3')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-12">
                                <input type="file"  class=" form-control  @error('image-3') is-invalid @enderror" name="image-4" id="image-4">
                                @error('image-4')
                                <span class="invalid-feedback" role="alert">
                                    <strong>{{ $message }}</strong>
                                </span>
                            @enderror
                            </div>
                        </div>

                        <div class="form-group row text-center">
                            <div class="col-md-12">
                                <input type="file"  class=" form-control  @error('image-5') is-invalid @enderror" name="image-5" id="image-5">
                                @error('image-5')
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
