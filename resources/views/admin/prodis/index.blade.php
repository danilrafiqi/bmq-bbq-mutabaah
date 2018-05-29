@extends('layouts.app')

@section('content')
    @include('admin.sidebar')
        <div class="col-md-10">
            <div class="card">
                @if (\Session::has('success'))
                  <div class="alert alert-success">
                    <p>{{ \Session::get('success') }}</p>
                  </div><br />
                 @endif                            
                <div class="card-header">Program Studi</div>
                <div class="card-body">
                    <a href="{{action('ProdiController@create')}}" class="btn btn-success" title="Add New User">
                        <i class="fa fa-plus" aria-hidden="true"></i> Add New
                    </a>
<!--                     <a href="{{action('MutabaahController@download', 'csv')}}" class="btn btn-success">CSV</a>
                    <a href="{{action('MutabaahController@download', 'xls')}}" class="btn btn-success">XLS</a>
                    <a href="{{action('MutabaahController@download', 'csv')}}" class="btn btn-danger">PDF</a> -->                                
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
                                    <th>Id Program Studi</th>
                                    <th>Nama Program Studi</th>
                                    <th>Tahun Berdiri</th>
                                    <th>Akreditasi</th>    
                                    <th colspan="2">Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr>
                                      @foreach($prodis as $prodi)
                                      <tr>
                                        <td>{{$prodi['id']}}</td>
                                        <td>{{$prodi['nama_prodi']}}</td>
                                        <td>{{$prodi['tahun_berdiri']}}</td>
                                        <td>{{$prodi['akreditasi']}}</td>
                                        <td>
                                            <a href="{{action('ProdiController@edit', $prodi['id'])}}" >
                                                <button class="btn btn-primary btn-sm"><i class="fa fa-pencil-square-o" aria-hidden="true"></i> Edit</button>
                                            </a>
                                        
                                            <form action="{{action('ProdiController@destroy', $prodi['id'])}}" method="post"  accept-charset="UTF-8" style="display:inline">
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
                        {!! $prodis->links() !!}
                    </div>
                </div>
            </div>
        </div>
@endsection