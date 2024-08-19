<script>
  // menset leaflet didalam id 'map'
  var map = L.map('maps').setView([<?= $maps['koordinat'] ?>], <?= $maps['zoom'] ?>);

  // menset BaseMap kedalam leaflet
  var basemaps = [
    L.tileLayer('http://{s}.google.com/vt/lyrs=s&x={x}&y={y}&z={z}', {
      maxZoom: 21,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }),

    L.tileLayer('http://{s}.google.com/vt/lyrs=s,h&x={x}&y={y}&z={z}', {
      maxZoom: 21,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }),
    L.tileLayer('http://{s}.google.com/vt/lyrs=m&x={x}&y={y}&z={z}', {
      maxZoom: 21,
      subdomains: ['mt0', 'mt1', 'mt2', 'mt3']
    }),
  ];

  // polyline GeoJSON point
  var titik_on = L.geoJson(null, {
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
    // console.log(layer.feature.properties.data_A_A_LokasiAdministratif_A10_Kabupaten);
    // popup berdasarkan field nya
    $popup = "<div class='card'>" +
      "<div class='card-header alert-danger text-center p-1'><strong>Kel/Desa " + layer.feature.properties.data_A_A1_IdentitasQuestioner_A1_3 + "<br>Kec. " + layer.feature.properties.data_A_A1_IdentitasQuestioner_A1_2 + "<br>" + layer.feature.properties.data_A_A1_IdentitasQuestioner_A1_1 + "</strong></div>" +

      "<div class='card-body p-0'>" +
      "<table class='table table-responsive-sm table-striped m-0'>" +
      "<tr>" +
      " <td class = 'p-1' > Kondisi Geografis </td>" +
      " <td class = 'p-1' > " + layer.feature.properties.data_A_A3_IdentitasKeluargaResponden_A3_4 + "</td>" +
      "</tr>" +
      "<tr>" +
      "<tr> <td class ='p-1'> Kondisi Sosial </td> <td class = 'p-1' > " + layer.feature.properties.data_A_A3_IdentitasKeluargaResponden_A3_5 + " </td> </tr> " +
      "</table>" +
      "</div>" +
      "<div class='card-footer p-2 alert-info'>" +
      "<div class='row'>" +
      "<div class='col-sm text-left'>Enumerator: <br> " + layer.feature.properties.data_username + "</div>" +
      "<div class='col-sm text-right'>Input: <br> " + layer.feature.properties.data_end + "</div>" +
      "</div>" +
      "</div>";
    // layer.on({
    //   click: function(e) {
    //     responden.bindPopup(content);
    //   }
    // });
    return $popup;
  });

  /* memanggil data geojson point */
  fetch("<?= base_url('Api/geojson/' . $header['provinsi']) ?>")
    .then(respond_api => respond_api.json())
    .then(data => {
      titik_on.addData(data);
      map.addLayer(titik_on); //titik_survei ditampilkan ketika halaman dipanggil
      // map.fitBounds(titik_survei.getBounds());
    });

  map.addControl(
    L.control.basemaps({
      basemaps: basemaps,
      tileX: 0,
      tileY: 0,
      tileZ: 1
    })
  );

  <?php if ($header['provinsi'] == 'kalbar') { ?>
    // polygon GeoJSON Admin
    var admin_kalbar = L.geoJson(null, {
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
          // mouseover: function(e) {
          //   var layer = e.target;
          //   layer.setStyle({
          //     weight: 2, //ketebalan garis saat mouse diatas feature
          //     color: 'cyan', //warna garis saat mouse diatas feature
          //     opacity: 1, //trasparansi garis saat mouse diatas feature
          //     fillColor: "yellow", //warna tengah saat mouse diatas feature
          //     fillOpacity: 1, //trasparansi warna tengah saat mouse diatas feature
          //   });
          //   layer.bringToFront()
          // },
          // mouseout: function(e) {
          //   admin_kalbar.resetStyle(e.target);
          //   map.closePopup();
          // }
        });
      }
    });
    // memanggil data GeoJSON kedalam layer
    fetch("<?= base_url('assets/map/geojson/kalbar_prov.geojson') ?>").then(Response_json => Response_json.json()).then(data => {
      admin_kalbar.addData(data);
      admin_kalbar.addTo(map);
    });
  <?php } ?>

  <?php if ($header['provinsi'] == 'sulteng') { ?>
    var admin_sulteng = L.geoJson(null, {
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
          // mouseover: function(e) {
          //   var layer = e.target;
          //   layer.setStyle({
          //     weight: 2, //ketebalan garis saat mouse diatas feature
          //     color: 'cyan', //warna garis saat mouse diatas feature
          //     opacity: 1, //trasparansi garis saat mouse diatas feature
          //     fillColor: "yellow", //warna tengah saat mouse diatas feature
          //     fillOpacity: 1, //trasparansi warna tengah saat mouse diatas feature
          //   });
          //   layer.bringToFront()
          // },
          // mouseout: function(e) {
          //   admin_sulteng.resetStyle(e.target);
          //   map.closePopup();
          // }
        });
      }
    });

    fetch("<?= base_url('assets/map/geojson/sulteng_prov.geojson') ?>")
      .then(Response_json => Response_json.json())
      .then(data => {
        admin_sulteng.addData(data);
        admin_sulteng.addTo(map);
      });
  <?php } ?>
</script>