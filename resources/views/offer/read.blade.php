@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">

                <div class="card-body">
                        <div class=" row">
                                <div class="col-md-6">
                                        <label><strong>Offer Value:</strong></label> $500,000
                                </div>
                                <div class="col-md-6">
                                        <label><strong>Deposit:</strong></label> $500,000
                                </div>
                        </div>
                            
             
                <div class=" row">
                <div class="col-md-12">
                        <label><strong>Conditions:</strong></label> 
                        <p> Lorem ipsum dolor sit amet, in has maiorum philosophia, impetus dolorem mea id. Vidisse accusam adversarium est no, soluta theophrastus sit cu, meis atqui cu eum. No odio appetere imperdiet cum, dicit impedit copiosae ut mea. His ei quaestio tincidunt, no animal aperiri vim, quod minim constituam te eum. Sea te tota hendrerit, malis minim mandamus et eam. Quo principes reformidans conclusionemque te, sed quas salutandi repudiare ut.
                            </p>
                </div>
            </div>
            <div class="form-group row mb-0">
                    <div class="col-md-12 ">
                        <button type="submit" class="btn btn-success">
                            {{ __('Accept') }}
                        </button>
                        <button type="submit" class="btn btn-danger">
                                {{ __('Reject') }}
                            </button>
                    </div>
                </div>
        </div>
                </div>
            </div>
        </div>
    </div>
</div>
@endsection
