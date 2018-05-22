<script>
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