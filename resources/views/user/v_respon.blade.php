@extends('user/tamplate/v_admin_tamplate')

@section('css')
  <link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
  <style>
    .table-body {
      overflow: hidden !important;
    }
  </style>
@endsection

@section('content')
  <div class="row">
    <div class="col-md-12">
      <div class="card">
        <!-- <div class="card-header">
                      <h4 class="card-title"> Simple Table</h4>
                    </div> -->
        <div class="card-body">
          <div class="table-responsive table-body">
            <table id="dataTabel" class="table table-bordered table-striped">
              <thead class="">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Nama</th>
                  <th scope="col">Status Kerja</th>
                  <th scope="col">Enum</th>
                  <th scope="col">Detail</th>
                </tr>
              </thead>
              <tfoot class="">
                <tr>
                  <th scope="col">No</th>
                  <th scope="col">Kode</th>
                  <th scope="col">Komoditas</th>
                  <th scope="col">Enum</th>
                  <th scope="col">Detail</th>
                </tr>
              </tfoot>
              <tbody>

                <?php
							$i = 1;
							foreach ($tabel_data as $key => $value) {
							?>
                <tr>
                  <td scope="row"><?= $i++ ?></td>
                  <th><?= $value['responden'] ?></th>
                  <th><?= $value['Jabatan'] ?><br>
                    <span class="font-weight-light">
                      <?= $value['Perusahaan'] ?>
                    </span>
                  </th>

                  <td><?= $value['enumerator'] ?><br><span class="font-weight-light">
                      Mulai survei: <?= $value['start'] ?><br>
                      <!-- Selesai survei: <?= $value['end'] ?><br> -->
                      Waktu survei: <?= $value['waktu_wawancara']['jam'] ?> Jam, <?= $value['waktu_wawancara']['menit'] ?>
                      Menit</span></td>
                  <td class="text-center"><a
                      href="{{ route('user.respon.detail', ['id' => $value['id'], 'region' => $region]) }}"
                      target="_blank" class="btn btn-primary btn-sm mb-1" role="button" aria-pressed="true"><i
                        class="fas fa-file-alt"></i> Detail</a>
                  </td>
                </tr>
                <?php } ?>

              </tbody>
            </table>
          </div>
        </div>
      </div>
    </div>
  </div>
  <div style="height: 50vh;"></div>
@endsection

@section('js')
  <script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
  <script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
  <script>
    $(document).ready(function() {
      $('#dataTabel').DataTable();
    });
  </script>
@endsection
