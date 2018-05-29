@extends('layouts.app')

@section('content')
    @include('admin.sidebar')
        <div class="col-md-10">
            <div class="row">        
                <div class="col-md-4 col-sm-6 col-xs-12">
                  <div class="info-box">
                    <span class="info-box-icon bg-aqua"><i class="fa fa-university"></i></span>

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
                    <span class="info-box-icon bg-red"><i class="fa fa-male"></i></span>

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
                    <span class="info-box-icon bg-green"><i class="fa fa-female"></i></span>

                    <div class="info-box-content">
                      <span class="info-box-text">Akhwat</span>
                      <span class="info-box-number">760</span>
                    </div>
                    <!-- /.info-box-content -->
                  </div>
                  <!-- /.info-box -->
                </div>
            </div>

            <div class="row">
              <div class="col-md-6">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Mahasiswa Program Studi</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="chart">
                      <canvas id="mhsprodi" style="height:300px"></canvas>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>
                
              </div>
              <div class="col-md-6">
                <div class="box box-info">
                  <div class="box-header with-border">
                    <h3 class="box-title">Mahasiswa Program Studi</h3>
                    <div class="box-tools pull-right">
                      <button type="button" class="btn btn-box-tool" data-widget="collapse"><i class="fa fa-minus"></i>
                      </button>
                      <button type="button" class="btn btn-box-tool" data-widget="remove"><i class="fa fa-times"></i></button>
                    </div>
                  </div>
                  <div class="box-body">
                    <div class="chart">
                      <canvas id="mhsprodi" style="height:300px"></canvas>
                    </div>
                  </div>
                  <!-- /.box-body -->
                </div>                
              </div>              
            </div>            
        </div>
            <script src="{{ asset('js/Chart.bundle.js') }}"></script>
    <script src="{{ asset('js/Chart.js') }}"></script>        
<script>



var prodi =  <?php echo json_encode($namaprodi); ?>;;
var jumlah =  {{$jumlah}};
var ctx = document.getElementById("mhsprodi");
var myChart = new Chart(ctx, {
    type: 'doughnut',
    data: {
        labels: prodi,
        datasets: [{
            label: 'Mahasiswa',
            backgroundColor:['#f48042','#65f441','#41f4dc', '#a341f4','#f44188','#f48042','#65f441','#41f4dc', '#a341f4','#f44188'],
            data: jumlah,  
            borderColor: 'rgba(54, 162, 235, 1)',
            borderWidth: 1
        }]
    },
      options: {
        responsive: true,
        legend: {
          position: 'left',
        },
        title: {
          display: true,
          text: 'Jumlah Mahasiswa Per PS'
        },
        animation: {
          animateScale: true,
          animateRotate: true
        }
      }
});
</script>
@endsection