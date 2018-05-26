@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BMQ MUTABAAH YAUMIAH') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{action('ProdiController@update', $id)}}">
                        @csrf
                        <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group row">
                            <label for="id" class="col-md-4 col-form-label text-md-right">{{ __('ID Program Studi') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="id" value="{{$prodi->id}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="nama_prodi" class="col-md-4 col-form-label text-md-right">{{ __('Nama Program Studi') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="nama_prodi" value="{{$prodi->nama_prodi}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tahun_berdiri" class="col-md-4 col-form-label text-md-right">{{ __('Tahun Berdiri') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="tahun_berdiri" value="{{$prodi->tahun_berdiri}}">
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="akreditasi" class="col-md-4 col-form-label text-md-right">{{ __('Akreditasi') }}</label>
                            <div class="col-md-6">
                                <select class="form-control" id="sel1" class="form-control" name="akreditasi">
                                    <option value="A" {{ ( $prodi->akreditasi == 'A' ) ? 'selected' : '' }}>A</option>
                                    <option value="B" {{ ( $prodi->akreditasi == 'B' ) ? 'selected' : '' }}>B</option>
                                    <option value="C" {{ ( $prodi->akreditasi == 'C' ) ? 'selected' : '' }}>C</option>
                                    <option value="-" {{ ( $prodi->akreditasi == '-' ) ? 'selected' : '' }}>-</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group row mb-0">
                            <div class="col-md-6 offset-md-4">
                                <button type="submit" class="btn btn-primary">
                                    {{ __('Kirim') }}
                                </button>
                            </div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</div>

@endsection