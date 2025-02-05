@extends('master')

@section('title', 'อัพเดทไฟล์')

@section('content')


    <div class="container">
        <div class="col-lg-12 well">
            <h2>
                <p class="header">อัพเดท<span class="header2">ไฟล์</span></p>
            </h2>
        </div>
        <div class="col-md-12" style="height: 2px; background-color: #9479bd; margin-bottom: 50px"></div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/commands/add" class="btn btn-primary btn-lg btn-block">คำสั่งแต่งตั้งคณะทำงาน</a>
                {{--<button type="button" class="btn btn-primary btn-lg btn-block">คำสั่งแต่งตั้งคณะทำงาน</button>--}}
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/responsibility/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">ภารกิจหน้าที่</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/announces/add" class="btn btn-primary btn-lg btn-block">ประกาศนโยบายและแผนการดำเนินงานของ อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/progress/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">ผลความก้าวหน้าของนโยบายและแผนการดำเนินงานของ อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/performances/add" class="btn btn-primary btn-lg btn-block">ข้อปฏิบัติการประเมินผลการดำเนินงานของ อผม. (PA) รูปเล่ม</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/track-performance/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">ติดตามความก้าวหน้าการประเมินผลการดำเนินงานของ อผม. (PA)</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/plans/add" class="btn btn-primary btn-lg btn-block">แผนปฏิบัติการ อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/board-command/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">คำสั่งคณะกรรมการ</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-plan/add" class="btn btn-primary btn-lg btn-block">แผนการประเมินผลการบริหารความเสี่ยงและการควบคุมภายใน อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-progress/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">รายงานความก้าวหน้าแผนบริหารความเสี่ยง อผม. ประจำเดือน</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/risk-management/add" class="btn btn-primary btn-lg btn-block">รายงานการบริหารความเสี่ยง อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/control-report/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">รายงานการควบคุมภายใน อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/meetingReport/add" class="btn btn-primary btn-lg btn-block">รายงานการประชุมคณะกรรมการ</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/oprReport/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">รายงานผลการดำเนินงาน อผม. (OPR)</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/sfu-report/add" class="btn btn-primary btn-lg btn-block">รายงานการประชุม ควฝผ-อผม.</a>
            </div>
        </div>
        <div class="col-md-12 text-center" style="margin-top: 30px">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <a href="/csr-activity/add" class="btn btn-secondary btn-lg btn-block" style="background-color: #B0BEC5; color: #ffffff">กองจิตอาสา</a>
            </div>
        </div>
    </div>


    @include('footer')

@endsection