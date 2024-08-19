@extends('user.tamplate.v_admin_tamplate')

@section('css')
@endsection


@section('content')
  <div class="d-flex justify-content-center">
    <div class="col-12 col-xs-12 col-md-12 col-lg-11 col-xl-10">
      <div class="row">
        <div class="col-md-12 mb-0 ">
          <div class="card card-plain mb-0">
            <div class="card-header mb-0 py-0">

            </div>
          </div>
        </div>

        <div class="col-lg-12 col-md-12 col-sm-12">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Semua Responden</p>
                    <p class="card-title">
                      {{ $datasurvei['sidoarjo'] + $datasurvei['surabaya'] + $datasurvei['bekasi'] + $datasurvei['jakarta timur'] + $datasurvei['bandung'] + $datasurvei['jakarta barat'] }}
                    </p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Sidoarjo</p>
                    <p class="card-title">{{ $datasurvei['sidoarjo'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>

        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Surabaya</p>
                    <p class="card-title">{{ $datasurvei['surabaya'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Bekasi</p>
                    <p class="card-title">{{ $datasurvei['bekasi'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>


        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Jakarta Timur</p>
                    <p class="card-title">{{ $datasurvei['jakarta timur'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Jakarta Barat</p>
                    <p class="card-title">{{ $datasurvei['jakarta barat'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>
        <div class="col-lg-6 col-md-6 col-sm-6">
          <div class="card card-stats">
            <div class="card-body ">
              <div class="row">
                <div class="col-5 col-md-4">
                  <div class="icon-big text-center icon-warning">
                    <i class="nc-icon nc-globe text-warning"></i>
                  </div>
                </div>
                <div class="col-7 col-md-8">
                  <div class="numbers">
                    <p class="card-category">Bandung</p>
                    <p class="card-title">{{ $datasurvei['bandung'] }}</p>
                  </div>
                </div>
              </div>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-refresh"></i>
                Jumlah Responden
              </div>
            </div>
          </div>
        </div>
      </div>


      {{-- <div class="row">
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Sidoarjo</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Surabaya</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Bekasi</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Jakarta Timur</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Jakarta Barat</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
        <div class=" col-md-6">
          <div class="card ">
            <div class="card-header">
              <h5 class="card-title">Bandung</h5>
              <p class="card-category">Jumlah Responden Surveior </p>
            </div>
            <div class="card-body ">
              <canvas id="chart_sumut" width="400" height="200"></canvas>
            </div>
            <div class="card-footer ">
              <hr>
              <div class="stats">
                <i class="fa fa-history"></i> Update setiap 5 menit
              </div>
            </div>
          </div>
        </div>
      </div> --}}

    </div>
  </div>

  <div class="row">

  </div>
@endsection

@section('js')
  <script></script>
@endsection
