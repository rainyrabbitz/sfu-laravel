@extends('master')

@section('title', 'ติดตามความก้าวหน้าการประเมินผลการดำเนินงานของ อผม.')

@section('content')

    <div class="container">
        <div class="col-lg-12 well">
            <h2>
                <p class="header">ติดตาม<span class="header2">ความก้าวหน้าการประเมินผลการดำเนินงานของ อผม. เทียบกับเกณฑ์</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>

        <div class="col-lg-12 text-center" style="margin-bottom: 30%">
            <div class="col-md-offset-3 col-md-6 panel-group" id="accordion">
                @foreach($years as $year)
                <div class="panel panel-default">
                    <div class="panel-heading">
                        <h4 class="panel-title">
                            <a data-toggle="collapse" data-parent="#accordion" href="#collapse{{$year}}">ประจำปี {{$year}}</a>
                        </h4>
                    </div>
                    <div id="collapse{{$year}}" class="panel-collapse collapse">
                        @foreach($tracks as $track)
                            @if($track->year == $year)
                                @if($track->period == 1)
                                <div class="panel-body">
                                    <a href="/uploads/TrackPerformances-{{$year}}/1/{{$track->file_path}}">6 เดือน</a>
                                </div>
                                @elseif($track->period == 2)
                                    <div class="panel-body">
                                        <a href="/uploads/TrackPerformances-{{$year}}/2/{{$track->file_path}}">สิ้นปี</a>
                                    </div>
                                    @endif
                            @endif
                            @endforeach
                    </div>
                </div>
                @endforeach
            </div>
        </div>

    </div>


    @include('footer')

@endsection
