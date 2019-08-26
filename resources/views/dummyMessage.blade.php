@extends('layouts.app')

@section('content')


<div class="container"> 
    <div class="title-container"> 
    <h1>{{$title}}</h1>
    </div>
    <div class="row justify-content-center">
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
                <div class=" row text-center">
                    <div class="col-md-12 ">
                        <h3>{{$subTitle}}</h3>
                        <p> 
                            {{$para}}
                        </p>
                        <a href={{$buttonRoute}} class="btn btn-primary">
                                {{$buttonText}}
                        </a>
                    </div>
        </div>
        </div>
    </div> 

    </div>
</div>
@endsection
