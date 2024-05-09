<script src="https://kit.fontawesome.com/888f620adf.js" crossorigin="anonymous"></script>
<div>
    <!-- Topbar Start -->
    <div class="container-fluid bg-primary py-3">
        <div class="container">
            <div class="row">
                <div class="col-md-6 text-center text-lg-left mb-2 mb-lg-0">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white pr-3" href="#">FAQs</a>
                        <span class="text-white">|</span>
                        <a class="text-white px-3" href="#">Help</a>
                        <span class="text-white">|</span>
                        <a class="text-white pl-3" href="#">Support</a>
                    </div>
                </div>
                <div class="col-md-6 text-center text-lg-right">
                    <div class="d-inline-flex align-items-center">
                        <a class="text-white px-3" href="">
                            <i class="fab fa-facebook-f"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-twitter"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-linkedin-in"></i>
                        </a>
                        <a class="text-white px-3" href="">
                            <i class="fab fa-instagram"></i>
                        </a>
                        <a class="text-white pl-3" href="">
                            <i class="fab fa-youtube"></i>
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Topbar End -->

    <!-- Navbar Start -->
    <div class="container-fluid position-relative nav-bar p-0">
        <div class="container-lg position-relative p-0 px-lg-3" style="z-index: 9;">
            <nav class="navbar navbar-expand-lg bg-white navbar-light py-3 py-lg-0 pl-3 pl-lg-5">
                <a href="" class="navbar-brand">
                    <h1 class="m-0 text-secondary">
                        <span class="text-primary">
                            <img src="{{ url('/') }}/batulogo.png" alt="Logo" style="height: 50px;">
                        </span>
                    </h1>
                </a>
                <button type="button" class="navbar-toggler" data-toggle="collapse" data-target="#navbarCollapse">
                    <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse justify-content-between px-3" id="navbarCollapse">
                    <div class="navbar-nav ml-auto py-0">
                        <a href="#home" class="nav-item nav-link active">Home</a>
                        <a href="#visimisi" class="nav-item nav-link">Visi Misi</a>
                        <a href="#struktur" class="nav-item nav-link">Struktur Organisasi</a>
                        <a href="#infotanah" class="nav-item nav-link">Informasi Pertanian</a>
                        <a href="#desa" class="nav-item nav-link">Data Desa/Kel.</a>
                        <a href="#lahan" class="nav-item nav-link">Data Lahan</a>
                        <a href="#potensi" class="nav-item nav-link">Peta Potensi</a>
                    </div>
                </div>
            </nav>
        </div>
    </div>
    <!-- Navbar End -->


    <!-- Carousel Start -->
    <div id="home" class="container-fluid p-0">
        <div id="header-carousel" class="carousel slide" data-ride="carousel">
            <div class="carousel-inner">
                <div class="carousel-item active">
                    <img class="w-100" src="{{ url('/') }}/img/koltim7.jpg" alt="Image">
                    <div class="carousel-caption d-flex flex-column align-items-center justify-content-center">
                        <div class="p-3" style="max-width: 900px;">
                            <h4 class="text-white text-uppercase mb-md-3">Selamat datang di website</h4>
                            <h2 class="display-4 text-white mb-md-4 text-bold text-uppercase ">Dinas Pertanian <br> Kota Batu</h2>
                            {{-- <a href="#" class="btn btn-primary py-md-3 px-md-5 mt-2">Learn More</a> --}}
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Carousel End -->

    <!-- Contact Info Start -->
    <div class="container-fluid contact-info mt-5 mb-4">
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="card bg-secondary text-white text-center py-2 px-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-location-dot fa-2x mr-2"></i>
                            <div>
                                <h5 class="font-weight-medium mb-0">Lokasi</h5>
                                <p class="m-0">Kota Batu</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4 mb-4 mb-lg-0">
                    <div class="card bg-primary text-white text-center py-2 px-3">
                        <div class="d-flex align-items-center justify-content-center">
                        <i class="fa-regular fa-envelope fa-2x mr-2"></i>
                            <div>
                                <h5 class="font-weight-medium mb-0 text-info">Email</h5>
                                <p class="m-0">pertanianbatu@gmail.com</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-md-4">
                    <div class="card bg-secondary text-white text-center py-2 px-3">
                        <div class="d-flex align-items-center justify-content-center">
                            <i class="fa-solid fa-phone fa-2x mr-2"></i>
                            <div>
                                <h5 class="font-weight-medium mb-0">Telepon</h5>
                                <p class="m-0">0821-2425-1672</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <!-- Contact Info End -->

    <!-- About Start -->
    <div id="visimisi" class="container-fluid py-5">
        <div class="container pt-0 pt-lg-4">
            <div class="row align-items-center">
                <div class="col-lg-5">
                    <img class="img-fluid" src="{{ url('/') }}/img/alun.webp" alt="">
                </div>
                <div class="col-lg-7 mt-5 mt-lg-0 pl-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Tentang Visi Misi</h6>
                    <h1 class="mb-4">Visi</h1>
                    <h5 class="font-weight-medium font-italic mb-5">"Menjadikan Kota Batu Sejahtera Bersama Masyarakat Kota Batu yang Agamis, Maju, Mandiri dan Berkeadilan"</h5>
                    <h1 class="mb-3">Misi</h1>
                    <div class="row">
                        <div class="col-sm-12 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Penguatan Tata Kelola Pemerintahan yang Baik, Bersih dan Transparan Melayani Masyarakat</p>
                            </div>
                        </div>
                        <div class="col-sm-12 pt-3">
                            <div class="d-flex align-items-center">
                                <i class="fa fa-check text-primary mr-2"></i>
                                <p class="text-secondary font-weight-medium m-0">Peningkatan Ekonomi Masyarakat dan Produktifitas Pertanian, Perkebunan, Penguatan UMKM, Koperasi, dan Pelaku Usaha</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- About End -->

    <!-- Testimonial Start -->
    <div id="struktur" class="container-fluid py-5">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang </h6>
            <h1 class="display-4 text-center mb-5">Struktur Organisasi</h1>

            {{-- img struktur --}}
            <div class="row">
                <div class="col-md-12 mb-3">
                    <img class="img-fluid" src="{{ url('/') }}/img/struktur.png" alt="">
                </div>
            </div>
            <div class="owl-carousel testimonial-carousel mt-2">
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-1.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-2.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-3.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
                <div class="testimonial-item">
                    <img class="position-relative rounded-circle bg-white shadow mx-auto" src="{{ url('/') }}/img/testimonial-4.jpg" style="width: 100px; height: 100px; padding: 12px; margin-bottom: -50px; z-index: 1;" alt="">
                    <div class="bg-light text-center p-4 pt-0">
                        <h5 class="font-weight-medium mt-5">Kepala Pertanian</h5>
                        <p class="text-muted font-italic">Kepala Dinas</p>
                        <p class="m-0">Sed ea amet kasd elitr stet, stet rebum et ipsum est duo elitr eirmod clita lorem. Dolor ipsum clita</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Testimonial End -->

    <!-- Pricing Plan Start -->
    <div id="infotanah" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Informasi Pertanian</h1>
            <div class="row">
                @foreach ($infotanah as $info)
                <div class="col-lg-4 col-md-6 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        <div class="d-inline-flex flex-column align-items-center justify-content-center bg-secondary rounded-circle shadow mt-2 mb-4" style="width: 200px; height: 200px; border: 15px solid #ffffff;">
                            <h3 class="text-white">
                                {{ $info->produksi }}
                            </h3>
                        </div>
                        <div class="d-flex flex-column align-items-center py-3">
                            {{-- 2 kolom 2 baris--}}
                            <div class="row">
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Jenis Pertanian</h5>
                                    <p class="text-muted font-italic">{{ $info->jenis_tnm }} .</p>
                                </div>
                                <div class="col-md-6">
                                    <h5 class="font-weight-medium">Produktivitas</h5>
                                    <p class="text-muted font-italic">{{ $info->produktivitas }} t/ha</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Pricing Plan End -->

    <!-- Services Start -->
    <div id="desa" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Desa / Kelurahan</h1>
            <div class="row">
                @foreach($desas as $desa)
                <div class="col-lg-3 col-md-6 pb-1">
                    <div class="d-flex flex-column align-items-center justify-content-center text-center bg-light mb-4 px-4" style="height: 300px;">
                        <div class="d-inline-flex align-items-center justify-content-center bg-white shad~ow rounded-circle mb-4 shadow" style="width: 100px; height: 100px;">
                            <span class="text-secondary font-weight-bold">
                                {{ $desa->luas_wilayah }} m<sup>2</sup>
                            </span>
                        </div>
                        <h3 class="font-weight-bold m-0 mb-1 text-uppercase">{{ $desa->nama_desa }}</h3>
                        <h5 class="mt-2">Kecamatan {{ $desa->nama_kecamatan }}</h5>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
    <!-- Services End -->


    <!-- Features Start -->
    <div id="lahan" class="container-fluid py-5">
        <div class="container">
            <div class="row">
                <div class="col-lg-7 m-0 my-lg-5 pt-0 pt-lg-5 pr-lg-5">
                    <h6 class="text-secondary text-uppercase font-weight-medium mb-3">Tentang</h6>
                    <h1 class="mb-4">Data Lahan</h1>
                    <p class="text-muted">Informasi berikut berdasarkan data terbaru dari Dinas Pertanian Kota Batu:</p>
                    <div class="row">
                        <div class="col-sm-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <h2 class="text-primary">{{ $pemiliktanah->count() }}</h2>
                                </div>
                                <div>
                                    <h5 class="font-weight-bold mb-0">Total Pemilik Lahan</h5>
                                    <span class="text-muted">Orang</span>
                                </div>
                            </div>
                        </div>
                        <div class="col-sm-6 mb-4">
                            <div class="d-flex align-items-center">
                                <div class="mr-3">
                                    <h2 class="text-primary">{{ $sum_luas_tanah }}</h2>
                                </div>
                                <div>
                                    <h5 class="font-weight-bold mb-0">Total Luas Lahan</h5>
                                    <span class="text-muted">m<sup>2</sup></span>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>


                <div class="col-lg-5">
    <div class="d-flex flex-column align-items-center justify-content-center bg-primary text-white h-100 py-5 px-3">
        <img src="{{ asset('batulogo.png') }}" alt="" class="img-fluid m-2" width="30%">
        <img src="{{ asset('img/alun.webp') }}" alt="" class="img-fluid m-2">
    </div>
</div>

    </div>
    <!-- Features End -->

    <!-- Pricing Plan Start -->
    <div id="potensi" class="container-fluid pt-5 pb-3">
        <div class="container">
            <h6 class="text-secondary text-uppercase text-center font-weight-medium mb-3">Tentang</h6>
            <h1 class="display-4 text-center mb-5">Peta Potensi</h1>
            <div class="row">
                <div class="col-lg-12 col-sm-12 mb-4">
                    <div class="bg-light text-center mb-2 pt-4">
                        {{-- Dropdown untuk memilih jenis tanaman --}}
                        <div class="form-group">
                            <div class="input-group" style="width: 200px;">
                                <div class="input-group-prepend">
                                    <span class="input-group-text bg-primary text-white border-0 rounded-left" style="border-top-right-radius: 15px; border-bottom-right-radius: 15px;"><i class="fas fa-caret-down"></i></span>
                                </div>
                                <select class="custom-select border-right-0 rounded-right" id="jenis-tanaman" onchange="filterMap(this.value)" style="border-top-left-radius: 15px; border-bottom-left-radius: 15px;">
                                    <option value="semua">Semua</option>
                                    <option value="buah-buahan">Penghasil Buah</option>
                                    <option value="sayuran">Penghasil Sayuran</option>
                                </select>
                            </div>
                        </div>

                        {{-- peta --}}
                        <div class="m-2" id="map" style="height: 600px;" wire:ignore></div>
                    </div>
                </div>
            </div>
        </div>
    </div>

<script>
    function filterMap(jenisTanaman) {
        $(document).ready(function() {
            $.ajax({
                url: "{{ route('filterMap', ':jenis') }}".replace(':jenis', jenisTanaman),
                type: 'GET',
                success: function(response) {
                    // Update the petas data with the response data
                    var petas = response.data;

                    // Clear existing layers from the map
                    map.eachLayer(function(layer) {
                        if (layer instanceof L.Polygon || layer instanceof L.Marker) {
                            map.removeLayer(layer);
                        }
                    });

                    // Add new layers based on filtered data
                    petas.forEach(function(item) {
                        var cords = JSON.parse(item['batas_lahan']);
                        console.log(item);
                        console.log(cords);
                        var coordinates = cords.geometry.coordinates[0];
                        for (var i = 0; i < coordinates.length; i++) {
                            coordinates[i].reverse();
                        }
                        var polygon = L.polygon(coordinates, {
                            color: getRandomColor(),
                            fillColor: getRandomColor(),
                            fillOpacity: 0.8
                        }).addTo(map);

                        if (map.getZoom() < 15) {
                            var marker = L.marker(coordinates[0], {
                                icon: L.divIcon({
                                    className: 'my-custom-pin',
                                    iconAnchor: [0, 24],
                                    labelAnchor: [-6, 0],
                                    popupAnchor: [0, -36],
                                    html: '<span class="fa-stack fa-2x">' +
                                        '<i class="fa fa-circle fa-stack-2x" style="color:' + getRandomColor() + '"></i>' +
                                        '<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>' +
                                        '</span>'
                                })
                            }).addTo(map).bindPopup(
                                '<b>ID</b> : ' + item['id'] + '<br>' +
                                "<b>Desa : </b>" + item['nama_desa'] + "<br>" +
                                "<b>Pemilik petas : </b>" + item['nama_pemiliklahan'] + "<br>" +
                                "<b>Jenis Pertanian : </b>" + item['jenis_tnm'] + "<br>" +
                                "<b>Hasil Produksi : </b>" + item['produksi'] + "" + "<br>" +
                                "<b>Produktivitas : </b>" + item['produktivitas'] + "t/ha<br>" +
                                "<b>Luas petas : </b>" + item['luas_lahan'] + " m<sup>2</sup>" + "<br>"
                            );
                        }
                        
                    });
                },
                error: function(xhr, status, error) {
                    console.error(xhr.responseText);
                }
            });
        });
    }
