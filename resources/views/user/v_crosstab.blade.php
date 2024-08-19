<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://survei-jitupasna.sinaugis.com/assets/img/faviconunlock.png">

  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <!-- Bootstrap CSS Library -->
  <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css">

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/pivot.min.css">

  <title>Cross-Tab {{ $region }} </title>

  <style>
    .main-footer {
      text-align: center;
      margin-top: 3px;
    }

    .container-fluid {
      margin-top: 65px;
    }

    body {
      font-family: Verdana;
    }
  </style>
</head>

<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
    <a href="{{ route('dashboard') }}" class="navbar-brand"><i class="fas fa-arrow-alt-circle-left"></i>
      Kembali</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarNav"
      aria-controls="navbarNav" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarNav">
      <ul class="navbar-nav ml-auto">
        <li class="nav-item">
          <a class="nav-link" href="{{ route('maps') }}" target="_blank"><i class="fas fa-map-marked-alt"></i> Map</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="{{ route('logout') }}"><i class="fas fa-sign-out-alt text-danger"></i></a>
        </li>
      </ul>
    </div>
  </nav>
  <!-- End of Topbar -->

  <div class="container-fluid">

    <!-- <div class="mt-2" id="datauser"> -->

    <!-- Main content -->
    <!-- <section class="content"> -->
    <div class="alert alert-primary text-center">
      <h3>Region {{ $region }} </h3>
    </div>
    <nav>
      <div class="nav nav-tabs nav-justified" id="nav-tab" role="tablist">
        <a class="nav-link nav-item nav-justified active" id="nav-home-tab" data-toggle="tab" href="#nav-home"
          role="tab" aria-controls="nav-home" aria-selected="true">Single - Single</a>
        <a class="nav-link nav-item" id="nav-profile-tab" data-toggle="tab" href="#nav-profile" role="tab"
          aria-controls="nav-profile" aria-selected="false">Multiple - Single</a>
      </div>
    </nav>
    <div class="tab-content" id="nav-tabContent">
      <div class="tab-pane fade show active" id="nav-home" role="tabpanel" aria-labelledby="nav-home-tab">

        <button id="loading_single" class="btn btn-primary" type="button" disabled>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          Loading...
        </button>
        <div id="outputsingle" style="margin: 5px;"></div>
      </div>
      <div class="tab-pane fade" id="nav-profile" role="tabpanel" aria-labelledby="nav-profile-tab">
        <div class="alert alert-danger mt-2">Catatan:
          <ul>
            <li>Jumlah <b>Totals</b> bukan merupakan jumlah responden.</li>
            <li>Pastikan <b>uncheck</b> nilai (value) kosong pada bagian <b>multi</b> yang digunakan untuk cross-tab.
            </li>
            <li>fungsi multiple to single hanya untuk membandingkam pilihan <b>single to multi</b> bukan <b>single vs
                single</b></li>
          </ul>
        </div>
        <hr>
        <button id="loading_multi" class="btn btn-primary" type="button" disabled>
          <span class="spinner-border spinner-border-sm" role="status" aria-hidden="true"></span>
          Loading...
        </button>
        <div id="outputmulti" style="margin: 5px;"></div>
      </div>
    </div>
    <!-- </section> -->
    <!-- /.content -->
    <!-- </div> -->
    <!-- /.content-wrapper -->
    <hr>



    <div class="card border-primary mb-3">
      <div class="card-header">
        <b>Keterangan</b>
      </div>

      @include('user.ket_crosstab')

      <!-- <footer class="main-footer">
      <strong>YEU, RedR Indonesia, MCS, SRI Institute dan SinauGIS bekerjasama dengan Badan Nasional Penanggulangan Bencana (BNPB) dan United Nations Development Programme (UNDP) Indonesia​<br>Copyright &copy; 2021 </strong>
    </footer> -->
    </div>





    <script src="https://cdn.plot.ly/plotly-basic-latest.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui/1.11.4/jquery-ui.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/jqueryui-touch-punch/0.2.3/jquery.ui.touch-punch.min.js"></script>

    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/pivot.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.23.0/plotly_renderers.min.js"></script>

    <!-- <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script> -->
    <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>

    <script>
      $(function() {

        var derivers = $.pivotUtilities.derivers;
        var renderers = $.extend($.pivotUtilities.renderers,
          $.pivotUtilities.plotly_renderers);

        $.getJSON("{{ url('api/pivot_data/' . $region) }}", function(jitupasna) {
          $("#loading_single").remove();
          $("#outputsingle").pivotUI(jitupasna, {
            renderers: renderers,
            cols: ["a.8"],
            rows: ["a.3 jenis kelamin"],
            rendererName: "Table",
            rowOrder: "value_a_to_z",
            colOrder: "value_z_to_a",
          });
        });

        $.getJSON("{{ url('api/pivot_data_multi/' . $region) }}", function(jitupasnamulti) {
          $("#loading_multi").remove();

          $("#outputmulti").pivotUI(jitupasnamulti, {
            renderers: renderers,
            cols: ["a.8"],
            rows: ["multi_a.4"],
            rendererName: "Table",
            rowOrder: "value_a_to_z",
            colOrder: "value_z_to_a",
          });
        });
      });
    </script>

</body>

</html>
