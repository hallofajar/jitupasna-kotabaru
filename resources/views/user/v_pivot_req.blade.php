@extends('user.tamplate.v_admin_tamplate')

@section('css')
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.13.0/pivot.min.css">
  <style>
  </style>
@endsection


@section('content')
  <div class="row justify-content-end">
    {{-- <a target="_blank" class="btn btn-success" href="{{ route('dashboard.resume.print', $region) }}">Print</a> --}}
  </div>
  <div class="row justify-content-center">
    <div id="section-print" class="col-12 col-xs-12 col-md-11 col-lg-11 col-xl-10">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mt-1">
        <h1 class="display-4">Region {{ $region }} </h1>
        <p class="lead">Hasil survei Partisipasi UMKM dalam Pengadaan Barang/Jasa Pemerintah<br>

          <b>Total: {{ count($data_single) }} Responden</b>
        </p>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              1. Klasifikasi Izin Berusaha (Q7) dan Kepemilikan Utama (Q5) per Kabupaten
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table1"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              2. Klasifikasi Ijin Berusaha (Q7), Kepemilikan Utama, (Q5) Sektor yang digeluti, ( Q10) per Kabupaten
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table2"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              3. Kepemilikan Utama dan Usia Bisnis per kabupaten
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table3"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              4. Kepemilikan Utama, Usia Bisnis, dan Jumlah Karyawan per Kabupaten
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table4"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              5.Kepemilikan Utama Bisnis Usaha (Q5), Klasifikasi Izin Usaha, (Q7) Omset Tahunan per kabupaten (Q11)
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table5"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              6. Kepemilikan Utama Bisnis (Q5), Klasifikasi Izin Usaha (Q7), dan Keikutsertaan dalam Pengadaan (Q12)
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table6"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              7. Kepemilikan Utama Bisnis, (Q5) Klasifikasi Ijin Usaha (Q7), dan Alasan Tidak Ikut dalam Pengadaan (Q13)
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table7"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              8. Kepemilikan Utama Bisnis (Q5) dan Paket Pengadaan Pemerintah yang Diikuti (Q 19)
            </h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-11">
                <div id="table8"></div>
                {{-- <small class="text-muted">*Jumlah responden: </small> --}}
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©SriInstitute2023</small>
              </div>
            </div>
          </div>
        </div>
      </div>

    </div>
  </div>
@endsection

@section('js')
  <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/pivottable/2.13.0/pivot.min.js"></script>
  <script>
    const data_single = {!! json_encode($data_single) !!};
    const data_multi = {!! json_encode($data_multi) !!};


    // table 1
    const data_1 = data_single.map(function(dataitem) {
      return {
        'Kepemilikan Utama Bisnis / Saham': dataitem[5],
        'Klasifikasi Izin Berusaha': dataitem[7]
      }
    })

    $(function() {
      $("#table1").pivot(
        data_1, {
          rows: ["Kepemilikan Utama Bisnis / Saham"],
          cols: ["Klasifikasi Izin Berusaha"],
          // colOrder: "value_a_to_z"
        }
      );
    });


    // table 2
    const data_2 = data_multi.map(function(dataitem) {
      if (dataitem['multi_10'] == undefined || dataitem['multi_10'] == null) {
        return null;
      }
      return {
        'Q5': dataitem[5],
        'Q7': dataitem[7],
        'Q10': dataitem['multi_10'],
      }
    }).filter(item => item !== null)

    $(function() {
      $("#table2").pivot(
        data_2, {
          rows: ["Q5", 'Q10'],
          cols: ["Q7"],
          // colOrder: "value_a_to_z"
        }
      );
    });


    // table 3
    const data_3 = data_single.map(function(dataitem) {
      return {
        'Kepemilikan Utama Bisnis / Saham': dataitem[5],
        'Usia Bisnis': dataitem[3]
      }
    })

    $(function() {
      $("#table3").pivot(
        data_3, {
          rows: ["Kepemilikan Utama Bisnis / Saham"],
          cols: ["Usia Bisnis"],
          // colOrder: "value_a_to_z"
        }
      );
    });

    // table 4
    const data_4 = data_single.map(function(dataitem) {
      return {
        'Kepemilikan Utama Bisnis / Saham': dataitem[5],
        'Usia Bisnis': dataitem[3],
        'jumlah Karyawan': dataitem[8]
      }
    })

    $(function() {
      $("#table4").pivot(
        data_4, {
          rows: ["Kepemilikan Utama Bisnis / Saham", "Usia Bisnis"],
          cols: ['jumlah Karyawan'],
          // colOrder: "value_a_to_z"
        }
      );
    });


    // table 5
    const data_5 = data_single.map(function(dataitem) {
      return {
        'Q5': dataitem[5],
        'Q7': dataitem[7],
        'Q11': dataitem[11]
      }
    })

    $(function() {
      $("#table5").pivot(
        data_5, {
          rows: ["Q5", "Q11"],
          cols: ['Q7'],
          // colOrder: "value_a_to_z"
        }
      );
    });


    // table 6
    const data_6 = data_single.map(function(dataitem) {
      return {
        'Q5': dataitem[5],
        'Q7': dataitem[7],
        'Q12': dataitem[12]
      }
    })

    $(function() {
      $("#table6").pivot(
        data_6, {
          rows: ["Q5", "Q12"],
          cols: ['Q7'],
          // colOrder: "value_a_to_z"
        }
      );
    });


    // table 7
    const data_7 = data_multi.map(function(dataitem) {
      if (dataitem['multi_13'] == undefined || dataitem['multi_13'] == null) {
        return null;
      }
      return {
        'Q5': dataitem[5],
        'Q7': dataitem[7],
        'Q13': dataitem['multi_13'],
      }
    }).filter(item => item !== null)


    $(function() {
      $("#table7").pivot(
        data_7, {
          rows: ["Q5", "Q13"],
          cols: ['Q7'],
          // colOrder: "value_a_to_z"
        }
      );
    });

    // table 8
    const data_8 = data_multi.map(function(dataitem) {
      if (dataitem['multi_19'] == undefined || dataitem['multi_19'] == null) {
        return null;
      }
      return {
        'Q5': dataitem[5],
        'Q12': dataitem[12],
        'Q19': dataitem['multi_19'],
      }
    }).filter(item => item !== null)


    $(function() {
      $("#table8").pivot(
        data_8, {
          rows: ["Q5"],
          cols: ['Q19'],
          // colOrder: "value_a_to_z"
        }
      );
    });
  </script>
@endsection
