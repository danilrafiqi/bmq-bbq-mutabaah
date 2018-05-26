@extends('layouts.app')

@section('content')
    @include('admin.sidebar')
        <div class="col-md-9">
            <div class="row">        
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-google-plus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Program Studi</span>
                      <span class="info-box-number">{{$prodi}}</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-red"><i class="fa fa-google-plus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Ikhwan</span>
                      <span class="info-box-number">41,410</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
                <!-- /.col -->

                <!-- fix for small devices only -->
                <div class="clearfix visible-sm-block"></div>

                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-green"><i class="fa fa-google-plus"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Akhwat</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
            </div>


            {{$userprodi}}
        </div>
@endsection