<!DOCTYPE html>
<html lang="en">

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://survei-jitupasna.sinaugis.com/assets/img/faviconunlock.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

  <title>Detail Responden <?= $header['title'] ?></title>
  <style>
    .main-footer {
      text-align: center;
      margin-top: 3px;
    }
  </style>
</head>
<?php
// dd($detail);
?>

<body>
  <div class="container mt-2">
    <div class="alert alert-primary text-center">
      <div class="row">
        <div class="col" colspan="2">
          <h3>Detail Data Responden</h3>
          <h3><?= $provinsi ?></h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">Enumerator: <?= $detail['a_a1'] ?></div>
        <div class="col-sm">Input: <?= $detail['start'] ?></div>
      </div>
    </div>
    <div class="table-responsive">
      <table class="table table-bordered table-striped">
        <?php
        function print_data($array)
        {
          if (is_array($array)) {
            echo '<ul>';
            foreach ($array as $item) {
              if ($item !== " ") {
                echo '<li>' . $item . '</li>';
              }
            }
            echo '</ul>';
          } else {
            echo  $array;
          }
        }
        function isset_data($b, $a)
        {
          if (isset($b[$a])) {
            print_data($b[$a]);
          }
        }
        ?>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>A. Identitas Kuesioner</h3>
          </th>
        </tr>
        <tr>
          <td>A.1. Nama pewawancara</td>
          <th><?php isset_data($detail, 'a_a1') ?></th>
        </tr>
        <tr>
          <td>A.2. Jenis komoditas</td>
          <th><?php isset_data($detail, 'a_a2') ?></th>
        </tr>
        <tr>
          <td>A.3. Nama kabupaten</td>
          <th><?php isset_data($detail, 'a_a3') ?></th>
        </tr>
        <tr>
          <td>A.4. Nama kecamatan di Kapuas Hulu</td>
          <th><?php isset_data($detail, 'kec') ?></th>
        </tr>
        <tr>
          <td>A.5. Nama desa</td>
          <th><?php isset_data($detail, 'desa') ?></th>
        </tr>
        <tr>
          <td>A.6. Nama Dusun</td>
          <th><?php isset_data($detail, 'a_a6') ?></th>
        </tr>
        <tr>
          <td>A.7. Kode Kuesioner</td>
          <th><?php isset_data($detail, 'a_a7') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>B. Identitas Responden/Usaha</h3>
          </th>
        </tr>
        <tr>
          <td>B.1. Nama Usaha</td>
          <th><?php isset_data($detail, 'b_b1') ?></th>
        </tr>
        <tr>
          <td>B.2. Alamat/Kontak</td>
          <th><?php isset_data($detail, 'b_b2') ?></th>
        </tr>
        <tr>
          <td>B.3. Jenis Kelamin Responden</td>
          <th><?php isset_data($detail, 'b_b3') ?></th>
        </tr>
        <tr>
          <td>B.4. Usia Responden</td>
          <th><?php isset_data($detail, 'b_b4') ?></th>
        </tr>
        <tr>
          <td>B.5. Jenis Usaha</td>
          <th><?php isset_data($detail, 'b_b5') ?></th>
        </tr>
        <tr>
          <td>B.6. Posisi responden</td>
          <th><?php isset_data($detail, 'b_b6') ?></th>
        </tr>
        <tr>
          <td>B.6.a. Lainnya ….</td>
          <th><?php isset_data($detail, 'b_b6a') ?></th>
        </tr>
        <tr>
          <td>B.7. Pernyataan Pemilik Bisnis (yang resmi, dalam dokumen)</td>
          <th><?php isset_data($detail, 'b_b7') ?></th>
        </tr>
        <tr>
          <td>B.8. Jenis Kelamin Pemilik Bisnis</td>
          <th><?php isset_data($detail, 'b_b8') ?></th>
        </tr>
        <tr>
          <td>B.9. Usia Pemilik Bisnis/Usaha</td>
          <th><?php isset_data($detail, 'b_b9') ?></th>
        </tr>
        <tr>
          <td>B.10. Pendidikan Pemilik Usaha</td>
          <th><?php isset_data($detail, 'b_b10') ?></th>
        </tr>
        <tr>
          <td>B.11. Etnis</td>
          <th><?php isset_data($detail, 'b_b11') ?></th>
        </tr>
        <tr>
          <td>B.11.a. Jika etnis Dayak, sebutkan sub-etnisnya….</td>
          <th><?php isset_data($detail, 'b_b11a') ?></th>
        </tr>
        <tr>
          <td>B.11.b. Jika lainnya, sebutkan …</td>
          <th><?php isset_data($detail, 'b_b11b') ?></th>
        </tr>
        <tr>
          <td>B.12. Status Pernikahan Pemilik Usaha</td>
          <th><?php isset_data($detail, 'b_b12') ?></th>
        </tr>
        <tr>
          <td>B.13. Lama bekerja di komoditas ini</td>
          <th><?php isset_data($detail, 'b_b13') ?></th>
        </tr>
        <tr>
          <td>B.14. Lama badan usaha</td>
          <th><?php isset_data($detail, 'b_b14') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>C. Pembagian Kerja</h3>
          </th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>C.1. Siapa yang bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet</h3>
          </th>
        </tr>
        <tr>
          <td>C.1.a. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengangkut produk dari petani/kebun</td>
          <th><?php isset_data($detail, 'c_c1_c1_a') ?></th>
        </tr>
        <tr>
          <td>C.1.b. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Menyortir</td>
          <th><?php isset_data($detail, 'c_c1_c1_b') ?></th>
        </tr>
        <tr>
          <td>C.1.c. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengemas komoditas</td>
          <th><?php isset_data($detail, 'c_c1_c1_c') ?></th>
        </tr>
        <tr>
          <td>C.1.d. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengelola gudang</td>
          <th><?php isset_data($detail, 'c_c1_c1_d') ?></th>
        </tr>
        <tr>
          <td>C.1.e. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Menjual (tawar-menawar harga)</td>
          <th><?php isset_data($detail, 'c_c1_c1_e') ?></th>
        </tr>
        <tr>
          <td>C.1.f. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengelola keuangan usaha</td>
          <th><?php isset_data($detail, 'c_c1_c1_f') ?></th>
        </tr>
        <tr>
          <td>C.1.g. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengelola dan mengoperasikan mesin produksi</td>
          <th><?php isset_data($detail, 'c_c1_c1_g') ?></th>
        </tr>
        <tr>
          <td>C.1.h. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Transportasi dan pengiriman barang</td>
          <th><?php isset_data($detail, 'c_c1_c1_h') ?></th>
        </tr>
        <tr>
          <td>C.1.i. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Mengelola tenaga kerja</td>
          <th><?php isset_data($detail, 'c_c1_c1_i') ?></th>
        </tr>
        <tr>
          <td>C.1.j. Bekerja di gudang/pabrik/kios untuk Kolektor/ Pedagang Karet - Menangani dokumen bisnis, izin, pajak, dll</td>
          <th><?php isset_data($detail, 'c_c1_c1_j') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>C.2. Siapa yang bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit</h3>
          </th>
        </tr>
        <tr>
          <td>C.2.a. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengangkut produk dari petani/kebun</td>
          <th><?php isset_data($detail, 'c_c2_c2_a') ?></th>
        </tr>
        <tr>
          <td>C.2.b. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Menyortir</td>
          <th><?php isset_data($detail, 'c_c2_c2_b') ?></th>
        </tr>
        <tr>
          <td>C.2.c. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengemas komoditas</td>
          <th><?php isset_data($detail, 'c_c2_c2_c') ?></th>
        </tr>
        <tr>
          <td>C.2.d. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengelola gudang</td>
          <th><?php isset_data($detail, 'c_c2_c2_d') ?></th>
        </tr>
        <tr>
          <td>C.2.e. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Menjual (tawar-menawar harga)</td>
          <th><?php isset_data($detail, 'c_c2_c2_e') ?></th>
        </tr>
        <tr>
          <td>C.2.f. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengelola keuangan usaha</td>
          <th><?php isset_data($detail, 'c_c2_c2_f') ?></th>
        </tr>
        <tr>
          <td>C.2.g. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengelola dan mengoperasikan mesin produksi</td>
          <th><?php isset_data($detail, 'c_c2_c2_g') ?></th>
        </tr>
        <tr>
          <td>C.2.h. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Transportasi dan pengiriman barang</td>
          <th><?php isset_data($detail, 'c_c2_c2_h') ?></th>
        </tr>
        <tr>
          <td>C.2.i. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Mengelola tenaga kerja</td>
          <th><?php isset_data($detail, 'c_c2_c2_i') ?></th>
        </tr>
        <tr>
          <td>C.2.j. Bekerja di gudang/pabrik/kios untuk Pengepul/ Pedagang Kelapa Sawit - Menangani dokumen bisnis, izin, pajak, dll</td>
          <th><?php isset_data($detail, 'c_c2_c2_j') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>C.3. Siapa yang bekerja di gudang/pabrik/kios untuk Grosir Karet</h3>
          </th>
        </tr>
        <tr>
          <td>C.3.a. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Pengangkutan hasil dari petani/pengumpul</td>
          <th><?php isset_data($detail, 'c_c3_c3_a') ?></th>
        </tr>
        <tr>
          <td>C.3.b. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Menyortir</td>
          <th><?php isset_data($detail, 'c_c3_c3_b') ?></th>
        </tr>
        <tr>
          <td>C.3.c. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Mengemas komoditas</td>
          <th><?php isset_data($detail, 'c_c3_c3_c') ?></th>
        </tr>
        <tr>
          <td>C.3.d. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Mengelola gudang</td>
          <th><?php isset_data($detail, 'c_c3_c3_d') ?></th>
        </tr>
        <tr>
          <td>C.3.e. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Menjual (tawar-menawar harga)</td>
          <th><?php isset_data($detail, 'c_c3_c3_e') ?></th>
        </tr>
        <tr>
          <td>C.3.f. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Mengelola keuangan usaha</td>
          <th><?php isset_data($detail, 'c_c3_c3_f') ?></th>
        </tr>
        <tr>
          <td>C.3.g. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Mengelola dan mengoperasikan mesin produksi</td>
          <th><?php isset_data($detail, 'c_c3_c3_g') ?></th>
        </tr>
        <tr>
          <td>C.3.h. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Transportasi dan pengiriman barang</td>
          <th><?php isset_data($detail, 'c_c3_c3_h') ?></th>
        </tr>
        <tr>
          <td>C.3.i. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Mengelola tenaga kerja</td>
          <th><?php isset_data($detail, 'c_c3_c3_i') ?></th>
        </tr>
        <tr>
          <td>C.3.j. Bekerja di gudang/pabrik/kios untuk Grosir Karet - Menangani dokumen bisnis, izin, pajak, dll</td>
          <th><?php isset_data($detail, 'c_c3_c3_j') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>C.4. Siapa yang bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit</h3>
          </th>
        </tr>
        <tr>
          <td>C.4.a. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Pengangkutan hasil dari petani/pengepul</td>
          <th><?php isset_data($detail, 'c_c4_c4_a') ?></th>
        </tr>
        <tr>
          <td>C.4.b. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Menyortir</td>
          <th><?php isset_data($detail, 'c_c4_c4_b') ?></th>
        </tr>
        <tr>
          <td>C.4.c. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Mengemas komoditas</td>
          <th><?php isset_data($detail, 'c_c4_c4_c') ?></th>
        </tr>
        <tr>
          <td>C.4.d. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Mengelola gudang</td>
          <th><?php isset_data($detail, 'c_c4_c4_d') ?></th>
        </tr>
        <tr>
          <td>C.4.e. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Menjual (tawar-menawar harga)</td>
          <th><?php isset_data($detail, 'c_c4_c4_e') ?></th>
        </tr>
        <tr>
          <td>C.4.f. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Mengelola keuangan usaha</td>
          <th><?php isset_data($detail, 'c_c4_c4_f') ?></th>
        </tr>
        <tr>
          <td>C.4.g. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Mengelola dan mengoperasikan mesin produksi</td>
          <th><?php isset_data($detail, 'c_c4_c4_g') ?></th>
        </tr>
        <tr>
          <td>C.4.h. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Transportasi dan pengiriman barang</td>
          <th><?php isset_data($detail, 'c_c4_c4_h') ?></th>
        </tr>
        <tr>
          <td>C.4.i. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Mengelola tenaga kerja</td>
          <th><?php isset_data($detail, 'c_c4_c4_i') ?></th>
        </tr>
        <tr>
          <td>C.4.j. Bekerja di gudang/pabrik/kios untuk Grosir Kelapa Sawit - Menangani dokumen bisnis, izin, pajak, dll</td>
          <th><?php isset_data($detail, 'c_c4_c4_j') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>D. Kepemilikan Bisnis - Profil kepemilikan dari aspek gender</h3>
          </th>
        </tr>
        <tr>
          <td>D.1. Profil kepemilikan dari aspek gender - Pemilik (dalam dokumen resmi)</td>
          <th><?php isset_data($detail, 'd_d1') ?></th>
        </tr>
        <tr>
          <td>D.2. Profil kepemilikan dari aspek gender - Investor awal</td>
          <th><?php isset_data($detail, 'd_d2') ?></th>
        </tr>
        <tr>
          <td>D.3. Profil kepemilikan dari aspek gender - Investor tambahan</td>
          <th><?php isset_data($detail, 'd_d3') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>E. Posisi dalam Manajemen - Profil manajemen dari aspek gender</h3>
          </th>
        </tr>
        <tr>
          <td>E.1. Profil manajemen dari aspek gender - Direktur Utama</td>
          <th><?php isset_data($detail, 'e_e1') ?></th>
        </tr>
        <tr>
          <td>E.2. Profil manajemen dari aspek gender - Direktur (jika ada)</td>
          <th><?php isset_data($detail, 'e_e2') ?></th>
        </tr>
        <tr>
          <td>E.3. Profil manajemen dari aspek gender - Manajemen (kepala departemen)</td>
          <th><?php isset_data($detail, 'e_e3') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>F. Proses Pengambilan Keputusan</h3>
          </th>
        </tr>
        <tr>
          <td>F.1. Pengambilan Keputusan - Produksi (Bahan baku, model produksi, penggunaan teknologi, dll.)</td>
          <th><?php isset_data($detail, 'f_f1') ?></th>
        </tr>
        <tr>
          <td>F.2. Pengambilan Keputusan - Pekerjaan tenaga kerja (rekrutmen, subkontrak, penggajian)</td>
          <th><?php isset_data($detail, 'f_f2') ?></th>
        </tr>
        <tr>
          <td>F.3. Pengambilan Keputusan - Modal finansial (mencari investor, pinjaman dll)</td>
          <th><?php isset_data($detail, 'f_f3') ?></th>
        </tr>
        <tr>
          <td>F.4. Pengambilan Keputusan - Pemasaran (dalam negeri)</td>
          <th><?php isset_data($detail, 'f_f4') ?></th>
        </tr>
        <tr>
          <td>F.5. Pengambilan Keputusan - Pemasaran (ekspor – jika ada)</td>
          <th><?php isset_data($detail, 'f_f5') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>G. Akses ke Bahan Baku</h3>
          </th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>G.1. Akses ke bahan baku. Dari mana Anda mendapatkan bahan baku berikut.</h3>
          </th>
        </tr>
        <tr>
          <td>G.1.a. Dari mana Anda mendapatkan akses ke bahan baku - Alat kerja (kereta dorong, peralatan pengering, dll.)</td>
          <th><?php isset_data($detail, 'g_g1_g1_a') ?></th>
        </tr>
        <tr>
          <td>G.1.b. Dari mana Anda mendapatkan akses ke bahan baku - Mesin (misalnya pengering, sekam, dll.)</td>
          <th><?php isset_data($detail, 'g_g1_g1_b') ?></th>
        </tr>
        <tr>
          <td>G.1.c. Dari mana Anda mendapatkan akses ke bahan baku - Tenaga kerja</td>
          <th><?php isset_data($detail, 'g_g1_g1_c') ?></th>
        </tr>
        <tr>
          <td>G.1.d. Dari mana Anda mendapatkan akses ke bahan baku - Bahan baku lainnya</td>
          <th><?php isset_data($detail, 'g_g1_g1_d') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>G.2. Akses ke bahan baku. Seberapa mudah Anda menilai akses ke bahan baku untuk bisnis?</h3>
          </th>
        </tr>
        <tr>
          <td>G.2.a. Seberapa mudah akses ke bahan baku - Peralatan (kereta dorong, peralatan pengeringan, dll.)</td>
          <th><?php isset_data($detail, 'g_g2_g2_a') ?></th>
        </tr>
        <tr>
          <td>G.2.b. Seberapa mudah akses ke bahan baku - Mesin (misalnya pengering, mesin potong, dll.)</td>
          <th><?php isset_data($detail, 'g_g2_g2_b') ?></th>
        </tr>
        <tr>
          <td>G.2.c. Seberapa mudah akses ke bahan baku - Tenaga kerja</td>
          <th><?php isset_data($detail, 'g_g2_g2_c') ?></th>
        </tr>
        <tr>
          <td>G.2.d. Seberapa mudah akses ke bahan baku - Bahan baku lainnya</td>
          <th><?php isset_data($detail, 'g_g2_g2_d') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>G.3. Akses ke bahan baku. Apa kesulitan yang dihadapi dalam memperoleh bahan baku tersebut?</h3>
          </th>
        </tr>
        <tr>
          <td>G.3.a. Kesulitan yang dihadapi dalam memperoleh bahan baku - Alat kerja</td>
          <th><?php isset_data($detail, 'g_g3_g3_a') ?></th>
        </tr>
        <tr>
          <td>G.3.b. Kesulitan yang dihadapi dalam memperoleh bahan baku - Mesin (misalnya pengering, sekam, dll.)</td>
          <th><?php isset_data($detail, 'g_g3_g3_b') ?></th>
        </tr>
        <tr>
          <td>G.3.c. Kesulitan yang dihadapi dalam memperoleh bahan baku - Tenaga kerja</td>
          <th><?php isset_data($detail, 'g_g3_g3_c') ?></th>
        </tr>
        <tr>
          <td>G.3.d. Kesulitan yang dihadapi dalam memperoleh bahan baku - Bahan baku lainnya</td>
          <th><?php isset_data($detail, 'g_g3_g3_d') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>H. Akses permodalan</h3>
          </th>
        </tr>
        <tr>
          <td>H.1. Sumber modal usaha perkebunan</td>
          <th><?php isset_data($detail, 'h_h1') ?></th>
        </tr>
        <tr>
          <td>H.2. Apakah Anda memiliki rekening di bank?</td>
          <th><?php isset_data($detail, 'h_h2') ?></th>
        </tr>
        <tr>
          <td>H.3. Apakah Anda pernah mengakses pinjaman dari bank/program pemerintah/lembaga keuangan lainnya?</td>
          <th><?php isset_data($detail, 'h_h3') ?></th>
        </tr>
        <tr>
          <td>H.3.a. Tidak tertarik, karena ....</td>
          <th><?php isset_data($detail, 'h_h3a') ?></th>
        </tr>
        <tr>
          <td>H.4. Apa kendala yang dihadapi dalam mengakses pinjaman di bank/program pemerintah/lembaga keuangan lainnya?</td>
          <th><?php isset_data($detail, 'h_h4') ?></th>
        </tr>
        <tr>
          <td>H.4.a. Lainnya, sebutkan ....</td>
          <th><?php isset_data($detail, 'h_h4a') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>I. Akses informasi, pengetahuan/keterampilan dan teknologi</h3>
          </th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>I.1. Sumber akses informasi, pengetahuan/keterampilan dan teknologi</h3>
          </th>
        </tr>
        <tr>
          <td>I.1.a. Akses sumber informasi tentang teknik pengolahan hasil panen</td>
          <th><?php isset_data($detail, 'i_i1_i1a') ?></th>
        </tr>
        <tr>
          <td>I.1.b. Akses sumber peluang pelatihan terkait pengembangan bisnis</td>
          <th><?php isset_data($detail, 'i_i1_i1b') ?></th>
        </tr>
        <tr>
          <td>I.1.c. Akses sumber teknologi yang terkait dengan pemrosesan tanaman</td>
          <th><?php isset_data($detail, 'i_i1_i1c') ?></th>
        </tr>
        <tr>
          <td>I.1.d. Akses sumber ke pasar</td>
          <th><?php isset_data($detail, 'i_i1_i1d') ?></th>
        </tr>
        <tr>
          <td>I.1.e. Akses sumber ke kebijakan dan layanan pemerintah terkait (lisensi, pajak, dll.)</td>
          <th><?php isset_data($detail, 'i_i1_i1e') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>I.2. Seberapa mudah Anda menilai informasi/pengetahuan/teknologi</h3>
          </th>
        </tr>
        <tr>
          <td>I.2.a. Seberapa mudah menilai informasi tentang teknik pengolahan hasil panen</td>
          <th><?php isset_data($detail, 'i_i2_i2a') ?></th>
        </tr>
        <tr>
          <td>I.2.a. Seberapa mudah menilai peluang pelatihan terkait pengembangan bisnis</td>
          <th><?php isset_data($detail, 'i_i2_i2b') ?></th>
        </tr>
        <tr>
          <td>I.2.a. Seberapa mudah menilai akses ke teknologi yang terkait dengan pemrosesan tanaman</td>
          <th><?php isset_data($detail, 'i_i2_i2c') ?></th>
        </tr>
        <tr>
          <td>I.2.a. Seberapa mudah menilai akses ke pasar</td>
          <th><?php isset_data($detail, 'i_i2_i2d') ?></th>
        </tr>
        <tr>
          <td>I.2.a. Seberapa mudah menilai akses ke kebijakan dan layanan pemerintah terkait (lisensi, pajak, dll.)</td>
          <th><?php isset_data($detail, 'i_i2_i2e') ?></th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>I3. Kendala utama yang dihadapi dalam mengakses sumber daya</h3>
          </th>
        </tr>
        <tr>
          <td>I.3.a. Apa kendala utama yang dihadapi dalam mengakses sumber daya di atas</td>
          <th><?php isset_data($detail, 'i_i3_i3a') ?></th>
        </tr>
        <tr>
          <td>I.3.b. Lainnya ….</td>
          <th><?php isset_data($detail, 'i_i3_i3b') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>J. Produktivitas dan Pendapatan</h3>
          </th>
        </tr>
        <tr>
          <td>J.1. Bagaimana Anda menilai pendapatan dalam 5 tahun terakhir?</td>
          <th><?php isset_data($detail, 'j_j1') ?></th>
        </tr>
        <tr>
          <td>J.2.a. Apa kesulitan utama yang Anda temui dalam mengelola bisnis Anda?</td>
          <th><?php isset_data($detail, 'j_j2a') ?></th>
        </tr>
        <tr>
          <td>J.2.b. Lainnya ….</td>
          <th><?php isset_data($detail, 'j_j2b') ?></th>
        </tr>
        <tr>
          <td>J.3.a. Berapa pendapatan bersih anda dari usaha komoditi (kopi/kakao/karet/sawit) per tahun? - Kolektor tingkat desa</td>
          <th><?php isset_data($detail, 'j_j3a') ?></th>
        </tr>
        <tr>
          <td>J.3.b. Berapa pendapatan bersih anda dari usaha komoditi (kopi/kakao/karet/sawit) per tahun? - Kolektor tingkat kabupaten/kabupaten</td>
          <th><?php isset_data($detail, 'j_j3b') ?></th>
        </tr>
        <tr>
          <td>J.3.c. Berapa pendapatan bersih anda dari usaha komoditi (kopi/kakao/karet/sawit) per tahun? - Pedagang Besar (Kabupaten/Provinsi)</td>
          <th><?php isset_data($detail, 'j_j3c') ?></th>
        </tr>
        <tr>
          <td>J.3.d. Berapa pendapatan bersih anda dari usaha komoditi (kopi/kakao/karet/sawit) per tahun? - Pedagang grosir/eksportir</td>
          <th><?php isset_data($detail, 'j_j3d') ?></th>
        </tr>
        <tr>
          <td>J.4. Secara total, berapa persen pendapatan Anda dari komoditas (kopi/kakao/karet/sawit) dibandingkan dengan total pendapatan tahunan Anda (misalnya sebagai pegawai negeri)?</td>
          <th><?php isset_data($detail, 'j_j4') ?></th>
        </tr>
        <tr>
          <td>J.5. Bagaimana pendapatan anda dari komoditi (kopi/kakao/karet/sawit) dalam 5 tahun terakhir?</td>
          <th><?php isset_data($detail, 'j_j5') ?></th>
        </tr>
        <tr>
          <td>J.6. Apa kesulitan/tantangan utama yang mempengaruhi pendapatan dari usaha komoditas</td>
          <th><?php isset_data($detail, 'j_j6') ?></th>
        </tr>
        <tr>
          <td>J.6.b. Lainnya ….</td>
          <th><?php isset_data($detail, 'j_j6b') ?></th>
        </tr>
        <tr>
          <td>J.7.a. Bagaimana alokasi pendapatan dari hasil kebun?</td>
          <th><?php isset_data($detail, 'j_j7a') ?></th>
        </tr>
        <tr>
          <td>J.7.b. Lainnya ….</td>
          <th><?php isset_data($detail, 'j_j7b') ?></th>
        </tr>
        <tr>
          <td>J.8.a. Dukungan apa yang dibutuhkan pelaku usaha?</td>
          <th><?php isset_data($detail, 'j_j8a') ?></th>
        </tr>
        <tr>
          <td>J.8.b. Lainnya ….</td>
          <th><?php isset_data($detail, 'j_j8b') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>K. Rantai Nilai</h3>
          </th>
        </tr>
        <tr>
          <td>K.1. Di mana posisi bisnis Anda dalam rantai nilai produk/komoditas? (Periksa posisi bisnis dalam rantai nilai</td>
          <th><?php isset_data($detail, 'k_k1') ?></th>
        </tr>
        <tr>
          <td>K.2.a.1. Kegiatan apa yang anda lakukan pada posisi tersebut - Input</td>
          <th><?php isset_data($detail, 'k_k2a1') ?></th>
        </tr>
        <tr>
          <td>K.2.a.2 Lainnya ….</td>
          <th><?php isset_data($detail, 'k_k2a2') ?></th>
        </tr>
        <tr>
          <td>K.2.b. Kegiatan apa yang anda lakukan pada posisi tersebut - Produksi</td>
          <th><?php isset_data($detail, 'k_k2b') ?></th>
        </tr>
        <tr>
          <td>K.2.c. Kegiatan apa yang anda lakukan pada posisi tersebut - Pascaproduksi</td>
          <th><?php isset_data($detail, 'k_k2c') ?></th>
        </tr>
        <tr>
          <td>K.2.d. Kegiatan apa yang anda lakukan pada posisi tersebut - Perdagangan</td>
          <th><?php isset_data($detail, 'k_k2d') ?></th>
        </tr>
        <tr>
          <td>K.3. Apakah Anda tahu di mana produk Anda akan berakhir?</td>
          <th><?php isset_data($detail, 'k_k3') ?></th>
        </tr>
        <tr>
          <td>K.4.a.Perubahan harga di setiap bagian dari rantai nilai - Input</td>
          <th><?php isset_data($detail, 'k_k4a') ?></th>
        </tr>
        <tr>
          <td>K.4.b.Perubahan harga di setiap bagian dari rantai nilai - Produksi</td>
          <th><?php isset_data($detail, 'k_k4b') ?></th>
        </tr>
        <tr>
          <td>K.4.c.Perubahan harga di setiap bagian dari rantai nilai - Pascaproduksi</td>
          <th><?php isset_data($detail, 'k_k4c') ?></th>
        </tr>
        <tr>
          <td>K.4.d.Perubahan harga di setiap bagian dari rantai nilai - Perdagangan</td>
          <th><?php isset_data($detail, 'k_k4d') ?></th>
        </tr>
        <tr>
          <td>K.5. Perubahan harga di setiap bagian dari rantai nilai - Perdagangan</td>
          <th><?php isset_data($detail, 'k_k5') ?></th>
        </tr>
        <tr>
          <td>K.6. Siapa yang mendominasi posisi tersebut?</td>
          <th><?php isset_data($detail, 'k_k6') ?></th>
        </tr>
        <tr>
          <td>K.7. Apakah Anda tertarik untuk berada di posisi yang menguntungkan ini?</td>
          <th><?php isset_data($detail, 'k_k7') ?></th>
        </tr>
        <tr>
          <td>K.7.a. Kalau Ya, maka saya akan melakukan …</td>
          <th><?php isset_data($detail, 'k_k7a') ?></th>
        </tr>
        <tr>
          <td>K.7.b. Kalau tidak karena ...</td>
          <th><?php isset_data($detail, 'k_k7b') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>K. Petani Perempuan</h3>
          </th>
        </tr>
        <tr>
          <td>L.1. Apakah ada kendala yang Anda temui sebagai perempuan dalam mengelola usaha?</td>
          <th><?php isset_data($detail, 'l_l1') ?></th>
        </tr>
        <tr>
          <td>L.1.a. Kalau Ya, sebutkan …</td>
          <th><?php isset_data($detail, 'l_l1a') ?></th>
        </tr>
        <tr>
          <td>L.2. Apakah ada perbedaan antara hambatan/tantangan yang Anda hadapi dalam mengelola kebun Anda, antara Anda sebagai pengusaha perempuan dan laki-laki?</td>
          <th><?php isset_data($detail, 'l_l2') ?></th>
        </tr>
        <tr>
          <td>L.2.a. Kalau Ya, sebutkan …</td>
          <th><?php isset_data($detail, 'l_l2a') ?></th>
        </tr>
        <tr>
          <td>L.3. Dengan tantangan yang Anda hadapi di atas, dukungan apa yang dibutuhkan untuk meningkatkan posisi Anda sebagai pengusaha perempuan?</td>
          <th><?php isset_data($detail, 'l_l3') ?></th>
        </tr>
        <tr>
          <td>L.3.a. Lainnya, sebutkan …</td>
          <th><?php isset_data($detail, 'l_l3a') ?></th>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>M. Pertanyaan untuk Semua Responden</h3>
          </th>
        </tr>
        <tr>
          <th colspan='3' class='bg-success text-light'>
            <h3>M.1. Perilaku berikut yang termasuk dalam kategori tindak kekerasan</h3>
          </th>
        </tr>
        <tr>
          <td>M.1.a. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Memukul</td>
          <th><?php isset_data($detail, 'm_m1_m1a') ?></th>
        </tr>
        <tr>
          <td>M.1.b. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Kekerasan psikologis</td>
          <th><?php isset_data($detail, 'm_m1_m1b') ?></th>
        </tr>
        <tr>
          <td>M.1.c. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Pelecehan seksual</td>
          <th><?php isset_data($detail, 'm_m1_m1c') ?></th>
        </tr>
        <tr>
          <td>M.1.d. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Perkosaan</td>
          <th><?php isset_data($detail, 'm_m1_m1d') ?></th>
        </tr>
        <tr>
          <td>M.1.e. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Suit-suit (cat calling)</td>
          <th><?php isset_data($detail, 'm_m1_m1e') ?></th>
        </tr>
        <tr>
          <td>M.1.f. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Pengabaian ekonomi</td>
          <th><?php isset_data($detail, 'm_m1_m1f') ?></th>
        </tr>
        <tr>
          <td>M.1.g. Menurut Anda, perilaku berikut termasuk dalam kategori tindak kekerasan - Distribusi foto/video pribadi secara online</td>
          <th><?php isset_data($detail, 'm_m1_m1g') ?></th>
        </tr>
        <tr>
          <td>M.2. Pernahkah Anda mengalami/mendengar/melihat/menyaksikan kasus kekerasan terhadap perempuan (misalnya kekerasan dalam rumah tangga, pemukulan, penelantaran) di lingkungan Anda?</td>
          <th><?php isset_data($detail, 'm_m1_m2') ?></th>
        </tr>
        <tr>
          <td>M.3. Apa yang akan Anda lakukan jika Anda mendengar/melihat/menyaksikan/mengalami kekerasan terhadap perempuan?</td>
          <th><?php isset_data($detail, 'm_m1_m3') ?></th>
        </tr>
        <tr>
          <td>M.4. Apakah Anda menyimpan informasi kontak untuk lembaga/pihak/petugas penegak hukum yang dapat dihubungi jika mengalami/mendengar/melihat/menyaksikan kekerasan terhadap perempuan?</td>
          <th><?php isset_data($detail, 'm_m1_m4') ?></th>
        </tr>

      </table>
    </div>

    <hr>
    <footer class="main-footer">
      <strong>GIZ​<br>Copyright &copy; 2021 </strong>
    </footer>
  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>