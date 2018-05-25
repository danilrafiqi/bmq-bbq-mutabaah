@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 margins-tb">
            <div class="box">
                <div class="box-header">                        
                    <h3 class="box-title">{{ __('BMQ MUTABAAH YAUMIAH') }}</h3> 
                    <div class="box-tools">
                        <a href="{{action('MutabaahController@create')}}" class="btn btn-primary btn-sm">
                            Tambah Pengguna Baru
                        </a>
                    </div>
                </div>        
              

                    <form action="{{ url()->current() }}">
                        <div class="form-group">                          
                            <div class="input-group">
                            <input type="text" class="form-control" placeholder="Search" name="keyword">
                            <div class="input-group-append">
                                <button class="btn btn-primary" type="submit">
                                Search
                                </button>
                            </div>
                            </div>
                        </div>
                    </form>

                <div class="box-body table-responsive no-padding">
<a href="{{action('MutabaahController@downloadExcel', 'csv')}}" class="btn btn-success">CSV</a>
<a href="{{action('MutabaahController@downloadExcel', 'xls')}}" class="btn btn-success">XLS</a>
<a href="{{action('MutabaahController@downloadExcel', 'csv')}}" class="btn btn-danger">PDF</a>
                    @if (\Session::has('success'))
                      <div class="alert alert-success">
                        <p>{{ \Session::get('success') }}</p>
                      </div><br />
                     @endif
                    <table class="table table-striped">
                        <thead>
                          <tr>
                            <th>ID</th>
                            <th>NPM</th>
                            <th>Sholat Wajib</th>
                            <th>Sholat Berjamaah Awal Waktu</th>
                            <th>Sholat Subuh Berjamaah</th>
                            <th>Qiyamul Lail</th>
                            <th>Witir</th>
                            <th>Istighfar</th>
                            <th>Puasa Sunah</th>
                            <th>Tilawah</th>
                            <th>Matsurat</th>
                            <th>Sholat Duha</th>
                            <th>Baca Buku Islam</th>
                            <th>Hafalan Quran</th>
                            <th>Hafalan Hadist</th>
                            <th>Minggu</th>
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($mutabaahs as $mutabaah)
                          <tr>
                            <td>{{$mutabaah['id']}}</td>
                            <td>{{$mutabaah['npm']}}</td>
                            <td>{{$mutabaah['sholat_wajib']}}</td>
                            <td>{{$mutabaah['jamaah_awal_waktu']}}</td>
                            <td>{{$mutabaah['subuh_jamaah']}}</td>
                            <td>{{$mutabaah['qiyamul_lail']}}</td>
                            <td>{{$mutabaah['witir']}}</td>
                            <td>{{$mutabaah['istighfar']}}</td>
                            <td>{{$mutabaah['puasa_sunah']}}</td>
                            <td>{{$mutabaah['tilawah']}}</td>
                            <td>{{$mutabaah['matsurat']}}</td>
                            <td>{{$mutabaah['duha']}}</td>
                            <td>{{$mutabaah['baca_buku_islam']}}</td>
                            <td>{{$mutabaah['hafalan_quran']}}</td>
                            <td>{{$mutabaah['hafalan_hadis']}}</td>
                            <td>{{$mutabaah['minggu']}}</td>

                            <td align="right"><a href="{{action('MutabaahController@edit', $mutabaah['id'])}}" class="btn btn-warning">Edit</a></td>
                            <td align="left">
                              <form action="{{action('MutabaahController@destroy', $mutabaah['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $mutabaahs->links() !!}                        
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection