<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class dataSetting extends Controller
{
	public function dataSetting()
	{
		$data = [
			"pilihan" => [
				" " => " ",
				"ya" => "Ya",
				"tidak" => "Tidak",
				"q1a" => "Laki-laki",
				"q1b" => "Perempuan",
				"q2a" => "Pemilik",
				"q2b" => "Direktur",
				"q2c" => "Pengelola",
				"q2d" => "Yang lain, ….sebutkan",
				"q3a" => "Dibawah 20 Tahun",
				"q3b" => "20 - 30 Tahun",
				"q3c" => "31 - 40 Tahun",
				"q3d" => "41 - 50 Tahun",
				"q3e" => "Di atas 50 Tahun",
				"q4a" => "Sekolah Dasar",
				"q4b" => "Sekolah Menengah Pertama",
				"q4c" => "SMA",
				"q4d" => "Gelar diploma/sarjana (sarjana).",
				"q4e" => "Gelar pascasarjana",
				"q5a" => "Semua laki-laki",
				"q5b" => "Semua perempuan",
				"q5c" => "Lebih banyak laki-laki dibandingkan perempuan",
				"q5d" => "Lebih banyak perempuan dibandingkan laki-laki",
				"q5e" => "Tidak tahu",
				"q6a" => "Diri sendiri",
				"q6b" => "Istri",
				"q6c" => "Suami",
				"q6d" => "Orang tua",
				"q6e" => "Anak",
				"q6f" => "Lainnya, … sebutkan",
				"q7a" => "Nomor Induk Berusaha (NIB) Perorangan",
				"q7b" => "NIB berbadan hukum PT",
				"q7c" => "NIB berbadan hukum CV",
				"q7d" => "NIB berbadan hukum Koperasi",
				"q7e" => "Lainnya.................................",
				"q8a" => "Kurang dari 5 orang",
				"q8b" => "5 - 19 orang",
				"q8c" => "20 - 99 orang",
				"q8d" => "Lebih dari 100 orang",
				"q9a" => "Lebih dari 10 tahun",
				"q9b" => "5 sampai 10 tahun",
				"q9c" => "2 - 5 tahun",
				"q9d" => "Kurang dari 2 Tahun",
				"q9e" => "Tidak tahu",
				"q10a" => "Pertanian, Kehutanan dan Perikanan",
				"q10b" => "Konstruksi",
				"q10c" => "Perdagangan besar dan eceran",
				"q10d" => "Pengangkutan dan logistik",
				"q10e" => "Informasi dan Komunikasi (Peralatan)",
				"q10f" => "Industri manufaktur (termasuk industri olahan makanan)",
				"q10g" => "Seni, hiburan, dan rekreasi (pertunjukan seni)",
				"q10h" => "Kegiatan penyewaan (konferensi, pameran,, termasuk ‘event organizer)",
				"q10i" => "Jasa lainnya (organisasi/ asosiasi, fitness, salon, laundry, jasa kebersihan, internet dan multimedia dll.)",
				"q10j" => "Lainnya, sebutkan",
				"q10_1a" => "Makanan pokok",
				"q10_1b" => "Makanan dan minuman",
				"q10_1c" => "Peralatan elektronik",
				"q10_1d" => "Bahan bangunan",
				"q10_1e" => "Kerajinan tangan",
				"q10_1f" => "Pakaian dan alas kaki",
				"q10_1g" => "Katering",
				"q10_1h" => "Baju seragam",
				"q10_1i" => "Alat tulis kantor",
				"q10_1j" => "Percetakan",
				"q10_1k" => "Lainnya…...sebutkan",
				"q11a" => "Di bawah Rp 100 juta",
				"q11b" => "Pada kisaran Rp 100.000.001 - Rp 999.999.000",
				"q11c" => "Pada kisaran Rp -1 miliar - Rp 2 miliar",
				"q11d" => "Pada kisaran Rp 2.000.000.001 - 15 Miliar",
				"q11e" => "Di atas Rp 15 miliar",
				"q11f" => "Tidak tahu",
				"q11g" => "Tidak menjawab",
				"q12a" => "Ya. Lanjut ke pertanyaan 14",
				"q12b" => "Tidak. Lanjutkan ke Pertanyaan 13",
				"q13a" => "Tidak tahu caranya/ tidak memiliki akses pada informasi pengadaan",
				"q13b" => "Mencoba, tapi rumit",
				"q13c" => "Perusahaan masih kekurangan keahlian",
				"q13d" => "Tidak memenuhi persyaratan yang dibutuhkan",
				"q13e" => "Kekhawatiran tidak akan menang",
				"q13f" => "Kekhawatiran tidak memenuhi persyaratan yang telah ditetapkan",
				"q13g" => "Khawatir dengan birokrasi yang rumit",
				"q13h" => "Kekhawatiran terhadap korupsi",
				"q13i" => "Kekhawatiran akan 'harga' yang akan berbeda (ada mark up) dengan harga sebenarnya",
				"q13j" => "Skala - Paket penawaran terlalu besar",
				"q13k" => "Kurangnya dana/modal",
				"q13l" => "Tidak ada akses terhadap kredit bank untuk mendukung pendanaan awal pengerjaan proyek",
				"q13m" => "Kekhawatiran tentang diskriminasi karena alasan gender",
				"q13n" => "Tempo pembayaran yang terlalu lama",
				"q13o" => "Tidak tertarik",
				"q13p" => "Lainnya..............",
				"q15a" => "Ya. Lanjutkan ke pertanyaan 17 hingga 25",
				"q15b" => "Tidak. Lanjut ke pertanyaan 16",
				"q16a" => "Mencoba, tapi rumit",
				"q16b" => "Tidak tahu bagaimana (tidak ada panduan yang jelas)",
				"q16c" => "Tidak tertarik",
				"q16d" => "Ini memakan waktu terlalu lama",
				"q16e" => "Koneksi internet lambat",
				"q16f" => "Tidak akrab dengan internet.",
				"q16g" => "Lainnya",
				"q17a" => "Mengakses Situs SPSE nasionalMengakses Situs LPSE lembaga/badan/kementerian nasional",
				"q17b" => "Mengakses Situs LPSE lembaga/badan/kementerian nasional",
				"q17c" => "Mengakses Situs LPSE provinsi",
				"q17d" => "Mengakses Situs LPSE kabupaten/kota.",
				"q17e" => "Dari Asosiasi Pengusaha/UMKM",
				"q17f" => "Dari sesama UMKM",
				"q17g" => "Dari sumber lain",
				"q17h" => "Tidak tahu",
				"q18a" => "Kementerian",
				"q18b" => "Dinas Provinsi setempat",
				"q18c" => "Dinas Kabupaten/Kota setempat",
				"q18d" => "Dinas Provinsi di luar lokasi perusahaan",
				"q18e" => "Dinas Kabupaten/Kota Di luar lokasi perusahaan",
				"q18f" => "Lainnya",
				"q18g" => "Tidak tahu",
				"q19a" => "Pekerjaan Umum dan Perumahan Rakyat (atau nomenklatur yang setara)",
				"q19b" => "Transportasi (atau nomenklatur yang setara)",
				"q19c" => "Perdagangan (atau nomenklatur yang setara)",
				"q19d" => "Kesehatan",
				"q19e" => "Pendidikan dan Kebudayaan",
				"q19f" => "Pelayanan Sosial (atau nomenklatur yang setara)",
				"q19g" => "Pertanian",
				"q19h" => "Layanan lainnya.................................",
				"q19i" => "Tidak tahu",
				"q20a" => "e-purchasing (berdasarkan e-katalog)",
				"q20b" => "Tender (national/ internasional)",
				"q20c" => "Tender Cepat",
				"q20d" => "Pengadaan Langsung (Non-tender)",
				"q20e" => "Penunjukan/seleksi Langsung (Non-tender)",
				"q21a" => "1 kali",
				"q21b" => "Antara 1 - 5 kali",
				"q21c" => "Lebih dari 5 kali",
				"q21d" => "Tak tahu",
				"q22a" => "Ya.",
				"q22b" => "Tidak. Jika Tidak, melanjutkan ke pertanyaan 26.",
				"q22c" => "Tidak tahu",
				"q26a" => "Nilai kontrak",
				"q26b" => "Jenis pengadaan",
				"q26c" => "Kepatuhan prosedur",
				"q26d" => "Jangka waktu",
				"q26e" => "Kesempatan untuk menang",
				"q26f" => "Lainnya",
				"q23a" => "Di bawah Rp 100 juta",
				"q23b" => "Antara Rp 100 juta - Rp 500 juta",
				"q23c" => "Rp 501 juta - Rp 2,5 miliar",
				"q23d" => "Rp. 2.500.000.001 - 5 miliar",
				"q23e" => "Rp. 5.000.000.001 - 15 miliar",
				"q23f" => "Lebih dari 15 miliar",
				"q23g" => "Tidak tahu",
				"q23h" => "Tidak menjawab",
				"q24a" => "Pengadaan Barang.",
				"q24b" => "Jasa Konsultasi badan Usaha Non Konstruksi",
				"q24c" => "Pekerjaan Konstruksi",
				"q24d" => "Jasa lainnya",
				"q24e" => "Jasa Konsultansi Perorangan Non Konstruksi",
				"q24f" => "Jasa Konsultansi Badan Usaha Konstruksi",
				"q24g" => "Jasa Konsultansi Perorangan Konstruksi",
				"q24h" => "Pekerjaan Konstruksi Terintegrasi",
				"q24i" => "Tidak ada",
				"q25a" => "Pengadaan langsung bernilai kurang dr 100 juta",
				"q25b" => "Pengadaan langsung bernilai Rp 100- <200 juta",
				"q25c" => "Seleksi/penunjukan langsung di atas 200 juta",
				"q25d" => "Tidak ada",
				"q30a" => "Ya",
				"q30b" => "Tidak",
				"q30c" => "Belum/ Tidak tahu",
				"q31a" => "Kredit bank",
				"q31b" => "Pinjaman Koperasi Kredit",
				"q31c" => "Kredit ekuitas modal ventura",
				"q31d" => "Pinjaman dari kerabat dan teman",
				"q31e" => "Kredit online",
				"q31f" => "Pinjaman dari pemberi pinjaman tradisional.",
				"q31g" => "Tidak tahu",
				"q31h" => "Tidak ada pinjaman.",
				"q31i" => "Lainnya…..sebutkan",
				"q32a" => "Pembinaan dan pendampingan khusus",
				"q32b" => "Penyebaran informasi",
				"q32c" => "Tidak pernah",
				"q32d" => "Tidak tahu",
				"q33a" => "Kurang dari 10%",
				"q33b" => "Antara 10 - 50%",
				"q33c" => "Antara 51 - 70%",
				"q33d" => "Tidak tahu",
				"q33e" => "Tidak mau menjawab",
				"q34a" => "Aliran pendapatan yang stabil",
				"q34b" => "Peningkatan pendapatan dan keuntungan",
				"q34c" => "Peningkatan variasi produk yang dihasilkan",
				"q34d" => "Perluasan bisnis ke lini produk baru dan pasar baru",
				"q34e" => "Peningkatan reputasi dan portofolio bisnis",
				"q34f" => "Peningkatan jumlah karyawan",
				"q34g" => "Peluang jejaring yang lebih baik, terutama terkait dengan vendor potensial",
				"q34h" => "Lainnya ....sebutkan",
				"q35a" => "Pedoman pengadaan dalam bahasa yang lebih sederhana",
				"q35b" => "Prosedur yang lebih mudah",
				"q35c" => "Tutorial yang menarik",
				"q35d" => "Insentif yang lebih besar untuk melibatkan partisipasi usaha milik perempuan sebagai subkontraktor utama.",
				"q35e" => "Pengumuman tentang peluang pengadaan dan informasi yang jelas tentang beragam paket pengadaan yang ditugaskan dalam kontrak",
				"q35f" => "Akses mudah ke pembiayaan",
				"q35g" => "Waktu yang cukup untuk mempersiapkan dokumen tender atau prosedur yang lebih sederhana untuk berpartisipasi dalam tender",
				"q35h" => "Mekanisme khusus untuk memastikan UMKM dapat berpartisipasi dalam pengadaan pemerintah",
				"q35i" => "Pengumuman peluang pengadaan diteruskan via situs Asosiasi Bisnis (seperti IWAPI, ASPPUK, APINDO, KADIN)",
				"q35j" => "Pengumuman e-katalog melalui media sosial yang dikelola asosiasi bisnis dan pengusaha (KADIN, APINDO dan sejenisnya)",
				"q35k" => "Pengumuman e-katalog melalui media sosial yang dikelola asosiasi bisnis milik perempuan (IWAPI, ASPPUK)",
				"q35l" => "Pemerintah meningkatkan transparansi informasi kepada publik mengenai jumlah (dan persentase) UMKM milik perempuan yang berpartisipasi dalam pengadaan pemerintah",
				"q35m" => "Usaha milik perempuan mendapat perlakuan khusus/preferensi dibandingkan dengan usaha milik laki-laki.",
				"q35n" => "Persyaratan tender yang tidak berlebihan, misalnya standar industri, sertifikasi",
				"q35o" => "Tidak tahu",
				"q36a" => "Komitmen serius pemerintah untuk melaksanakan kuota 40% bagi UMKM seperti tertera pada peraturan yang baru",
				"q36b" => "Pelatihan praktis terkait pengadaan barang dan jasa di pemerintahan",
				"q36c" => "Pendampingan untuk persiapan pra-tender",
				"q36d" => "Suku bunga bank yang lebih rendah",
				"q36e" => "Kemudahan mengakses informasi tender (memungkinkan interaksi via email/SMS)",
				"q36f" => "Kemudahan akses, prosedur, dan syarat pendaftaran usaha",
				"q36g" => "Kesempatan berjejaring yang lebih baik, khususnya pada pengada layanan potensial.",
				"q36h" => "Subsidi Pajak",
				"q36i" => "Lainnya…..sebutkan"
			],
			"multi_c" => [
				"q_q10",
				"q_q10_b",
				"b_tenderpemerintah_q13",
				"b_tenderpemerintah_q16",
				"b_tenderpemerintah_q17",
				"b_tenderpemerintah_q18",
				"b_tenderpemerintah_q19",
				"b_tenderpemerintah_q20",
				"b_tenderpemerintah_q24",
				"b_tenderpemerintah_q25",
				"b_tenderpemerintah_q26",
				"c_ekosistem_partisipasi_umkm_q31",
				"c_ekosistem_partisipasi_umkm_q32",
				"d_manfaat_pengadaan_pemerintah_q34",
				"e_rencana_ke_depan_q35",
				"e_rencana_ke_depan_q36"
			],
			"grafik" => [
				"q_q1" => [
					"kode" => "1",
					"judul" => "Jenis Kelamin Responden",
					"grafik" => "doughnut",
					"jenis_data" => "bertingkat"
				],
				"q_q2" => [
					"kode" => "2",
					"judul" => "Jabatan/peran Responden di Perusahaan",
					"grafik" => "pie",
					"jenis_data" => "nominal"
				],
				"q_q2_a" => [
					"kode" => "2.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q3" => [
					"kode" => "3",
					"judul" => "Usia responden",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q4" => [
					"kode" => "4",
					"judul" => "Tingkat pendidikan tertinggi responden",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q5" => [
					"kode" => "5",
					"judul" => "Kepemilikan saham utama perusahaan",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q6" => [
					"kode" => "6",
					"judul" => "Hubungan Responden dengan pemilik usaha",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q6_a" => [
					"kode" => "6.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q7" => [
					"kode" => "7",
					"judul" => "Klasifikasi izin usaha yang dimiliki perusahaan",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q7_a" => [
					"kode" => "7.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q8" => [
					"kode" => "8",
					"judul" => "Jumlah pekerja di perusahaan",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q9" => [
					"kode" => "9",
					"judul" => "Berapa umur usaha Anda",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q10" => [
					"kode" => "10",
					"judul" => "Sektor apa saja yang digeluti oleh Perusahaan Anda? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "doughnut",
					"jenis_data" => "nominal"
				],
				"q_q10_a" => [
					"kode" => "10.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "doughnut",
					"jenis_data" => "nominal"
				],
				"q_q10_b" => [
					"kode" => "10.b",
					"judul" => "Jika Anda menjawab perdagangan besar dan eceran pada pertanyaan 10, usaha apa yang Anda geluti?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q10_c" => [
					"kode" => "10.c",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"q_q11" => [
					"kode" => "11",
					"judul" => "Omset tahunan Perusahaan Anda pada tahun 2022 adalah",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q12" => [
					"kode" => "12",
					"judul" => "Pernahkah Anda mencoba berpartisipasi dalam peluang pengadaan pemerintah?",
					"grafik" => "doughnut",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q13" => [
					"kode" => "13",
					"judul" => "Apakah menurut Anda, persepsi pebisnis perempuan dibandingkan pebisnis laki-laki berbeda dalam melihat hambatan berpartisipasi dalam pengadaan pemerintah?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q13_a" => [
					"kode" => "13.a",
					"judul" => "Mengapa Anda belum mencoba berpartisipasi? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q14" => [
					"kode" => "14",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q15" => [
					"kode" => "15",
					"judul" => "Apakah Anda sudah mencoba melalui website SPSE atau LPSE baik tingkat nasional, provinsi, atau kabupaten/kota untuk mendaftar sebagai vendor pemerintah?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q16" => [
					"kode" => "16",
					"judul" => "Mengapa Anda belum mengakses sistem e-procurement? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q16_a" => [
					"kode" => "16.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q17" => [
					"kode" => "17",
					"judul" => "Bagaimana Anda mengetahui peluang pengadaan barang/jasa pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "doughnut",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q18" => [
					"kode" => "18",
					"judul" => "Bagaimana Anda mengetahui peluang pengadaan barang/jasa pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "doughnut",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q18_a" => [
					"kode" => "18.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q19" => [
					"kode" => "19",
					"judul" => "Untuk proyek di sektor manakah, Perusahaan Anda ikut tender? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q19_a" => [
					"kode" => "19.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q20" => [
					"kode" => "20",
					"judul" => "Paket pengadaan pemerintah manakah yang diikuti oleh perusahaan Anda? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q21" => [
					"kode" => "21",
					"judul" => "Berapa kali perusahaan Anda berpartisipasi dalam tender pengadaan pemerintah dalam 12 bulan terakhir?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q22" => [
					"kode" => "22",
					"judul" => "Apakah perusahaan Anda pernah memenangkan kontrak dari proses pengadaan?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q23" => [
					"kode" => "23",
					"judul" => "Berapa nilai rata-rata/skala kontrak tender yang Perusahaan Anda ikuti?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q24" => [
					"kode" => "24",
					"judul" => "Jenis paket tender apa saja yang pernah Anda ikuti? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q25" => [
					"kode" => "25",
					"judul" => "Paket 'Non Tender' manakah yang Perusahaan Anda pernah diundang/ diikuti? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"b_tenderpemerintah_q26" => [
					"kode" => "26",
					"judul" => "Elemen manakah yang biasanya menjadi pertimbangan utama Perusahaan Anda ketika mengikuti proses pengadaan? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q27" => [
					"kode" => "27",
					"judul" => "Apakah Anda tahu bahwa ada peraturan yang mengizinkan usaha mikro, kecil, dan menengah untuk mengikuti tender pengadaan barang dan jasa pemerintah senilai hingga Rp15 miliar?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q28" => [
					"kode" => "28",
					"judul" => "Apakah Anda mengetahui adanya kebijakan yang mengutamakan partisipasi usaha milik perempuan dalam pengadaan publik?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q29" => [
					"kode" => "29",
					"judul" => "Apakah Anda tertarik untuk mengetahui lebih lanjut bagaimana perusahaan Anda dapat mengakses pengadaan pemerintah?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q30" => [
					"kode" => "30",
					"judul" => "Apakah Anda ingin memanfaatkan peluang peraturan baru tersebut ?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q31" => [
					"kode" => "31",
					"judul" => "Apakah jenis pinjaman Perusahaan Anda saat ini, baik pinjaman/kredit dari bank, maupun dari lembaga keuangan non-perbankan lainnya? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q31a" => [
					"kode" => "31.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"c_ekosistem_partisipasi_umkm_q32" => [
					"kode" => "32",
					"judul" => "Bentuk dukungan pemerintah apa saja yang Perusahaan Anda dapatkan dalam memfasilitasi partisipasi UMKM dalam pengadaan pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"d_manfaat_pengadaan_pemerintah_q33" => [
					"kode" => "33",
					"judul" => "Berapa persentase pendapatan tahunan perusahaan Anda yang berasal dari kontrak pengadaan pemerintah?",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"d_manfaat_pengadaan_pemerintah_q34" => [
					"kode" => "34",
					"judul" => "Apa manfaat terbesar yang Perusahaan Anda dapatkan dari berpartisipasi dalam pengadaan pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"d_manfaat_pengadaan_pemerintah_q34a" => [
					"kode" => "34.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"e_rencana_ke_depan_q35" => [
					"kode" => "35",
					"judul" => "Situasi apa yang perlu diperbaiki agar dapat membantu bisnis Anda untuk dapat mengambil bagian sebagai vendor pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"e_rencana_ke_depan_q36" => [
					"kode" => "36",
					"judul" => "Program/kegiatan/dukungan apa yang dibutuhkan Perusahaan Anda agar dapat berpartisipasi secara efektif dalam pengadaan barang dan jasa pemerintah? (Anda boleh memilih lebih dari 1 (satu) jawaban)",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				],
				"e_rencana_ke_depan_q36a" => [
					"kode" => "36.a",
					"judul" => "Jika lainnya, sebutkan….",
					"grafik" => "bar",
					"jenis_data" => "nominal"
				]
			],
		];
		return $data;
	}
}
