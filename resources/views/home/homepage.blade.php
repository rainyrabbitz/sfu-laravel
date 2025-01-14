@extends('master')

@section('title', 'คณะทำงานวิชาการและวางแผนประจำฝ่ายผลิตเหมืองแม่เมาะ')

@section('content')

<div class="row" style="margin-bottom: 30%">
    <div class="container-fluid">
            <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
                <!-- Indicators -->
                <ol class="carousel-indicators">
                    <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="1"></li>
                    <li data-target="#carousel-example-generic" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" role="listbox">
                    <div class="item active">
                        <img src="{!! asset('images/01.jpg') !!}">
                        <div class="carousel-caption">
                            <h3>Welcome to</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{!! asset('images/02.jpg') !!}">
                        <div class="carousel-caption">
                            <h3>Mea Moh Mine</h3>
                        </div>
                    </div>
                    <div class="item">
                        <img src="{!! asset('images/03.jpg') !!}">
                        <div class="carousel-caption">
                            <h3>...</h3>
                        </div>
                    </div>
                </div>

                <!-- Controls -->
                <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
                    <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
                    <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
                    <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
    </div>
</div>


    @include('footer')

    @endsection
