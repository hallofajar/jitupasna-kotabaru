@extends('user.tamplate.v_admin_tamplate')

@section('css')
  <link rel="stylesheet" href="https://unpkg.com/leaflet@1.7.1/dist/leaflet.css"
    integrity="sha512-xodZBNTC5n17Xt2atTPuE1HxjVMSvLVW9ocqUKLsCC5CXdbqCmblAshOMAS6/keqq/sMZMZ19scR4PsZChSR7A=="
    crossorigin="" />
  <link rel="stylesheet" href="{{ asset('assets/map/css/leaflet.awesome-markers.css') }}">
  <link rel="stylesheet" href="http://code.ionicframework.com/ionicons/1.5.2/css/ionicons.min.css">
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/leaflet-basemaps@0.3.4/L.Control.Basemaps.min.css">
  <style>
    div .card .maps-card,
    div .maps-card {
      height: 85vh;
    }

    .leaflet-tile-container img {
      width: 256.5px !important;
      height: 256.5px !important;
    }

    .leaflet-popup-content-wrapper,
    .leaflet-popup-tip {
      background: #f4f3ef;
    }
  </style>
@endsection


@section('content')
  <div class="row">
    <div class="col-md-12 maps-card">
      <div class="card maps-card">
        {{-- <div class="card-header">
          <button onclick="add_bandung()" class="btn btn-sm btn-success mt-0 mb-2">Bandung</button>
          <button onclick="add_bekasi()" class="btn btn-sm btn-success mt-0 mb-2">Bekasi</button>
          <button onclick="add_jakartabarat()" class="btn btn-sm btn-success mt-0 mb-2">Jakarta Barat</button>
          <button onclick="add_jakartatimur()" class="btn btn-sm btn-success mt-0 mb-2">Jakarta Timur</button>
          <button onclick="add_sidoarjo()" class="btn btn-sm btn-success mt-0 mb-2">Sidoarjo</button>
          <button onclick="add_surabaya()" class="btn btn-sm btn-success mt-0 mb-2">Surabaya</button>
        </div> --}}
        <div class="card-body">
          <div class="map" id="map" style="height: 100%;"></div>
        </div>
      </div>
    </div>
  </div>
@endsection


@section('js')
  <script src="https://unpkg.com/leaflet@1.7.1/dist/leaflet.js"></script>
  <script src="{{ asset('assets/map/js/leaflet.awesome-markers.js') }}"></script>
  <script src="https://cdn.jsdelivr.net/npm/leaflet-basemaps@0.3.4/L.Control.Basemaps.min.js"></script>
  <script>
    // menset leaflet didalam id 'map'
    var map = L.map('map').setView([-3.9930159770216864, 116.10291509019925], 11);

    // menset BaseMap kedalam leaflet
    var googleStreets = L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 22,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var googleHybrid = L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
      maxZoom: 22,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var googleSat = L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
      maxZoom: 22,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    var googleTerrain = L.tileLayer('http://{s}.google.com/vt/lyrs=p&x={x}&y={y}&z={z}', {
      maxZoom: 22,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    });
    // scale bar
    L.control.scale({
      maxWidth: 150,
      imperial: false,
    }).addTo(map);

    // Control Layer Basemaps
    map.addControl(L.control.basemaps({
      basemaps: [googleHybrid, googleStreets, googleSat],
      tileX: 0, // tile X coordinate
      tileY: 0, // tile Y coordinate
      tileZ: 1 // tile zoom level
    }));

    const content_popup = (layer, region) => {
      const data_return = `
    <div class='card'>
      <div class='card-header alert-danger text-center p-1'>
        <strong>
        ${region}
        </strong>
      </div>
      <div class='card-body p-0'>
        <table class='table table-responsive-sm table-striped m-0'>
          <tr>
            <td class = 'p-1' > Nama </td>
            <td class = 'p-1' > ${layer.feature.properties.a_a1} </td>
          </tr>
          <tr>
            <td class = 'p-1' >Jenis Kelamin</td>
            <td class = 'p-1' > ${layer.feature.properties.a_a8}</td>
          </tr>
          <tr>
            <td class = 'p-1' > Usia </td>
            <td class = 'p-1' > ${layer.feature.properties.a_a9} Tahun </td>
          </tr>
          <tr>
            <td class = 'p-1' > Pendidikan </td>
            <td class = 'p-1' > ${layer.feature.properties.a_a12}</td>
          <tr>
            <td class = 'p-1' > Posisi Dalam Keluarga </td>
            <td class = 'p-1' > ${layer.feature.properties.a_a11}</td>
          </tr>
          <tr>
            <td class ='p-1'> Jarak dengan Laut </td>
            <td class = 'p-1' >
            ${layer.feature.properties.a_a5}
            </td>
          </tr>
        </table>
      </div>
      <div class='card-footer p-2 alert-info'>
        <div class='row'>
          <div class='col-sm text-left'>Enumerator: <br> ${layer.feature.properties.deviceid} </div>
          <div class='col-sm text-right'>tanggal: <br> ${layer.feature.properties.today} </div>
        </div>
      </div>
    </div>`;
      return data_return;
    }

    // polygon GeoJSON Admin
    var admin = L.geoJson(null, {
      style: function(feature) {
        return {
          color: 'red', //memberikan warna garis luar polygon
          weight: 3, // ketebalan garis luar
          opacity: 0.9, // transparansi garis luar
          fillColor: '#0F044C', //warna fill
          fillOpacity: 0, // transparansi fill
        };
      },
      onEachFeature: function(feature, layer) {
        layer.on({

        });
      }
    });

    // memanggil data GeoJSON kedalam layer
    fetch("{{ url('assets/map/geojson/bandung.geojson') }}")
      .then(Response_json => Response_json.json())
      .then(data => {
        admin.addData(data);
      });

    // polyline GeoJSON point
    var titik_jakartabarat = L.geoJson(null, {
      pointToLayer: function(feature, latlng) {
        return L.marker(latlng, {
          icon: L.AwesomeMarkers.icon({
            icon: 'home',
            markerColor: 'red',
            prefix: 'fa',
            iconColor: 'white',
          })
        });
      },

    }).bindPopup(function(layer) {
      $popup = content_popup(layer, "Jitupasna Banjir ROB");
      return $popup;
    });

    /* memanggil data geojson point */
    fetch("{{ url('/api/geojson') }}")
      .then(respond_api => respond_api.json())
      .then(data => {
        titik_jakartabarat.addData(data);
        titik_jakartabarat.addTo(map);
      });



    // function remove_layer() {
    //   admin_bandung.remove();
    //   admin_bekasi.remove();
    //   admin_jakartabarat.remove();
    //   admin_jaktim.remove();
    //   admin_sidoarjo.remove();
    //   admin_surabaya.remove();

    //   titik_bandung.remove();
    //   titik_bekasi.remove();
    //   titik_jakartabarat.remove();
    //   titik_jakartatimur.remove();
    //   titik_sidoarjo.remove();
    //   titik_surabaya.remove();
    // };

    // function add_bandung() {
    //   remove_layer();
    //   // admin_bandung.addTo(map);
    //   titik_bandung.addTo(map);
    //   map.fitBounds(titik_bandung.getBounds());
    // };

    // function add_bekasi() {
    //   remove_layer();
    //   // admin_bekasi.addTo(map);
    //   titik_bekasi.addTo(map);
    //   map.fitBounds(titik_bekasi.getBounds());
    // };

    // function add_jakartabarat() {
    //   remove_layer();
    //   // admin_jakartabarat.addTo(map);
    //   titik_jakartabarat.addTo(map);
    //   map.fitBounds(titik_jakartabarat.getBounds());
    // };

    // function add_jakartatimur() {
    //   remove_layer();
    //   // admin_jaktim.addTo(map);
    //   titik_jakartatimur.addTo(map);
    //   map.fitBounds(titik_jakartatimur.getBounds());
    // };

    // function add_sidoarjo() {
    //   remove_layer();
    //   // admin_sidoarjo.addTo(map);
    //   titik_sidoarjo.addTo(map);
    //   map.fitBounds(titik_sidoarjo.getBounds());
    // };

    // function add_surabaya() {
    //   remove_layer();
    //   // admin_surabaya.addTo(map);
    //   titik_surabaya.addTo(map);
    //   map.fitBounds(titik_surabaya.getBounds());
    // };
  </script>
@endsection
