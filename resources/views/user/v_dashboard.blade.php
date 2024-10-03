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
                      {{ $datasurvei['a_a8']['total'] }}
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

        <div class="col-lg-6 col-md-6 col-sm-6" style="margin-bottom: 400px">
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
                    <p class="card-category">{{ $datasurvei['a_a8']['ket'][0] }}</p>
                    <p class="card-title">{{ $datasurvei['a_a8']['jumlah'][0] }}</p>
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
                    <p class="card-category">{{ $datasurvei['a_a8']['ket'][1] }}</p>
                    <p class="card-title">{{ $datasurvei['a_a8']['jumlah'][1] }}</p>
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

    </div>
  </div>

  <div class="row">

  </div>
@endsection

@section('js')
  <script></script>
@endsection
