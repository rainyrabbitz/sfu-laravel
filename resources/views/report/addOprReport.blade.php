@extends('master')

@section('title', 'รายงานผลการดำเนินงาน อผม. (OPR)')

@section('content')


    @if (count($errors) > 0)
        <div class="alert alert-danger">
            <strong>Whoops!</strong> There were some problems with your input.<br><br>
            <ul>
                @foreach ($errors->all() as $error)
                    <li>{{ $error }}</li>
                @endforeach
            </ul>
        </div>
    @endif

    <div class="container">
        <div class="col-md-12 text-center">
            <h2>
                <p style="color: #5c7cef">เพิ่มไฟล์ของ
                    <span class="header2"> รายงานผลการดำเนินงาน อผม.<small> (Organization Performance
                            Report: OPR)</small></span></p>
            </h2>
        </div>
        <div class="col-md-12">
            <div class="col-md-1"></div>
            <div class="col-md-10" style="height: 2px; background-color: #c0c0c0; margin-bottom: 50px"></div>
        </div>
        <form class="col-md-offset-3 col-md-6 text-center" action="/oprReport" method="post" enctype="multipart/form-data">
            {{--always required csrf_token--}}
            <input type="hidden" name="_token" value="{{ csrf_token() }}">

            <div class="form-group">
                <input type="file" name="file" class="form-control input-lg">
            </div>

            <div class="form-group">
                <select class="form-control input-lg" name="period">
                    <option value="1">6 เดือน</option>
                    <option value="2">สิ้นปี</option>
                </select>
            </div>

            <div class="form-group">
                <select class="form-control input-lg" name="year">
                    <option value="2555">2555</option>
                    <option value="2556">2556</option>
                    <option value="2557">2557</option>
                    <option value="2558">2558</option>
                    <option value="2559">2559</option>
                    <option value="2560">2560</option>
                    <option value="2561">2561</option>
                    <option value="2562">2562</option>
                    <option value="2563">2563</option>
                    <option value="2564">2564</option>
                    <option value="2565">2565</option>
                </select>
            </div>

            <div class="form-group">
                <input type="submit" value="เพิ่มประกาศ" class="btn btn-default">
            </div>
        </form>

    </div>


    @include('footer')

@endsection