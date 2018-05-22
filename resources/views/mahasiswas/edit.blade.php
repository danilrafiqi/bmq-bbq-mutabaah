
@extends('layouts.app')

@section('content')
<div class="container">
    <div class="row justify-content-center">
        <div class="col-md-8">
            <div class="card">
                <div class="card-header">{{ __('BMQ MUTABAAH YAUMIAH') }}</div>

                <div class="card-body">
                    <form method="post" action="{{action('MahasiswaController@update', $id)}}">
                        @csrf
                    <input name="_method" type="hidden" value="PATCH">

                        <div class="form-group row">
                            <label for="sholat_wajib" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Wajib') }}</label>
                            <div class="col-md-6">
                                <input id="sholat_wajib" type="text" data-slider-min="0" data-slider-max="35" data-slider-step="1" data-slider-value="{{$mahasiswa->sholat_wajib}}" name="sholat_wajib" />
                                <span id="">Jumlah : 
                                    <span id="sholat_wajib_val">{{$mahasiswa->sholat_wajib}}</span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="jamaah_awal_waktu" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Jamaah Awal Waktu') }}</label>
                            <div class="col-md-6">
                                <input id="jamaah_awal_waktu" type="text" data-slider-min="0" data-slider-max="35" data-slider-step="1" data-slider-value="{{$mahasiswa->jamaah_awal_waktu}}" name="jamaah_awal_waktu" />
                                <span id="">Jumlah : 
                                    <span id="jamaah_awal_waktu_val">{{$mahasiswa->jamaah_awal_waktu}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="subuh_jamaah" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Subuh Berjamaah') }}</label>
                            <div class="col-md-6">
                                <input id="subuh_jamaah" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->subuh_jamaah}}" name="subuh_jamaah" />
                                <span id="">Jumlah : 
                                    <span id="subuh_jamaah_val">{{$mahasiswa->subuh_jamaah}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="qiyamul_lail" class="col-md-4 col-form-label text-md-right">{{ __('Qiyamul Lail') }}</label>
                            <div class="col-md-6">
                                <input id="qiyamul_lail" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->qiyamul_lail}}" name="qiyamul_lail" />
                                <span id="">Jumlah : 
                                    <span id="qiyamul_lail_val">{{$mahasiswa->qiyamul_lail}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="witir" class="col-md-4 col-form-label text-md-right">{{ __('Sholat Witir') }}</label>
                            <div class="col-md-6">
                                <input id="witir" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->witir}}" name="witir" />
                                <span id="">Jumlah : 
                                    <span id="witir_val">{{$mahasiswa->witir}}</span>
                                </span>
                            </div>
                        </div>


                        <div class="form-group row">
                            <label for="istighfar" class="col-md-4 col-form-label text-md-right">{{ __('Istighfar') }}</label>
                            <div class="col-md-6">
                                <input id="istighfar" type="text" data-slider-min="0" data-slider-max="1000" data-slider-step="1" data-slider-value="{{$mahasiswa->istighfar}}" name="istighfar" />
                                <span id="">Jumlah : 
                                    <span id="istighfar_val">{{$mahasiswa->istighfar}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="puasa_sunah" class="col-md-4 col-form-label text-md-right">{{ __('Puasa Sunah') }}</label>
                            <div class="col-md-6">
                                <input id="puasa_sunah" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->puasa_sunah}}" name="puasa_sunah" />
                                <span id="">Jumlah : 
                                    <span id="puasa_sunah_val">{{$mahasiswa->puasa_sunah}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="tilawah" class="col-md-4 col-form-label text-md-right">{{ __('Tilawah') }}</label>
                            <div class="col-md-6">
                                <input id="tilawah" type="text" data-slider-min="0" data-slider-max="70" data-slider-step="1" data-slider-value="{{$mahasiswa->tilawah}}" name="tilawah" />
                                <span id="">Jumlah : 
                                    <span id="tilawah_val">{{$mahasiswa->tilawah}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="matsurat" class="col-md-4 col-form-label text-md-right">{{ __('Matsurat') }}</label>
                            <div class="col-md-6">
                                <input id="matsurat" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->matsurat}}" name="matsurat" />
                                <span id="">Jumlah : 
                                    <span id="matsurat_val">{{$mahasiswa->matsurat}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="duha" class="col-md-4 col-form-label text-md-right">{{ __('Duha') }}</label>
                            <div class="col-md-6">
                                <input id="duha" type="text" data-slider-min="0" data-slider-max="7" data-slider-step="1" data-slider-value="{{$mahasiswa->duha}}" name="duha" />
                                <span id="">Jumlah : 
                                    <span id="duha_val">{{$mahasiswa->duha}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="baca_buku_islam" class="col-md-4 col-form-label text-md-right">{{ __('Baca Buku Islam') }}</label>
                            <div class="col-md-6">
                                <input id="baca_buku_islam" type="text" data-slider-min="0" data-slider-max="50" data-slider-step="1" data-slider-value="{{$mahasiswa->baca_buku_islam}}" name="baca_buku_islam" />
                                <span id="">Jumlah : 
                                    <span id="baca_buku_islam_val">{{$mahasiswa->baca_buku_islam}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hafalan_quran" class="col-md-4 col-form-label text-md-right">{{ __('Hafalan Quran') }}</label>
                            <div class="col-md-6">
                                <input id="hafalan_quran" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="{{$mahasiswa->hafalan_quran}}" name="hafalan_quran" />
                                <span id="">Jumlah : 
                                    <span id="hafalan_quran_val">{{$mahasiswa->hafalan_quran}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="hafalan_hadis" class="col-md-4 col-form-label text-md-right">{{ __('Hafalan Hadist') }}</label>
                            <div class="col-md-6">
                                <input id="hafalan_hadis" type="text" data-slider-min="0" data-slider-max="100" data-slider-step="1" data-slider-value="{{$mahasiswa->hafalan_hadis}}" name="hafalan_hadis" />
                                <span id="">Jumlah : 
                                    <span id="hafalan_hadis_val">{{$mahasiswa->hafalan_hadis}}</span>
                                </span>
                            </div>
                        </div>

                        <div class="form-group row">
                            <label for="minggu" class="col-md-4 col-form-label text-md-right">{{ __('Minggu') }}</label>
                            <div class="col-md-6">
                                <input id="minggu" type="text" data-slider-min="0" data-slider-max="12" data-slider-step="1" data-slider-value="{{$mahasiswa->minggu}}" name="minggu" />
                                <span id="">Jumlah : 
                                    <span id="minggu_val">{{$mahasiswa->minggu}}</span>
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
<script>

// var mutabaah = [
//     'sholat_wajib',
//     'jamaah_awal_waktu',
//     'subuh_jamaah',
//     'qiyamul_lail',
//     'witir',
//     'istighfar',
//     'puasa_sunah',
//     'tilawah',
//     'matsurat',
//     'duha',
//     'baca_buku_islam',
//     'hafalan_quran',
//     'hafalan_hadis',
//     'minggu'
// ];
// var slider = [];
// for(var a = 0; a < mutabaah.length; a++){
//     slider[a] = new Slider(`#${mutabaah[a]}`);
//     slider[a].on("slide", function(sliderValue) {
//         document.getElementById(`${mutabaah[a]}_val`).textContent = sliderValue;
//     });
// }

var slider = new Slider("#sholat_wajib");
slider.on("slide", function(sliderValue) {
    document.getElementById("sholat_wajib_val").textContent = sliderValue;
});

var slider = new Slider("#jamaah_awal_waktu");
slider.on("slide", function(sliderValue) {
    document.getElementById("jamaah_awal_waktu_val").textContent = sliderValue;
});

var slider = new Slider("#subuh_jamaah");
slider.on("slide", function(sliderValue) {
    document.getElementById("subuh_jamaah_val").textContent = sliderValue;
});

var slider = new Slider("#qiyamul_lail");
slider.on("slide", function(sliderValue) {
    document.getElementById("qiyamul_lail_val").textContent = sliderValue;
});

var slider = new Slider("#witir");
slider.on("slide", function(sliderValue) {
    document.getElementById("witir_val").textContent = sliderValue;
});

var slider = new Slider("#istighfar");
slider.on("slide", function(sliderValue) {
    document.getElementById("istighfar_val").textContent = sliderValue;
});

var slider = new Slider("#puasa_sunah");
slider.on("slide", function(sliderValue) {
    document.getElementById("puasa_sunah_val").textContent = sliderValue;
});

var slider = new Slider("#tilawah");
slider.on("slide", function(sliderValue) {
    document.getElementById("tilawah_val").textContent = sliderValue;
});

var slider = new Slider("#matsurat");
slider.on("slide", function(sliderValue) {
    document.getElementById("matsurat_val").textContent = sliderValue;
});

var slider = new Slider("#duha");
slider.on("slide", function(sliderValue) {
    document.getElementById("duha_val").textContent = sliderValue;
});

var slider = new Slider("#baca_buku_islam");
slider.on("slide", function(sliderValue) {
    document.getElementById("baca_buku_islam_val").textContent = sliderValue;
});

var slider = new Slider("#hafalan_quran");
slider.on("slide", function(sliderValue) {
    document.getElementById("hafalan_quran_val").textContent = sliderValue;
});

var slider = new Slider("#hafalan_hadis");
slider.on("slide", function(sliderValue) {
    document.getElementById("hafalan_hadis_val").textContent = sliderValue;
});

var slider = new Slider("#minggu");
slider.on("slide", function(sliderValue) {
    document.getElementById("minggu_val").textContent = sliderValue;
});

</script>

@endsection

