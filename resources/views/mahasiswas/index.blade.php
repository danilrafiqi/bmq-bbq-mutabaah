@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 margins-tb">
            <div class="box">
                <div class="box-header">                        
                    <h3 class="box-title">{{ __('BMQ MUTABAAH YAUMIAH') }}</h3> 
                    <div class="box-tools">
                        <a href="{{action('MahasiswaController@create')}}" class="btn btn-primary btn-sm">
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

                          @foreach($mahasiswas as $mahasiswa)
                          <tr>
                            <td>{{$mahasiswa['id']}}</td>
                            <td>{{$mahasiswa['npm']}}</td>
                            <td>{{$mahasiswa['sholat_wajib']}}</td>
                            <td>{{$mahasiswa['jamaah_awal_waktu']}}</td>
                            <td>{{$mahasiswa['subuh_jamaah']}}</td>
                            <td>{{$mahasiswa['qiyamul_lail']}}</td>
                            <td>{{$mahasiswa['witir']}}</td>
                            <td>{{$mahasiswa['istighfar']}}</td>
                            <td>{{$mahasiswa['puasa_sunah']}}</td>
                            <td>{{$mahasiswa['tilawah']}}</td>
                            <td>{{$mahasiswa['matsurat']}}</td>
                            <td>{{$mahasiswa['duha']}}</td>
                            <td>{{$mahasiswa['baca_buku_islam']}}</td>
                            <td>{{$mahasiswa['hafalan_quran']}}</td>
                            <td>{{$mahasiswa['hafalan_hadis']}}</td>
                            <td>{{$mahasiswa['minggu']}}</td>

                            <td align="right"><a href="{{action('MahasiswaController@edit', $mahasiswa['id'])}}" class="btn btn-warning">Edit</a></td>
                            <td align="left">
                              <form action="{{action('MahasiswaController@destroy', $mahasiswa['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $mahasiswas->links() !!}                        
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection