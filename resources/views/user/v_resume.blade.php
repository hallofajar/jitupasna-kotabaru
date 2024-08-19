@extends('user.tamplate.v_admin_tamplate')

@section('css')
  <style>
  </style>
@endsection

@section('content')
  <div class="row justify-content-end">
    <a target="_blank" class="btn btn-success" href="{{ route('dashboard.resume.print', $region) }}">Print</a>
  </div>
  <div class="row justify-content-center">
    <div id="section-print" class="col-12 col-xs-12 col-md-11 col-lg-11 col-xl-10">
      <div class="pricing-header px-3 py-3 pt-md-5 pb-md-4 mx-auto text-center mt-1">
        <h1 class="display-4">Region {{ $region }} </h1>
        <p class="lead">Survey results of MSME Participation in Public Procurement<br>
          <b>Total: {{ $resume['q_q1']['total'] }} Respondents</b>
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
                    <small class="text-muted">©SriInstitute2023</small>
                  </div>
                </div>
              </div>
            </div>
          </div>
        @endforeach

      </div>
    </div>
  @endsection

  @section('js')
    <script src="https://cdn.jsdelivr.net/gh/emn178/chartjs-plugin-labels/src/chartjs-plugin-labels.js"></script>
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
    </script>
  @endsection
