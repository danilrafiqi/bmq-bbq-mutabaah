@extends('layouts.app')

@section('content')
    @include('admin.sidebar')
        <div class="col-md-9">
            <div class="card">
                @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif                            
                <div class="card-header">Mutabaah</div>
                <div class="card-body">
                    <a href="{{action('MutabaahController@create')}}" class="btn btn-success" title="Add New User">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
                    <a href="{{action('MutabaahController@download', 'csv')}}" class="btn btn-success">CSV</a>
                    <a href="{{action('MutabaahController@download', 'xls')}}" class="btn btn-success">XLS</a>
                    <a href="{{action('MutabaahController@download', 'csv')}}" class="btn btn-danger">PDF</a>                                
                    <form method="GET" action="{{ url()->current() }}" accept-charset="UTF-8" class="form-inline my-2 my-lg-0 float-right" role="search">
                    <div class="input-group">
                        <input type="text" class="form-control" name="keyword" placeholder="Search...">
                        <span class="input-group-append">
                            <button class="btn btn-secondary" type="submit">
                                <i class="fa fa-search"></i>
                            </button>
                        </span>
                    </div>
                    </form>

                    <br/>
                    <br/>
                    <div class="table-responsive">
                        <table class="table">
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
                                <tr>
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

                                        <td>
                                            <a href="{{action('MutabaahController@edit', $mutabaah['id'])}}" >
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                        
                                            <form action="{{action('MutabaahController@destroy', $mutabaah['id'])}}" method="post"  accept-charset="UTF-8" style="display:inline">
                                                @csrf
                                                <input name="_method" type="hidden" value="DELETE">
                                                <button type="submit" class="btn btn-danger btn-sm" onclick="return confirm('Hapus ?')"><i class="fa fa-trash-o" aria-hidden="true"></i> Delete</button>
                                            </form>
                                        </td>
                                      </tr>
                                      @endforeach
                                </tr>
                            </tbody>
                        </table>
                        {!! $mutabaahs->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection