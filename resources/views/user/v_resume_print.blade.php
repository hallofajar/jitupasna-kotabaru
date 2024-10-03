<!doctype html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="unsorry - sinaugis">
  <title>Resume</title>
  <link rel="icon" href="https://survei-jitupasna.sinaugis.com/assets/img/faviconunlock.png">

  <!-- Bootstrap core CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">
  <!-- Fontawesome CSS Library -->
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.11.2/css/all.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.css">

  <style>
    .bd-placeholder-img {
      font-size: 1.125rem;
      text-anchor: middle;
      -webkit-user-select: none;
      -moz-user-select: none;
      -ms-user-select: none;
      user-select: none;
    }

    @media (min-width: 768px) {
      .bd-placeholder-img-lg {
        font-size: 3.5rem;
      }
    }

    th {
      text-align: center;
    }

    .td-frek {
      text-align: right;
    }
  </style>
</head>

<body>
  <!-- Bootstrap Javascript Library -->
  <script src="https://code.jquery.com/jquery-3.4.1.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.0/dist/umd/popper.min.js"></script>
  <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/js/bootstrap.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.9.4/Chart.min.js"></script>
  <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>


  <!-- End of Topbar -->

  <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mt-1">
    <h1 class="display-4">JITUPASNA ROB KOTABARU </h1>
    <p class="lead">Survey pengkajian kebutuhan pasca-bencana<br>

      <b>Total: {{ $resume['a_a8']['total'] }} Respondents</b>

    </p>
  </div>

  <div class="container">


    @foreach ($resume as $key => $value)
      <div class="card-deck mb-3">
        <div class="card mb-4 shadow-sm">
          <div class="card-header">
            <h4 class="my-0 font-weight-normal">
              {{ $value['info']['kode'] . ' ' . $value['info']['judul'] }}</h4>
          </div>
          <div class="card-body">
            <div class="row">
              <div class="col-sm">
                <canvas id="c_{{ $key }}" width="150" height="150"></canvas>

              </div>
              <div class="col-sm">
                <table class="table table-sm table-bordered table-striped mt-2">

                  <tr>
                    <th>Number</th>
                    <th>Description</th>
                    <th>Frequency</th>
                    <th>%</th>
                  </tr>
                  @foreach ($value['ket'] as $key1 => $item1)
                    <tr>
                      <td>{{ $key1 + 1 }}</td>
                      <td>{{ $item1 }} </td>
                      <td class="td-frek">{{ $resume[$key]['jumlah'][$key1] }} </td>
                      <td class="td-frek">
                        {{ round(100 * ($resume[$key]['jumlah'][$key1] / $resume[$key]['total']), 2) }} %
                      </td>
                    </tr>
                  @endforeach

                </table>
                <small class="text-muted">*number of respondents: {{ $resume[$key]['total_responden'] }}</small>
              </div>
            </div>
            <div class="row">
              <div class="col align-middle text-center">
                <small class="text-muted">©HalloFajar2024</small>
              </div>
            </div>
          </div>
        </div>
      </div>
    @endforeach


    <footer class="pt-4 my-md-5 pt-md-5 border-top">
      HalloFajar <br>Copyright &copy; 2024
    </footer>
  </div>
  <script>
    @foreach ($resume as $key => $value)

      @php
        if (count($value['ket']) > 12) {
            $jum_data = 12;
        } else {
            $jum_data = count($value['ket']);
        }
      @endphp





      @if (($value['info']['grafik'] == 'doughnut') | ($value['info']['grafik'] == 'pie'))
        new Chart(document.getElementById("c_{{ $key }}"), {
          type: "{{ $value['info']['grafik'] }}",
          data: {
            labels: {!! json_encode($value['ket']) !!},
            datasets: [{
              label: "Responden",
              data: {!! json_encode($value['jumlah']) !!},
              backgroundColor: {!! json_encode($color[$value['info']['jenis_data']][$jum_data]) !!}
            }]
          },
          options: {
            plugins: {
              labels: {
                render: 'percentage',
                precision: 2,
                fontStyle: 'bold',
                fontColor: '#000',
              }
            }
          }
        });
      @endif

      @if ($value['info']['grafik'] == 'bar')
        new Chart(document.getElementById("c_{{ $key }}"), {
          type: "{{ $value['info']['grafik'] }}",
          data: {

            @php

              $sorten = false;
              $a = $value['ket'];

              foreach ($a as $item) {
                  if (strlen($item) > 30) {
                      $sorten = true;
                  }
              }

              if (strlen(json_encode($a)) > 160) {
                  $sorten = true;
              }

              if ($sorten) {
                  $a = [];
                  foreach ($value['ket'] as $key1 => $value1) {
                      array_push($a, 'Ket. No ' . strval($key1 + 1));
                  }
              }
            @endphp

            labels: {!! json_encode($a) !!},

            datasets: [{
              label: "Responden",
              data: {!! json_encode($value['jumlah']) !!},
              backgroundColor: {!! json_encode($color[$value['info']['jenis_data']][$jum_data]) !!}
            }]
          },
          options: {
            plugins: {
              labels: {
                render: 'value',
                fontStyle: 'bold',
                fontColor: '#000',
              },
              responsive: true,
              legend: {
                display: false,
                labels: {
                  boxWidth: 0
                }
              }
            }
          }
        });
      @endif
    @endforeach


    $(document).ready(function() {

      setTimeout(function() {
        window.print();
      }, 1000);
    });
  </script>
</body>

</html>
