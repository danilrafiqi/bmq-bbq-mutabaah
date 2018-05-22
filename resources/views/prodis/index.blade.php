@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row">
        <div class="col-md-12 margins-tb">
            <div class="box">
                <div class="box-header">                        
                    <h3 class="box-title">{{ __('BMQ MUTABAAH YAUMIAH') }}</h3> 
                    <div class="box-tools">
                        <a href="{{action('ProdiController@create')}}" class="btn btn-primary btn-sm">
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
                            <th>Id Program Studi</th>
                            <th>Nama Program Studi</th>
                            <th>Tahun Berdiri</th>
                            <th>Akreditasi</th>    
                            <th colspan="2">Action</th>
                          </tr>
                        </thead>
                        <tbody>

                          @foreach($prodis as $prodi)
                          <tr>
                            <td>{{$prodi['id']}}</td>
                            <td>{{$prodi['nama_prodi']}}</td>
                            <td>{{$prodi['tahun_berdiri']}}</td>
                            <td>{{$prodi['akreditasi']}}</td>
                            <td align="right"><a href="{{action('ProdiController@edit', $prodi['id'])}}" class="btn btn-warning">Edit</a></td>
                            <td align="left">
                              <form action="{{action('ProdiController@destroy', $prodi['id'])}}" method="post">
                                @csrf
                                <input name="_method" type="hidden" value="DELETE">
                                <button class="btn btn-danger" type="submit">Delete</button>
                              </form>
                            </td>
                          </tr>
                          @endforeach
                        </tbody>
                    </table>
                    {!! $prodis->links() !!}                        
                </div>                
            </div>
        </div>
    </div>
</div>
@endsection