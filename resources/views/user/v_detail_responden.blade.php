<!DOCTYPE html>
<html lang="en">

@php
  function ubahArraytoList($array)
  {
      if (is_array($array)) {
          $list = '<ul>';
          foreach ($array as $key => $value) {
              $list .= '<li>' . $value . '</li>';
          }
          $list .= '</ul>';
          return $list;
      } else {
          return $array;
      }
  }

  function isset_data($data, $key)
  {
      if (isset($data[$key])) {
          return ubahArraytoList($data[$key]);
      } else {
          return '';
      }
  }

@endphp

<head>
  <!-- Required meta tags -->
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="icon" href="https://survei-jitupasna.sinaugis.com/assets/img/faviconunlock.png">

  <!-- Bootstrap CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css">

  <title>Detail Responden <?= $title ?></title>
  <style>
    .main-footer {
      text-align: center;
      margin-top: 3px;
    }

    ul {
      padding-inline-start: 20px;
    }
  </style>
</head>

<body>
  <div class="container mt-2">
    <div class="alert alert-primary text-center">
      <div class="row">
        <div class="col" colspan="2">
          <h3>Detail Data Responden</h3>
          <h3>Region {{ $region }}</h3>
        </div>
      </div>
      <div class="row">
        <div class="col-sm">Enumerator: {{ $detail['username'] }}</div>
        <div class="col-sm">Input: {{ date('d-m-Y  h:i', strtotime($detail['start'])) }}</div>
      </div>
    </div>
    @php

    @endphp

    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th colspan='3' class='bg-info text-light'>
            <h3>Keterangan tambahan</h3>
          </th>
        </tr>
        <tr>
          <td>Catatan</td>
          <th> {{ isset_data($detail, 'catatan') }}</th>
        </tr>
      </table>
    </div>



    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th class='bg-info text-light'>
            <h3>Profil dan Latar Belakang</h3>
          </th>
        </tr>
        <tr>
          <th>1. Jenis Kelamin Responden</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q1') !!}</td>
        </tr>
        <tr>
          <th>2. Jabatan/peran Responden di Perusahaan</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q2') !!}</td>
        </tr>
        <tr>
          <th>2a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q2_a') !!}</td>
        </tr>
        <tr>
          <th>3. Usia responden</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q3') !!}</td>
        </tr>
        <tr>
          <th>4. Tingkat pendidikan tertinggi responden</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q4') !!}</td>
        </tr>
        <tr>
          <th>5. Kepemilikan saham utama perusahaan</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q5') !!}</td>
        </tr>
        <tr>
          <th>6. Hubungan Responden dengan pemilik usaha</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q6') !!}</td>
        </tr>
        <tr>
          <th>6a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q6_a') !!}</td>
        </tr>
        <tr>
          <th>7. Klasifikasi izin usaha yang dimiliki perusahaan</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q7') !!}</td>
        </tr>
        <tr>
          <th>7a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q7_a') !!}</td>
        </tr>
        <tr>
          <th>8. Jumlah pekerja di perusahaan</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q8') !!}</td>
        </tr>
        <tr>
          <th>9. Berapa umur usaha Anda</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q9') !!}</td>
        </tr>
        <tr>
          <th>10. Sektor apa saja yang digeluti oleh Perusahaan Anda? (Anda boleh memilih lebih dari 1 (satu) jawaban)
          </th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q10') !!}</td>
        </tr>
        <tr>
          <th>10a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q10_a') !!}</td>
        </tr>
        <tr>
          <th>10b. Jika Anda menjawab perdagangan besar dan eceran pada pertanyaan 10, usaha apa yang Anda geluti?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q10_b') !!}</td>
        </tr>
        <tr>
          <th>10c. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q10_c') !!}</td>
        </tr>
        <tr>
          <th>11. Omset tahunan Perusahaan Anda pada tahun 2022 adalah</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'q_q11') !!}</td>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th class='bg-info text-light'>
            <h3>Pengalaman mengikuti tender pengadaan pemerintah</h3>
          </th>
        </tr>
        <tr>
          <th>12. Pernahkah Anda mencoba berpartisipasi dalam peluang pengadaan pemerintah?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q12') !!}</td>
        </tr>
        <tr>
          <th>14. Apakah menurut Anda, persepsi pebisnis perempuan dibandingkan pebisnis laki-laki berbeda dalam melihat
            hambatan berpartisipasi dalam pengadaan pemerintah?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q14') !!}</td>
        </tr>
        <tr>
          <th>13. Mengapa Anda belum mencoba berpartisipasi? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q13') !!}</td>
        </tr>
        <tr>
          <th>13a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q13_a') !!}</td>
        </tr>
        <tr>
          <th>15. Apakah Anda sudah mencoba melalui website SPSE atau LPSE baik tingkat nasional, provinsi, atau
            kabupaten/kota untuk mendaftar sebagai vendor pemerintah?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q15') !!}</td>
        </tr>
        <tr>
          <th>16. Mengapa Anda belum mengakses sistem e-procurement? (Anda boleh memilih lebih dari 1 (satu) jawaban)
          </th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q16') !!}</td>
        </tr>
        <tr>
          <th>16a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q16_a') !!}</td>
        </tr>
        <tr>
          <th>17. Bagaimana Anda mengetahui peluang pengadaan barang/jasa pemerintah? (Anda boleh memilih lebih dari 1
            (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q17') !!}</td>
        </tr>
        <tr>
          <th>18. Bagaimana Anda mengetahui peluang pengadaan barang/jasa pemerintah? (Anda boleh memilih lebih dari 1
            (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q18') !!}</td>
        </tr>
        <tr>
          <th>18a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q18_a') !!}</td>
        </tr>
        <tr>
          <th>19. Untuk proyek di sektor manakah, Perusahaan Anda ikut tender? (Anda boleh memilih lebih dari 1 (satu)
            jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q19') !!}</td>
        </tr>
        <tr>
          <th>19a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q19_a') !!}</td>
        </tr>
        <tr>
          <th>20. Paket pengadaan pemerintah manakah yang diikuti oleh perusahaan Anda? (Anda boleh memilih lebih dari 1
            (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q20') !!}</td>
        </tr>
        <tr>
          <th>21. Berapa kali perusahaan Anda berpartisipasi dalam tender pengadaan pemerintah dalam 12 bulan terakhir?
          </th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q21') !!}</td>
        </tr>
        <tr>
          <th>22. Apakah perusahaan Anda pernah memenangkan kontrak dari proses pengadaan?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q22') !!}</td>
        </tr>
        <tr>
          <th>23. Berapa nilai rata-rata/skala kontrak tender yang Perusahaan Anda ikuti?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q23') !!}</td>
        </tr>
        <tr>
          <th>24. Jenis paket tender apa saja yang pernah Anda ikuti? (Anda boleh memilih lebih dari 1 (satu) jawaban)
          </th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q24') !!}</td>
        </tr>
        <tr>
          <th>25. Paket 'Non Tender' manakah yang Perusahaan Anda pernah diundang/ diikuti? (Anda boleh memilih lebih
            dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q25') !!}</td>
        </tr>
        <tr>
          <th>26. Elemen manakah yang biasanya menjadi pertimbangan utama Perusahaan Anda ketika mengikuti proses
            pengadaan? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'b_tenderpemerintah_q26') !!}</td>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th class='bg-info text-light'>
            <h3>Ekosistem - Lingkungan Pendukung Bisnis untuk Mendorong Partisipasi UMKM dalam Pengadaan Pemerintah</h3>
          </th>
        </tr>
        <tr>
          <th>27. Apakah Anda tahu bahwa ada peraturan yang mengizinkan usaha mikro, kecil, dan menengah untuk mengikuti
            tender pengadaan barang dan jasa pemerintah senilai hingga Rp15 miliar?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q27') !!}</td>
        </tr>
        <tr>
          <th>28. Apakah Anda mengetahui adanya kebijakan yang mengutamakan partisipasi usaha milik perempuan dalam
            pengadaan publik?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q28') !!}</td>
        </tr>
        <tr>
          <th>29. Apakah Anda tertarik untuk mengetahui lebih lanjut bagaimana perusahaan Anda dapat mengakses pengadaan
            pemerintah?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q29') !!}</td>
        </tr>
        <tr>
          <th>30. Apakah Anda ingin memanfaatkan peluang peraturan baru tersebut ?</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q30') !!}</td>
        </tr>
        <tr>
          <th>31. Apakah jenis pinjaman Perusahaan Anda saat ini, baik pinjaman/kredit dari bank, maupun dari lembaga
            keuangan non-perbankan lainnya? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q31') !!}</td>
        </tr>
        <tr>
          <th>31a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q31a') !!}</td>
        </tr>
        <tr>
          <th>32. Bentuk dukungan pemerintah apa saja yang Perusahaan Anda dapatkan dalam memfasilitasi partisipasi UMKM
            dalam pengadaan pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'c_ekosistem_partisipasi_umkm_q32') !!}</td>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th class='bg-info text-light'>
            <h3>Manfaat Berpartisipasi dalam Pengadaan Pemerintah</h3>
          </th>
        </tr>
        <tr>
          <th>Untuk bisnis yang belum pernah berpartisipasi dalam pengadaan pemerintah, lanjutkan ke pertanyaan 35</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'd_manfaat_pengadaan_pemerintah_pembuka') !!}</td>
        </tr>
        <tr>
          <th>33. Berapa persentase pendapatan tahunan perusahaan Anda yang berasal dari kontrak pengadaan pemerintah?
          </th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'd_manfaat_pengadaan_pemerintah_q33') !!}</td>
        </tr>
        <tr>
          <th>34. Apa manfaat terbesar yang Perusahaan Anda dapatkan dari berpartisipasi dalam pengadaan pemerintah?
            (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'd_manfaat_pengadaan_pemerintah_q34') !!}</td>
        </tr>
        <tr>
          <th>34a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'd_manfaat_pengadaan_pemerintah_q34a') !!}</td>
        </tr>
      </table>
    </div>
    <div class='table-responsive'>
      <table class='table table-bordered table-striped'>
        <tr>
          <th class='bg-info text-light'>
            <h3>Rencana Ke Depan</h3>
          </th>
        </tr>
        <tr>
          <th>35. Situasi apa yang perlu diperbaiki agar dapat membantu bisnis Anda untuk dapat mengambil bagian sebagai
            vendor pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'e_rencana_ke_depan_q35') !!}</td>
        </tr>
        <tr>
          <th>36. Program/kegiatan/dukungan apa yang dibutuhkan Perusahaan Anda agar dapat berpartisipasi secara efektif
            dalam pengadaan barang dan jasa pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'e_rencana_ke_depan_q36') !!}</td>
        </tr>
        <tr>
          <th>36a. Jika lainnya, sebutkan….</th>
        </tr>
        <tr>
          <td>{!! isset_data($detail, 'e_rencana_ke_depan_q36a') !!}</td>
        </tr>
      </table>
    </div>


    <hr>
    <footer class="main-footer">
      <strong>SinauGIS<br>Copyright &copy; 2022 </strong>
    </footer>
  </div>




  <!-- Option 1: Bootstrap Bundle with Popper -->
  <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
    integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"></script>

</body>

</html>
