<?= $this->extend('user/tamplate/v_admin_tamplate.php'); ?>

<?= $this->section('css'); ?>
<link rel="stylesheet" href="https://cdn.datatables.net/1.10.25/css/dataTables.bootstrap4.min.css">
<style>
  .table-body {
    overflow: hidden !important;
  }
</style>
<?= $this->endSection(); ?>

<?= $this->section('content'); ?>

<div class="row">
  <div class="col-md-12">
    <div class="card">
      <div class="card-header">
        <h4 class="card-title"> Simple Table</h4>
      </div>
      <div class="card-body ">
        <div class="table-responsive table-body">
          <table id="dataTabel" class="table table-bordered table-striped">
            <thead class="">
              <tr>
                <th scope="col">No</th>
                <th scope="col">Nama</th>
                <th scope="col">Terdaftar</th>
                <!-- <th scope="col">Login Terakhir</th> -->
                <th scope="col">Status</th>
                <th scope="col">Aksi</th>
              </tr>
            </thead>
            <tbody>
              <?php
              foreach ($data as $key => $value) { ?>

                <tr>
                  <td><?= $key + 1 ?></td>
                  <td><strong><?= $value['username'] ?></strong><br>
                    <span class="font-weight-light"><?= $value['fullname'] ?></span>
                  </td>
                  <td><?= $value['created_at'] ?></td>
                  <!-- <td><?= $value['created_at'] ?></td> -->
                  <td>
                    <?php if ($value['active'] == 1) { ?>
                      <span class="badge badge-success">Active</span>
                    <?php } else { ?>
                      <span class="badge badge-secondary">Not Active</span>
                    <?php } ?>
                  </td>
                  <td>
                    <?php if ($value['active'] == 1) { ?>
                      <a class="btn btn-sm btn-warning" href="<?= base_url('Users/Admin/active_user/' . $value['id'] . '/0') ?>">DisActive</a>
                    <?php } else { ?>
                      <a class="btn btn-sm btn-success" href="<?= base_url('Users/Admin/active_user/' . $value['id'] . '/1') ?>">Activated</a>
                    <?php } ?> <br>

                    <a href="<?= base_url('Users/Admin/delete/' . $value['id']) ?>" role="button" class="btn btn-sm btn-danger mt-1" onclick="return confirm('Yakin member <?= $value['fullname']; ?> akan dihapus?')"><i class="nc-icon nc-basket"></i></a>
                  </td>
                </tr>

              <?php } ?>
            </tbody>
          </table>
        </div>
      </div>
    </div>
    <div style="height: 40vh;"></div>
  </div>
</div>

<?= $this->endSection(); ?>

<?= $this->section('js'); ?>
<script src="https://cdn.datatables.net/1.10.25/js/jquery.dataTables.min.js"></script>
<script src="https://cdn.datatables.net/1.10.25/js/dataTables.bootstrap4.min.js"></script>
<script>
  $(document).ready(function() {
    $('#dataTabel').DataTable();
  });
</script>
<?= $this->endSection(); ?>