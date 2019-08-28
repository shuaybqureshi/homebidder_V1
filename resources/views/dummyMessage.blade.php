@extends('layouts.app_2')

@section('content')


<div class="container"> 
   
 
    <div class="row justify-content-center">
            <div class="sq-main-title-wrapper">
                    <h1 class="sq-main-title"> {{$title}}</h1>
             </div>
        <div class="col-md-12">
        <div class="card">
        <div class="card-body">
                <div class=" row text-center">
                    <div class="col-md-12 ">
                        <h3>{{$subTitle}}</h3>
                        <p> 
                            {{$para}}
                        </p>
                        <a href={{$buttonRoute}} class="btn sq-primary-color">
                                {{$buttonText}}
                        </a>
                    </div>
        </div>
        </div>
    </div> 

    </div>
</div>
</div>
<br>
<br>
<br>
<br>
@endsection
