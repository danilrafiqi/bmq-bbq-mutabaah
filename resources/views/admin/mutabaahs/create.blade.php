@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BMQ MUTABAAH YAUMIAH') }}</div>

                <div class="card-body">
                    <form method="POST" action="{{ route('mutabaah.store') }}">
                        @csrf

                        <div class="form-group row">
                            <label for="npm" class="col-md-4 col-form-label text-md-right">{{ __('NPM') }}</label>
                            <div class="col-md-6">
                                <input type="text" class="form-control" name="npm" value="{{$npm}}" readonly="">
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="sholat_wajib" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Wajib') }}</label>
                            <div class="col-md-6">
                                <input id="sholat_wajib" type="text" data-slider-min="0" data-slider-max="35" data-slider-step="1" data-slider-value="0" name="sholat_wajib" />
                                <span id="">Jumlah : 
                                    <span id="sholat_wajib_val">0</span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="jamaah_awal_waktu" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Jamaah Awal Waktu') }}</label>
                            <div class="col-md-6">
                                <input id="jamaah_awal_waktu" type="text" data-slider-min="0" data-slider-max="35" data-slider-step="1" data-slider-value="0" name="jamaah_awal_waktu" />
                                <span id="">Jumlah : 
                                    <span id="jamaah_awal_waktu_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subuh_jamaah" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Subuh Berjamaah') }}</label>
                            <div class="col-md-6">
                                <input id="subuh_jamaah" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="subuh_jamaah" />
                                <span id="">Jumlah : 
                                    <span id="subuh_jamaah_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="qiyamul_lail" class="col-md-4 col-form-label text-md-right">{{ __('Qiyamul Lail') }}</label>
                            <div class="col-md-6">
                                <input id="qiyamul_lail" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="qiyamul_lail" />
                                <span id="">Jumlah : 
                                    <span id="qiyamul_lail_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="witir" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Witir') }}</label>
                            <div class="col-md-6">
                                <input id="witir" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="witir" />
                                <span id="">Jumlah : 
                                    <span id="witir_val">0</span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="istighfar" class="col-md-4 col-form-label text-md-right">{{ __('Istighfar') }}</label>
                            <div class="col-md-6">
                                <input id="istighfar" type="text" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="0" name="istighfar" />
                                <span id="">Jumlah : 
                                    <span id="istighfar_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="puasa_sunah" class="col-md-4 col-form-label text-md-right">{{ __('Puasa Sunah') }}</label>
                            <div class="col-md-6">
                                <input id="puasa_sunah" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="puasa_sunah" />
                                <span id="">Jumlah : 
                                    <span id="puasa_sunah_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tilawah" class="col-md-4 col-form-label text-md-right">{{ __('Tilawah') }}</label>
                            <div class="col-md-6">
                                <input id="tilawah" type="text" data-slider-min="0" data-slider-max="70" data-slider-step="1" data-slider-value="0" name="tilawah" />
                                <span id="">Jumlah : 
                                    <span id="tilawah_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matsurat" class="col-md-4 col-form-label text-md-right">{{ __('Matsurat') }}</label>
                            <div class="col-md-6">
                                <input id="matsurat" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="matsurat" />
                                <span id="">Jumlah : 
                                    <span id="matsurat_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duha" class="col-md-4 col-form-label text-md-right">{{ __('Duha') }}</label>
                            <div class="col-md-6">
                                <input id="duha" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="0" name="duha" />
                                <span id="">Jumlah : 
                                    <span id="duha_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="baca_buku_islam" class="col-md-4 col-form-label text-md-right">{{ __('Baca Buku Islam') }}</label>
                            <div class="col-md-6">
                                <input id="baca_buku_islam" type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="0" name="baca_buku_islam" />
                                <span id="">Jumlah : 
                                    <span id="baca_buku_islam_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hafalan_quran" class="col-md-4 col-form-label text-md-right">{{ __('Hafalan Quran') }}</label>
                            <div class="col-md-6">
                                <input id="hafalan_quran" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0" name="hafalan_quran" />
                                <span id="">Jumlah : 
                                    <span id="hafalan_quran_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hafalan_hadis" class="col-md-4 col-form-label text-md-right">{{ __('Hafalan Hadist') }}</label>
                            <div class="col-md-6">
                                <input id="hafalan_hadis" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="0" name="hafalan_hadis" />
                                <span id="">Jumlah : 
                                    <span id="hafalan_hadis_val">0</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="minggu" class="col-md-4 col-form-label text-md-right">{{ __('Minggu') }}</label>
                            <div class="col-md-6">
                                <input id="minggu" type="text" data-slider-min="0" data-slider-max="12" data-slider-step="1" data-slider-value="0" name="minggu" />
                                <span id="">Jumlah : 
                                    <span id="minggu_val">0</span>
                                </span>
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
@include('layouts.includes.sliderbtn')

@endsection