</script>


    <!-- Pricing Plan End -->
    <div class="container-fluid bg-dark text-white py-4 px-sm-3 px-md-5">
        <p class="m-0 text-center text-white">
            &copy; <a class="text-white font-weight-medium" href="#">Sistem Informasi Geografis Pertanian</a>. Kota Batu
            <a class="text-white font-weight-medium" href="#"></a>
        </p>
    </div>
    <!-- Footer End -->


    <!-- Back to Top -->
    <a href="#" class="btn btn-lg btn-primary back-to-top"><i class="fa fa-angle-double-up"></i></a>

    <script>
        // document.addEventListener('livewire:load', () => {
        // maps leaflet
        var map = L.map('map').setView([-7.867100, 112.523903], 13);
        L.tileLayer('https://api.mapbox.com/styles/v1/{id}/tiles/{z}/{x}/{y}?access_token={accessToken}', {
            attribution: '&copy; <a href="https://www.openstreetmap.org/">2022</a>',
            maxZoom: 23,
            id: 'mapbox/satellite-streets-v11',
            tileSize: 512,
            zoomOffset: -1,
            accessToken: 'sk.eyJ1IjoiYXVsaWFpbG1pbXIiLCJhIjoiY2x2cThhdjMwMGMzZDJrcW90dnY2cnM1OCJ9.hzwHNwCQcjDQ8yBgkkYeWQ'
        }).addTo(map);

        // random color
        function getRandomColor() {
            var letters = '0123456789ABCDEF';
            var color = '#';
            for (var i = 0; i < 6; i++) {
                color += letters[Math.floor(Math.random() * 16)];
            }
            return color;
        }
        // view maps polygon existing json.stringify
        var petas = {!!  json_encode($petas -> toArray()) !!};

        petas.forEach(function(item) {
            var cords = JSON.parse(item['batas_lahan']);
            // get coordinates from geometry on cords
            var coordinates = cords.geometry.coordinates[0];
            for (var i = 0; i < coordinates.length; i++) {
                coordinates[i].reverse();
            }
            // create polygon jika zoom diatas 15
            var polygon = L.polygon(coordinates, {
                color: 'getRandomColor()',
                // random color
                fillColor: getRandomColor(),
                fillOpacity: 0.8
            }).addTo(map);

            // random marker color
            // jadikan marker jika zoom dibawah 15
            if (map.getZoom() < 15) {
                // marker with ramdom color from getRandomColor()
                var marker = L.marker(coordinates[0], {
                    icon: L.divIcon({
                        className: 'my-custom-pin',
                        iconAnchor: [0, 24],
                        labelAnchor: [-6, 0],
                        popupAnchor: [0, -36],
                        html: '<span class="fa-stack fa-2x">' +
                            '<i class="fa fa-circle fa-stack-2x" style="color:' + getRandomColor() + '"></i>' +
                            '<i class="fa fa-map-marker fa-stack-1x fa-inverse"></i>' +
                            '</span>'
                    })
                }).addTo(map).bindPopup(
                                '<b>ID</b> : ' + item['id'] + '<br>' +
                                "<b>Desa : </b>" + item['nama_desa'] + "<br>" +
                                "<b>Pemilik petas : </b>" + item['nama_pemiliklahan'] + "<br>" +
                                "<b>Jenis Pertanian : </b>" + item['jenis_tnm'] + "<br>" +
                                "<b>Hasil Produksi : </b>" + item['produksi'] + "" + "<br>" +
                                "<b>Produktivitas : </b>" + item['produktivitas'] + "t/ha<br>" +
                                "<b>Luas petas : </b>" + item['luas_lahan'] + " m<sup>2</sup>" + "<br>"
                );
            }
            // popup livewire click
        });

        map.pm.addControls({
            position: 'topleft',
            drawCircle: false,
            drawMarker: false,
            drawPolyline: false,
            drawRectangle: false,
            drawCircleMarker: false,
            drawPolygon: true,
            cutPolygon: false,
            editMode: true,
            dragMode: false,
            removalMode: true,
        });

        map.on('pm:create', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
        // end maps leaflet geoman draw

        // end tampilkan data dari database
        // maps leaflet geoman edit
        map.on('pm:edit', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
        // end maps leaflet geoman edit

        // maps leaflet geoman delete
        map.on('pm:remove', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
        // end maps leaflet geoman delete

        // maps leaflet geoman draw polygon
        map.on('pm:drawstart', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
        // end maps leaflet geoman draw polygon

        // maps leaflet geoman edit polygon
        map.on('pm:editstart', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
        // end maps leaflet geoman edit polygon

        // maps leaflet geoman delete polygon
        map.on('pm:deletestart', function(e) {
            var layer = e.layer;
            var type = e.shape;
            var data = layer.toGeoJSON();
            var dataString = JSON.stringify(data);
            @this.set('batas_lahan', dataString);
        });
    </script>
</div>