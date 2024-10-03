<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use GuzzleHttp\Client;
use App\Http\Controllers\dataSetting;

class ApiData extends Controller
{
	protected $url;
	protected $dataSetting;
	public function __construct()
	{

		$this->dataSetting = new dataSetting();
		$this->url = [
			'token' => 'fe10075386463e2385b3e5e6335aaee8ef2ebb64',
			'form' =>  'a35fuWHwXzLNK4WFfmHA4G',
			'data' => [
				'url_pilihan' => 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS-LYlj8kZaH7I1K7bAe6VqTgKkpTTdZGN0WD2tORafeGAwkqsxXZN1ErBc5V8xFN4P24YwjneAqTno/pub?gid=1161518992&single=true&output=csv',
				'url_multic' => 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS-LYlj8kZaH7I1K7bAe6VqTgKkpTTdZGN0WD2tORafeGAwkqsxXZN1ErBc5V8xFN4P24YwjneAqTno/pub?gid=1652927521&single=true&output=csv',
				'url_grafik' => 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS-LYlj8kZaH7I1K7bAe6VqTgKkpTTdZGN0WD2tORafeGAwkqsxXZN1ErBc5V8xFN4P24YwjneAqTno/pub?gid=552506723&single=true&output=csv',
			],
			'pivot' => []
		];

		function pecahmulti($a, $arr)
		{
			$b = explode(' ', $a);
			$c = [];
			if (count($b) > 0) {
				foreach ($b as $item) {
					array_push($c, $arr[$item]);
				}
			}
			return $c;
		}

		function pecahmulti_not($a, $arr)
		{
			$b = explode(' ', $a);
			$c = [];
			if (count($b) > 0) {
				foreach ($b as $item) {
					array_push($c, $item);
				}
			}
			return $c;
		}
	}

	public function color()
	{
		$color = [
			'nominal' => [
				0 => ['rgb(141,211,199)'],
				1 => ['rgb(141,211,199)'],
				2 => ['rgb(141,211,199)', 'rgb(190,186,218)'],
				3 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)'],
				4 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)'],
				5 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)'],
				6 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)'],
				7 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)'],
				8 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)'],
				9 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)', 'rgb(252,205,229)', 'rgb(217,217,217)'],
				10 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)', 'rgb(252,205,229)', 'rgb(217,217,217)', 'rgb(188,128,189)'],
				11 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)', 'rgb(252,205,229)', 'rgb(217,217,217)', 'rgb(188,128,189)', 'rgb(204,235,197)'],
				12 => ['rgb(141,211,199)', 'rgb(255,255,179)', 'rgb(190,186,218)', 'rgb(251,128,114)', 'rgb(128,177,211)', 'rgb(253,180,98)', 'rgb(179,222,105)', 'rgb(252,205,229)', 'rgb(217,217,217)', 'rgb(188,128,189)', 'rgb(204,235,197)', 'rgb(255,237,111)'],
			],
			'bertingkat' => [
				0 => ['rgb(252,141,89)'],
				1 => ['rgb(252,141,89)'],
				2 => ['rgb(255,237,160)', 'rgb(240,59,32)'],
				3 => ['rgb(255,237,160)', 'rgb(254,178,76)', 'rgb(240,59,32)'],
				4 => ['rgb(255,255,178)', 'rgb(254,204,92)', 'rgb(253,141,60)', 'rgb(227,26,28)'],
				5 => ['rgb(255,255,178)', 'rgb(254,204,92)', 'rgb(253,141,60)', 'rgb(240,59,32)', 'rgb(189,0,38)'],
				6 => ['rgb(255,255,178)', 'rgb(254,217,118)', 'rgb(254,178,76)', 'rgb(253,141,60)', 'rgb(240,59,32)', 'rgb(189,0,38)'],
				7 => ['rgb(255,255,178)', 'rgb(254,217,118)', 'rgb(254,178,76)', 'rgb(253,141,60)', 'rgb(252,78,42)', 'rgb(227,26,28)', 'rgb(177,0,38)'],
				8 => ['rgb(255,255,204)', 'rgb(255,237,160)', 'rgb(254,217,118)', 'rgb(254,178,76)', 'rgb(253,141,60)', 'rgb(252,78,42)', 'rgb(227,26,28)', 'rgb(177,0,38)'],
				9 => ['rgb(255,255,204)', 'rgb(255,237,160)', 'rgb(254,217,118)', 'rgb(254,178,76)', 'rgb(253,141,60)', 'rgb(252,78,42)', 'rgb(227,26,28)', 'rgb(189,0,38)', 'rgb(128,0,38)'],
				10 => ['rgb(165,0,38)', 'rgb(215,48,39)', 'rgb(244,109,67)', 'rgb(253,174,97)', 'rgb(254,224,139)', 'rgb(217,239,139)', 'rgb(166,217,106)', 'rgb(102,189,99)', 'rgb(26,152,80)', 'rgb(0,104,55)'],
				11 => ['rgb(165,0,38)', 'rgb(215,48,39)', 'rgb(244,109,67)', 'rgb(253,174,97)', 'rgb(254,224,139)', 'rgb(255,255,191)', 'rgb(217,239,139)', 'rgb(166,217,106)', 'rgb(102,189,99)', 'rgb(26,152,80)', 'rgb(0,104,55)'],
				12 => ['rgb(165,0,38)', 'rgb(215,48,39)', 'rgb(244,109,67)', 'rgb(253,174,97)', 'rgb(254,224,139)', 'rgb(255,255,191)', 'rgb(217,239,139)', 'rgb(166,217,106)', 'rgb(102,189,99)', 'rgb(26,152,80)', 'rgb(0,104,55)', 'rgb(26,26,26)'],
			]
		];

		return 	response()->json($color);
	}

	public function setting_data()
	{

		$result_data = [
			'pilihan' => [
				' ' => ' ',
				'pulau_sembilan' => 'Pulau Sembilan',
				'pulau_laut_barat' => 'Pulau Laut Barat',
				'pulau_laut_tanjung_selayar' => 'Pulau Laut Tanjung Selayar',
				'pulau_laut_selatan' => 'Pulau Laut Selatan',
				'pulau_laut_kepulauan' => 'Pulau Laut Kepulauan',
				'pulau_laut_timur' => 'Pulau Laut Timur',
				'pulau_sebuku' => 'Pulau Sebuku',
				'pulau_laut_utara' => 'Pulau Laut Utara',
				'pulau_laut_tengah' => 'Pulau Laut Tengah',
				'pulau_laut_sigam' => 'Pulau Laut Sigam',
				'kelumpang_selatan' => 'Kelumpang Selatan',
				'kelumpang_hilir' => 'Kelumpang Hilir',
				'kelumpang_hulu' => 'Kelumpang Hulu',
				'hampang' => 'Hampang',
				'sungai_durian' => 'Sungai Durian',
				'kelumpang_tengah' => 'Kelumpang Tengah',
				'kelumpang_barat' => 'Kelumpang Barat',
				'kelumpang_utara' => 'Kelumpang Utara',
				'pamukan_selatan' => 'Pamukan Selatan',
				'sampanahan' => 'Sampanahan',
				'pamukan_utara' => 'Pamukan Utara',
				'pamukan_barat' => 'Pamukan Barat',
				'a4_1' => 'Pantai',
				'a4_2' => 'Daratan',
				'a5_1' => 'Berdiri di Atas Laut, Rumah berdiri di daerah laut yang ditopang dengan Kayu',
				'a5_2' => 'Pesisir, Berada pada Bibir pantai Jarak kurang lebih 5- 10 meter dari bibir pantai',
				'a5_3' => 'Darat, Jarah rumah 11-20 meter dari pantai',
				'a6_1' => 'Urban Area (Perkotaan)',
				'a6_2' => 'Urban-Rural Area (semi Kota)',
				'a6_3' => 'Rural Area (Perdesaan)',
				'a7_1' => 'Berat, (kerusakan lebih dari 70% atau Bangunan Roboh Total)',
				'a7_2' => 'Sedang, (kerusakan lebih dari 30% kurang dari 70%)',
				'a7_3' => 'Ringan (kerusakan kurang dari 30%)',
				'a8_1' => 'Laki Laki',
				'a8_2' => 'Perempuan',
				'a9_1' => 'kurang dari 18',
				'a9_2' => '19-35',
				'a9_3' => '36-45',
				'a9_4' => '46-60',
				'a9_5' => 'lebih dari 60',
				'a10_1' => 'Menikah',
				'a10_2' => 'Bercerai Hidup',
				'a10_3' => 'Bercerai Mati',
				'a10_4' => 'Lajang',
				'a11_1' => 'Suami',
				'a11_2' => 'Istri',
				'a11_3' => 'Kepala Keluarga  Perempuan',
				'a11_4' => 'Anak',
				'a11_5' => 'Lainnya',
				'a12_1' => 'SD Tamat/Tidak Tamat',
				'a12_2' => 'SMP Tamat/Tidak Tamat',
				'a12_3' => 'SMA Tamat/ Tidak Tamat',
				'a12_4' => 'Sarjana Tamat/ Tidak Tamat',
				'a12_5' => 'Tidak Pernah  Sekolah',
				'a13_1' => 'kurang dari 2',
				'a13_2' => '3-4',
				'a13_3' => '4-5',
				'a13_4' => '5-6',
				'a13_5' => 'lebih dari 7',
				'ya' => 'ya',
				'tidak' => 'tidak',
				'a14_1' => '1',
				'a14_2' => '2',
				'a14_3' => '3',
				'a14_4' => 'lebih dari 4',
				'a15_1' => 'Petani',
				'a15_2' => 'Nelayan',
				'a15_3' => 'Pedagang',
				'a15_4' => 'Jasa',
				'a15_5' => 'Lainnya',
				'a16_1' => 'Rumah Sendiri',
				'a16_2' => 'Rumah Sewa',
				'a16_3' => 'Hunian Sementara  Individual',
				'a16_4' => 'Hunian Sementara  Komunal',
				'a16_5' => 'Lainnya',
				'a17_1' => 'BLT',
				'a17_2' => 'Subsidi Listrik',
				'a17_3' => 'Pra Kerja',
				'a17_4' => 'Bansos Bencana',
				'a17_5' => 'Lainnya',
				'b1_1' => 'Suami',
				'b1_2' => 'Istri',
				'b1_3' => 'Anak',
				'b1_4' => 'Lainnya',
				'b6_1' => 'Gangguan Uang Modal Usaha  (Modal lancar untuk produksi)',
				'b6_2' => 'Gangguan asset sarana produksi  (perikanan, nelayan, sawah, warung, dapur, pabrik, Gudang, kendaraan dll)',
				'b6_3' => 'Gangguan SDM (Menjadi cacat,  mati, sakit, pekerja keluar bagi pengusaha, dll)',
				'b6_4' => 'Gangguan Distribusi  (jalur pasok rusak, tidak ada distributor, tidak ada pengepul hasil, dll)',
				'b6_5' => 'Gangguan Pasar  (tidak ada per-mintaan, pasar rusak, pembelian berhenti membeli, dll)',
				'b6_6' => 'Gangguan lain-lain  (dipecat, tidak ada support kebijakan, riset, training, dll)',
				'b7_1' => '1 bulan',
				'b7_2' => '2 bulan',
				'b7_3' => '3 bulan',
				'b7_4' => '4 bulan',
				'b7_5' => '5 bulan',
				'b7_6' => '6 bulan',
				'b7_7' => '7 bulan',
				'b7_8' => '8 bulan',
				'b7_9' => '9 bulan',
				'b7_10' => '10 bulan',
				'b7_11' => '11 bulan',
				'b7_12' => '12 bulan',
				'b7_13' => 'lebih dari 12 bulan',
				'b9_1' => 'kurang dari 250.000',
				'b9_2' => '250.000 - 750.000',
				'b9_3' => '750.000 - 1.250.000',
				'b9_4' => '1.250.000 - 1.750.000',
				'c2_1' => 'kurang dari 1 bulan',
				'c2_2' => '2-3 bulan',
				'c2_3' => '3-4 bulan',
				'c2_4' => '4-5 bulan',
				'c2_5' => '5-6 bulan',
				'c2_6' => 'lebih dari 6 bulan',
				'd1_1' => 'Menolong diri sendiri dengan koperasi,  tabungan, arisan, asuransi dll.',
				'd1_2' => 'Ganti pekerjaan, diversifikasi  usaha untuk kurangi risiko,  adaptasi cara berusaha dll',
				'd1_3' => 'Mengandalkan Bantuan pemerintah, bantuan  pihak lain, sumbangan, donasi, dll',
				'd1_4' => 'Berhutang dengan berbagai  bentuk pinjaman.',
				'd1_5' => 'Menjual asset, menebang pohon,  menjual ternak,menyewakan tanah, Hutang, dll.',
				'd1_6' => 'Mengurangi konsumsi, tidak ke berobat,  anak tidak sekolah, tidak amerokok,dll',
				'd1_7' => 'Anak dipekerjakan, anggota keluarga menjadi buruh migrant, dll',
				'e1_1' => 'Sulit menjangkau pasar karena bencana, fasilitas pasar belum pulih, kerusakan pasar, akses menuju pasar semakin sulit akibat bencana.',
				'e1_2' => 'Harga-harga pangan dan sembako naik menjadi tidak terjangkau atau ada kelangkaan komoditas, dll.',
				'e1_3' => 'Pasokan pangan dan sembako memburuk, jalur distribusi terhambat oleh bencana, gudang pasokan rusak, dll.',
				'e1_4' => 'Gangguan Lain-Lain Terkait ketersediaan sembako dan pangan.',
				'e2_1' => 'Sejak sebelum bencana tidak memiliki rumah sendiri (masih menumpang atau menyewa).',
				'e2_2' => 'Rumah sewa atau rumah tumpangan rusak karena bencana.',
				'e2_3' => 'Rumah sendiri rusak karena bencana.',
				'e2_4' => 'Bencana menyebabkan menurunnya kemampuan untuk membangun rumah sendiri.',
				'e2_5' => 'Harus mengeluarkan biaya untuk perabotan rumah tangga yang hilang atau rusak akibat bencana',
				'e3_1' => 'Sumber air (sumur, sungai, mata air, dll) terganggu, kualitas airnya menurun, instalasi sumber air rusak sebagai akibat bencana.',
				'e3_2' => 'Sulit menjangkau penyedia (PDAM, AMDK, dll), harga air bersih naik menjadi tidak terjangkau atau ada kelangkaan penyedia air bersih, dll.',
				'e3_3' => 'Jalur pasokan air bersih memburuk, jalur distribusi terhambat oleh bencana, reservoir rusak, instalasi distribusi PDAM rusak, dll.',
				'e3_4' => 'Mengeluarkan biaya tambahan karena harus membeili air bersih',
				'e3_5' => 'Meningkatnya risiko kekerasan berbasis gender karena sumber air jauh dan tidak aman',
				'e3_6' => 'Gangguan Lain-Lain Terkait ketersediaan air bersih (tempat/bak penyimpanan rusak, alat pengambilan/pompa rusak, dll.',
				'e4_1' => 'Ongkos Transportasi semakin mahal, aksesnya sulit. Harga-Harga Layanan Kesehatan, Obat, Alat Medis Semakin Tak Terjangkau karena gangguan ekonomi pada matapencaharian',
				'e4_2' => 'Alat, obat dan tenaga medis kurang, kerusakan bangunan pusat layanan Kesehatan  Tidak tersedia layanan Kesehatan mental dll',
				'e4_3' => 'Kurangnya dukungan kuratif, promosi Kesehatan, Pendidikan Pencegahan Penyakit dan gizi buruk.',
				'e4_4' => 'Gangguan Lain-Lain Terkait Pelayanan. (Asuransi/Bantuan Askes rumit/regulasi/ dll)',
				'e5_1' => 'Biaya ke sekolah   semakin terasa mahal karena jalan rusak . SPP / Uang Gedung / Uang Pangkal semakin tak terjangkau sebagai akibat dari terganggunya mata pencaharian',
				'e5_2' => 'Bantuan-bantuan pendidikan (beasiswa, paket data dll) tidak merata dan tidak mencapai yang berhak.',
				'e5_3' => 'Sekolah terhenti karena biaya digunakan untuk perbaikan rumah dan kebutuhan hidup sehari-hari',
				'e6_1' => 'Sebelum bencana, saya pernah terlibat kegiatan serupa.',
				'e6_2' => 'Sebelum bencana, saya pernah menyelenggarakan kegiatan serupa.',
				'e6_3' => 'Setelah bencana, saya pernah terlibat kegiatan serupa.',
				'e6_4' => 'Setelah bencana, saya pernah menyelenggarakan kegiatan serupa.',
				'e7_1' => 'Program bantuan/ dukungan kurang responsif miskin baru atau kelompok rentan baru akibat bencana.',
				'e7_2' => 'Pendaftaran Penerima Bantuan Sosial Rumit dan korban bencana kurang mendapat sosialisasi bantuan sosial.',
				'e7_3' => 'Pendistribusian bantuan sosial tidak tepat sasaran sehingga tidak semua kelompok rentan menerima (ada ekslusi).',
				'e7_4' => 'Tempat penerimaan dan Distribusi Batuan Sosial jauh, sulit dijangkau',
				'e7_5' => 'Sosialisasi dan akuntabilitas dukungan dan bantuan sosial terbatas.',
				'e8_1' => 'Saya masih mendengar dan mengetahui kekerasan terhadap  perempuan dan kelompok rentan di lingkungan tinggal.',
				'e8_2' => 'Tempat pengaduan kekerasan dan kualitas layanan tempat pengaduan  kekerasan terhadap perempuan dan kelompok rentan memburuk.',
				'e8_3' => 'Daya dukung komunitas untuk perlindungan kekerasan terhadap  perempuan dan kelompok rentan semakin menurun karena bencana.',
				'e8_4' => 'Kampanye dan Pendidikan Masyarakat tentang Perlindungan  Kekerasan terhadap Perempuan dan kelompok Rentan semakin menurun.',
				'e8_5' => 'Kurangnya akses terhadap pembelaan  terhadap korban kekerasan terhadap perempuan dan kelompok rentan. (Advokat, para-legal, pendamping korban, dll)',
				'e9_1' => 'Sejak sebelum bencana sudah pernah terlibat atau mendengar pelatihan pencegahan risiko bencana.',
				'e9_2' => 'Sejak sebelum bencana sudah terlibat atau minimal pernah mendengar keberadaan tim siaga bencana atau satgas wilayah.',
				'e9_3' => 'Saat bencana ditolong atau dibantu oleh tim siaga bencana.',
				'e9_4' => 'Saat pulih dari akibat bencana ditolong atau dibantu oleh tim siaga bencana.',
				'f1_1' => 'Sebelum terjadinya  bencana tidak ada pertanian',
				'f1_2' => 'Terjadinya bencasna menimbulkan kerugian akibat gagal panen, sehingga membutuhkan modal kembali di musim tanam berikutnya',
				'f1_3' => 'Hilangnya akses terhadap pekerjaan bagi keluarga petani',
				'f1_4' => 'Meningkatnya  kerentanan karena  hancurnya sumber  daya cadangan  keluarga berupa  ternak dan tanaman  produksi',
				'f2_1' => 'Sebelum terjaidnya  bencana tidak ada perikanan',
				'f2_2' => 'Terjadinya bencasna menimbulkan kerugian akibat gagal panen, sehingga membutuhkan modal kembali di musim tanam berikutnya',
				'f2_3' => 'Hilangnya akses terhadap pekerjaan bagi keluarga petani',
				'f2_4' => 'Meningkatnya  kerentanan karena  hancurnya sumber  daya cadangan  keluarga',
				'f3_1' => 'Sebelum terjadinya  bencana memang sudah tidak ada pariwisata',
				'f3_2' => 'Terjadinya bencanaa menimbulkan menurunya pariwisata',
				'f3_3' => 'Hilangnya akses  terhadap pekerjaan  bagi keluarga',
				'f3_4' => 'Hilangnya pekerjan bagi oemandu wisata',
				'g1_1' => 'Media mainstream  (TV, Koran, Radio, media sosial, dll)',
				'g1_2' => 'Juru Bicara/pejabat/wakil  Pemerintah langsung.',
				'g1_3' => 'Juru terang LSM/NGO',
				'g1_4' => 'Forum Komunitas  Pengurangan Risiko Bencana',
				'g1_5' => 'Kawan/ Saudara melalui  perbincangan.',
				'g4_1' => 'Anak Laki-laki',
				'g4_2' => 'Dewasa Laki-laki',
				'g4_3' => 'Lansia Laki-laki',
				'g4_4' => 'Anak Perempuan',
				'g4_5' => 'Dewasa Perempuan',
				'g4_6' => 'Lansia Perempuan',
				'h1_1' => 'Pinjaman/ Bantuan/ Intervensi Modal Usaha',
				'h1_2' => 'Dukungan Ketrampilan Diversifikasi atau Adaptasi Usaha',
				'h1_3' => 'Dukungan Pemasaran, Akses Pasar, Rantai Distribusi',
				'h1_4' => 'Dukungan Kebijakan Lokal/Nasional, Kemudahan Perijinan, dll.',
				'h1_5' => 'Bantuan Lain-Lain (Riset/Gudang/Uji Laborat/promosi, pelatihan, dll)',
				'h2_1' => 'Dukungan untuk penerangan/  pengetahuan pada Masyarakat tentang Pencegahan Bencana. (tim siaga, prosedur kedaruratan, PPGD, dll)',
				'h2_2' => 'Bantuan peralatan  pencegahan bencana (rambu, jalur evakuasi, kendaraan penngangkut,  dll)',
				'h2_3' => 'Dukungan ketrampilan kolektif untuk menangani bencana. (evakuasi, analisis risiko komunal, mitigasi banjir ROB, dll)',
				'h2_4' => 'Kebijakan publik yang mendukung pencegahan dan penanganan banjir ROB (regulasi, APBDES untuk penanganan bencana dan bantuan korban bencana banjir ROB, dll)',
				'h3_1' => 'Jaminan Sosial, jaminan kesehatan, tunjangan pra-kerja, dll.',
				'h3_2' => 'Bantuan Sosial Kebutuhan Pokok (Sembako)',
				'h3_3' => 'Bantuan Ketrampilan untuk  Pemulihan Usaha.',
				'h3_4' => 'Dukungan Pendidikan (Paket Data, Beasiswa dll)',
				'h3_5' => 'Dukungan Energi (Subsidi BBM, Gas, Listrik dll)',
				'h4_1' => 'Dukungan untuk minoritas.',
				'h4_2' => 'Dukungan untuk perempuan.',
				'h4_3' => 'Dukungan untuk anak.',
				'h4_4' => 'Dukungan untuk difabel.',
				'h4_5' => 'Dukungan untuk Lansia.',
			],
			'multi_c' => [
				'a_a17',
				'b_b1',
				'b_b3',
				'b_b6',
				'd_d1',
				'e_e1',
				'e_e2',
				'e_e3',
				'e_e4',
				'e_e5',
				'e_e6',
				'e_e7',
				'e_e8',
				'e_e9',
				'f_f1',
				'f_f2',
				'f_f3',
				'g_g1',
				'g_g2',
				'g_g3',
				'g_g4',
				'h_h1',
				'h_h2',
				'h_h3',
				'h_h4'
			],
			'grafik' => [
				'a_a2_kec' => ['kode' => 'A.2', 'judul' => 'Kecamatan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a3_desa' => ['kode' => 'A.3', 'judul' => 'Desa', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a4' => ['kode' => 'A.4', 'judul' => 'Kondisi Geografis', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a5' => ['kode' => 'A.5', 'judul' => 'Jarak Rumah dari pantai', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a6' => ['kode' => 'A.6', 'judul' => 'Kategori Sosial', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a7' => ['kode' => 'A.7', 'judul' => 'Kategori Kerusakan Rumah Akibat Bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a8' => ['kode' => 'A.8', 'judul' => 'Jenis Kelamin', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a9' => ['kode' => 'A.9', 'judul' => 'Usia', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a10' => ['kode' => 'A.10', 'judul' => 'Status perkawinan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a11' => ['kode' => 'A.11', 'judul' => 'Posisi responden dalam keluarga', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a12' => ['kode' => 'A.12', 'judul' => 'Pendidikan terakhir', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a13' => ['kode' => 'A.13', 'judul' => 'Jumlah anggota keluarga', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a14' => ['kode' => 'A.14', 'judul' => 'Penyandang Disabilitas', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a15' => ['kode' => 'A.15', 'judul' => 'Pekerjaan utama', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a16' => ['kode' => 'A.16', 'judul' => 'Status Hunian', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'a_a17' => ['kode' => 'A.17', 'judul' => 'Status Penerimaan Bantuan Sosial dan Dukungan Sosial', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b1' => ['kode' => 'B.1', 'judul' => 'Pencari Nafkah', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b2' => ['kode' => 'B.2', 'judul' => 'Status Pekerjaan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b3' => ['kode' => 'B.3', 'judul' => 'Pencari nafkah (Setelah bencana)', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b4' => ['kode' => 'B.4', 'judul' => 'Pekerjaan Sampingan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b5' => ['kode' => 'B.5', 'judul' => 'bencana mempersulit/mengganggu pekerjaan/penghasilan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b6' => ['kode' => 'B.6', 'judul' => 'Bentuk ganguan Penghasilan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b7' => ['kode' => 'B.7', 'judul' => 'Lama Ganguan Penghasilan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b.9' => ['kode' => 'B.9', 'judul' => 'Rata-rata konsumsi Makanan Sebelum Bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b.10' => ['kode' => 'B.10', 'judul' => 'Rata-rata konsumsi Makanan Setelah Bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b11' => ['kode' => 'B.11', 'judul' => 'Rata-rata konsumsi Non-Makanan Sebelum Bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'b_b12' => ['kode' => 'B.12', 'judul' => 'Rata-rata konsumsi Non-Makanan Setelah Bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'c_c1' => ['kode' => 'C.1', 'judul' => 'Cadangan ekonomi bila paceklik karena bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'c_c2' => ['kode' => 'C.2', 'judul' => 'Lama cadangan keluarga bisa bertahan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'd_d1' => ['kode' => 'D.1', 'judul' => 'Upaya pulih dari gangguan akibat bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e1' => ['kode' => 'E.1', 'judul' => 'Ganguan Kebutuhan Pangan dan Sembako', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e2' => ['kode' => 'E.2', 'judul' => 'Ganguan Kebutuhan Hunian', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e3' => ['kode' => 'E.3', 'judul' => 'Ganguan Kebutuhan Air Bersih dan Sanitasi', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e4' => ['kode' => 'E.4', 'judul' => 'Ganguan Kebutuhan Kesehatan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e5' => ['kode' => 'E.5', 'judul' => 'Ganguan Kebutuhan Pendidikan Formal Dasar, Menengah & Tinggi', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e6' => ['kode' => 'E.6', 'judul' => 'Ganguan Kebutuhan Pangan dan Sembako Kegiatan sosial Komunal', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e7' => ['kode' => 'E.7', 'judul' => 'Ganguan Kebutuhan Perlindungan Sosial', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e8' => ['kode' => 'E.8', 'judul' => 'Ganguan Kebutuhan Perlindungan dari kekerasan terhadap perempuan, anak, disabilitas dan kelompok rentan lainnya', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'e_e9' => ['kode' => 'E.9', 'judul' => 'Ganguan Kebutuhan Pangan dan Sembako Pengurangan Risiko Bencana Konvensional', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'f_f1' => ['kode' => 'F.1', 'judul' => 'Gangguan ekonomi di Pertanian dan Peternakan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'f_f2' => ['kode' => 'F.2', 'judul' => 'Gangguan ekonomi di Perikanan', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'f_f3' => ['kode' => 'F.3', 'judul' => 'Gangguan ekonomi di Pariwisata', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'g_g1' => ['kode' => 'G.1', 'judul' => 'Sumber informasi bencana dan ancaman bencana dapat diperoleh tentang informasi krisis bencana konvensional, Banjir/Longsor/Erupsi/ dll', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'g_g2' => ['kode' => 'G.2', 'judul' => 'Sumber informasi bencana dan ancaman bencana dapat diperoleh tentang informasi Banjir ROB', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'g_g3' => ['kode' => 'G.3', 'judul' => 'Sumber informasi bencana dan ancaman bencana dapat diperoleh tentang informasi Cuaca', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'g_g4' => ['kode' => 'G.4', 'judul' => 'Pengambil keputusan respon  terkait Informasi bencana dan cuaca', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'h_h1' => ['kode' => 'H.1', 'judul' => ' aspirasi pemulihan / peningkatan kapasitas / pengurangan kerentanan akibat bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'h_h2' => ['kode' => 'H.2', 'judul' => 'Kebutuhan dukungan Komunal/Kolektif/Masyarakat untuk Pemulihan bencana ROB', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'h_h3' => ['kode' => 'H.3', 'judul' => 'Kebutuhan dukungan/ perlindungan sosial (jaminan sosial dan bantuan sosial) berbasis keluarga untuk pemulihan bencana', 'grafik' => 'bar', 'jenis_data' => 'nominal'],
				'h_h4' => ['kode' => 'H.4', 'judul' => 'Kebutuhan Dukungan/ Perlindungan Sosial (Jaminan Sosial dan Bantuan Sosial) kelompok rentan dalam keluarga', 'grafik' => 'bar', 'jenis_data' => 'nominal'],

			]
		];

		return response()->json($result_data);
	}


	public function data()
	{

		$pilihan = $this->setting_data()->getOriginalContent();


		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form'] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;

		$lokal1 = [];


		foreach ($lokal as $key => $item) {
			$lokal1[$key]['koordinat'] = '0 0 0';
			foreach ($item as $key2 => $item2) {
				if (is_array($item2) || is_object($item2)) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = $item2;
				} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = pecahmulti($item2, $pilihan['pilihan']);
				} else if (isset($pilihan['pilihan'][$item2])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] =  $pilihan['pilihan'][$item2];
				} else {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = $item2;
				}
			}
		}

		$hasil_array = $lokal1;



		return response()->json($hasil_array);
	}
	public function detail_data($id)
	{

		$data_api = $this->data()->getOriginalContent();

		return response()->json($data_api[$id]);
	}
	public function geojson()
	{

		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form'] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;
		$lokal1 = [];
		$output = [];
		foreach ($lokal as $key => $item) {
			$lokal1[$key]['koordinat'] = '0 0 0';
			foreach ($item as $key2 => $item2) {
				if (is_array($item2) || is_object($item2)) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = $item2;
				} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = pecahmulti($item2, $pilihan['pilihan']);
				} else if (isset($pilihan['pilihan'][$item2])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] =  $pilihan['pilihan'][$item2];
				} else {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] =  $item2;
				}
			}

			$koordinat = explode(' ', $lokal1[$key]['koordinat']);

			$output[] = [
				'type' => 'Feature',
				'properties' => $lokal1[$key],
				'geometry' => [
					'type' => 'Point',
					'coordinates' => [
						floatval($koordinat['1']),
						floatval($koordinat['0']),
						floatval($koordinat['2'])
					]
				]
			];
		}

		$output_new = array(
			'type' => 'FeatureCollection',
			'name' => 'Data_survei',
			'crs' => [
				'type' => 'name',
				'properties' => [
					'name' => 'urn:ogc:def:crs:OGC:1.3:CRS84'
				]
			],
			'features' => $output
		);


		return response()->json($output_new);
	}
	public function resume_grafik()
	{
		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form'] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;

		$lokal1 = [];
		$jml_responden = [];
		foreach ($lokal as $key => $item) {

			foreach ($item as $key2 => $item2) {
				if (isset($jml_responden[strtolower(str_replace('/', '_', $key2))])) {
					$jml_responden[strtolower(str_replace('/', '_', $key2))] = $jml_responden[strtolower(str_replace('/', '_', $key2))] + 1;
				} else {
					$jml_responden[strtolower(str_replace('/', '_', $key2))] = 1;
				}

				if (is_array($item2) || is_object($item2)) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = $item2;
				} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = pecahmulti_not($item2, $pilihan['pilihan']);
				} else {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] =  $item2;
				}
			}
		}

		$hasil_array1 = [];
		$hasil_array = [];

		foreach ($lokal1 as $key => $value) {
			foreach ($value as $key1 => $value1) {
				if (!array_key_exists($key1, $hasil_array)) {
					$hasil_array[$key1] = [];
				}
				if (is_array($value1)) {
					foreach ($value1 as $value2) {
						array_push($hasil_array[$key1],  $value2);
					}
				} else {
					array_push($hasil_array[$key1],  $value1);
				}
			}
		}
		unset(
			$hasil_array['_id'],
			$hasil_array['formhub_uuid'],
			$hasil_array['start'],
			$hasil_array['end'],
			$hasil_array['today'],
			$hasil_array['deviceid'],
			$hasil_array['catatan'],
			$hasil_array['koordinat'],
			$hasil_array['__version__'],
			$hasil_array['meta_instanceid '],
			$hasil_array['_xform_id_string'],
			$hasil_array['_uuid'],
			$hasil_array['_status'],
			$hasil_array['_geolocation'],
			$hasil_array['_submission_time'],
			$hasil_array['_tags'],
			$hasil_array['_notes'],
			$hasil_array['_validation_status'],
			$hasil_array['_attachments'],
		);
		$temp = [];
		foreach ($hasil_array as $key => $value) {
			if (array_key_exists(strtolower(str_replace('-', '_', $key)), $pilihan['grafik'])) {
				$ar = array_replace($value, array_fill_keys(array_keys($value, null), ''));
				$temp = array_count_values($ar);
				ksort($temp);

				$temp2 = [
					'ket' => [],
					'jumlah' => [],
					'total' => 0,
					'total_responden' => $jml_responden[strtolower(str_replace('-', '_', $key))],
					'info' => $pilihan['grafik'][$key]
				];

				foreach ($temp as $key1 => $item1) {
					if (array_key_exists($key1, $pilihan['pilihan'])) {
						array_push($temp2['ket'], $pilihan['pilihan'][$key1]);
					} else {
						array_push($temp2['ket'], $key1);
					}
					array_push($temp2['jumlah'], $item1);
					$temp2['total'] = $temp2['total'] + intval($item1);
				}

				$hasil_array1[$key] = $temp2;
			}
		}

		return response()->json($hasil_array1);
	}
	public function resume_all()
	{
		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form'] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;

		$lokal1 = [];
		$jml_responden = [];
		foreach ($lokal as $key => $item) {
			foreach ($item as $key2 => $item2) {
				if (isset($jml_responden[strtolower(str_replace('/', '_', $key2))])) {
					$jml_responden[strtolower(str_replace('/', '_', $key2))] = $jml_responden[strtolower(str_replace('/', '_', $key2))] + 1;
				} else {
					$jml_responden[strtolower(str_replace('/', '_', $key2))] = 1;
				}

				if (is_array($item2) || is_object($item2)) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = $item2;
				} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = pecahmulti_not($item2, $pilihan['pilihan']);
				} else {
					$lokal1[$key][strtolower(str_replace('/', '_', $key2))] =  $item2;
				}
			}
		}


		$hasil_array1 = [];
		$hasil_array = [];

		foreach ($lokal1 as $key => $value) {
			foreach ($value as $key1 => $value1) {
				if (!array_key_exists($key1, $hasil_array)) {
					$hasil_array[$key1] = [];
				}
				if (is_array($value1)) {
					foreach ($value1 as $value2) {
						array_push($hasil_array[$key1],  $value2);
					}
				} else {
					array_push($hasil_array[$key1],  $value1);
				}
			}
		}
		unset(
			$hasil_array['_id'],
			$hasil_array['formhub_uuid'],
			$hasil_array['start'],
			$hasil_array['end'],
			$hasil_array['today'],
			$hasil_array['deviceid'],
			$hasil_array['catatan'],
			$hasil_array['koordinat'],
			$hasil_array['__version__'],
			$hasil_array['meta_instanceid '],
			$hasil_array['_xform_id_string'],
			$hasil_array['_uuid'],
			$hasil_array['_status'],
			$hasil_array['_geolocation'],
			$hasil_array['_submission_time'],
			$hasil_array['_tags'],
			$hasil_array['_notes'],
			$hasil_array['_validation_status'],
			$hasil_array['_attachments'],
			$hasil_array['meta_instanceid'],
			$hasil_array['meta_deprecatedid'],
			$hasil_array['meta_rootuuid'],
		);
		$temp = [];
		foreach ($hasil_array as $key => $value) {
			$ar = array_replace($value, array_fill_keys(array_keys($value, null), ''));
			$temp = array_count_values($ar);
			ksort($temp);

			$temp2 = [
				'ket' => [],
				'jumlah' => [],
				'total' => 0,
				'total_responden' => $jml_responden[strtolower(str_replace('-', '_', $key))],
			];

			foreach ($temp as $key1 => $item1) {
				if (array_key_exists($key1, $pilihan['pilihan'])) {
					array_push($temp2['ket'], $pilihan['pilihan'][$key1]);
				} else {
					array_push($temp2['ket'], $key1);
				}
				array_push($temp2['jumlah'], $item1);
				$temp2['total'] = $temp2['total'] + intval($item1);
			}

			$hasil_array1[$key] = $temp2;
		}


		return response()->json($hasil_array1);
	}

	public function pivot_dataAll()
	{
		$datapivotAll = [];
		foreach ($this->url['region'] as $key => $value) {
			$datarespons = $this->pivot_data_lp($key)->getOriginalContent();
			$datapivotAll = array_merge($datapivotAll, $datarespons);
		}
		return response()->json($datapivotAll);
	}

	public function pivot_data()
	{
		$header = $this->url['pivot'];

		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];


		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form']  . '/data?format=json', [
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;
		$lokal1 = [];

		foreach ($lokal as $key => $item) {
			foreach ($item as $key2 => $item2) {
				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
					if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
						$data_explo = explode(' ', $item2);
						if (count($data_explo) > 0) {
							foreach ($data_explo as $item3) {
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name)) . '_ch-' . substr($item3, -1, 1)] = $pilihan['pilihan'][$item3];
							}
						}
					} else  if (is_array($item2)) {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
					} else if (isset($pilihan['pilihan'][$item2])) {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] =  $pilihan['pilihan'][$item2];
					} else {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] =  $item2;
					}
				}
			}
		}


		return response()->json($lokal1);
	}

	public function pivot_data_multiAll()
	{
		$datapivotAll = [];
		foreach ($this->url['region'] as $key => $value) {
			$datarespons = $this->pivot_data_multi_lp($key)->getOriginalContent();
			$datapivotAll = array_merge($datapivotAll, $datarespons);
		}

		return response()->json($datapivotAll);
	}

	public function pivot_data_multi()
	{
		$header = $this->url['pivot'];

		$pilihan = $this->setting_data()->getOriginalContent();


		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['form'] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;

		$total_semua = [];
		$singel = [];
		$multi = [];

		foreach ($lokal as $key => $item) {
			foreach ($item as $key2 => $item2) {
				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
					if (is_array($item2)) {
						$singel[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
					} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {

						$data_explo = explode(' ', $item2);
						if (count($data_explo) > 0) {

							$multi[$key][strtolower(str_replace('/', '_', $key2_name))] = $data_explo;
						}
					} else  if (isset($pilihan['pilihan'][$item2])) {
						$singel[$key][strtolower(str_replace('/', '_', $key2_name))] = $pilihan['pilihan'][$item2];
					} else {
						$singel[$key][strtolower(str_replace('/', '_', $key2_name))] =  $item2;
					}
				}
			}
		}

		foreach ($multi as $key => $item) {
			$temp_sigel = $singel[$key];
			foreach ($item as $key2 => $item2) {
				foreach ($item2 as $key3 => $item3) {
					$temp = $temp_sigel;
					$temp['multi_' . $key2] = $pilihan['pilihan'][$item3];
					array_push($total_semua, $temp);
				}
			}
		}

		return response()->json($total_semua);
	}



	public function pivot_data_multi_lp($region)
	{
		$header = $this->url['pivot'];
		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['region'][$region] . '/data?format=json', [
			// 'json' => $params,
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;

		$total_semua = [];
		$single = [];
		$multi = [];

		foreach ($lokal as $key => $item) {
			foreach ($item as $key2 => $item2) {
				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
					if (is_array($item2)) {
						$single[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
					} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
						$data_explo = explode(' ', $item2);
						if (count($data_explo) > 0) {
							$multi[$key][strtolower(str_replace('/', '_', $key2_name))] = $data_explo;
						}
					} else if (strtolower(str_replace('/', '_', $key2_name)) === '5') {
						switch ($item2) {
							case 'q5a':
								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
								break;
							case 'q5c':
								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
								break;
							case 'q5b':
								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
								break;
							case 'q5d':
								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
								break;
							default:
								//code block
						}
					} else  if (isset($pilihan['pilihan'][$item2])) {
						$single[$key][strtolower(str_replace('/', '_', $key2_name))] = $pilihan['pilihan'][$item2];
					} else {
						$single[$key][strtolower(str_replace('/', '_', $key2_name))] =  $item2;
					}
				}
			}
		}

		foreach ($multi as $key => $item) {
			$temp_single = $single[$key];
			foreach ($item as $key2 => $item2) {
				foreach ($item2 as $key3 => $item3) {
					$temp = $temp_single;
					$temp['multi_' . $key2] = $pilihan['pilihan'][$item3];
					array_push($total_semua, $temp);
				}
			}
		}

		return response()->json($total_semua);
	}



	public function pivot_data_lp($region)
	{
		$header = $this->url['pivot'];

		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];


		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $this->url['region'][$region] . '/data?format=json', [
			'headers' => $headers,
			'verify'  => false,
		]);
		$responseBody = json_decode($response->getBody());
		$lokal = $responseBody->results;
		$lokal1 = [];


		foreach ($lokal as $key => $item) {
			foreach ($item as $key2 => $item2) {
				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
					if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
						$data_explo = explode(' ', $item2);
						if (count($data_explo) > 0) {
							foreach ($data_explo as $item3) {
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name)) . '_ch-' . substr($item3, -1, 1)] = $pilihan['pilihan'][$item3];
							}
						}
					} else if (strtolower(str_replace('/', '_', $key2_name)) === '5') {
						switch ($item2) {
							case 'q5a':
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
								break;
							case 'q5c':
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
								break;
							case 'q5b':
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
								break;
							case 'q5d':
								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
								break;
							default:
								//code block
						}
					} else if (is_array($item2)) {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
					} else if (isset($pilihan['pilihan'][$item2])) {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $pilihan['pilihan'][$item2];
					} else {
						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
					}
				}
			}
		}

		return response()->json($lokal1);
	}




	// public function pivot_data_multi_lpAll()
	// {
	// 	$header = $this->url['pivot'];
	// 	$pilihan = $this->setting_data()->getOriginalContent();

	// 	$client = new Client();
	// 	$headers = [
	// 		'Authorization' => 'Token ' . $this->url['token'],
	// 	];

	// 	$allDataPivot = [];
	// 	foreach ($this->url['region'] as $region_data) {
	// 		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $region_data . '/data?format=json', [
	// 			// 'json' => $params,
	// 			'headers' => $headers,
	// 			'verify'  => false,
	// 		]);
	// 		$responseBody = json_decode($response->getBody());
	// 		$lokal = $responseBody->results;

	// 		$total_semua = [];
	// 		$single = [];
	// 		$multi = [];

	// 		foreach ($lokal as $key => $item) {
	// 			foreach ($item as $key2 => $item2) {
	// 				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
	// 					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
	// 					if (is_array($item2)) {
	// 						$single[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
	// 					} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
	// 						$data_explo = explode(' ', $item2);
	// 						if (count($data_explo) > 0) {
	// 							$multi[$key][strtolower(str_replace('/', '_', $key2_name))] = $data_explo;
	// 						}
	// 					} else if (strtolower(str_replace('/', '_', $key2_name)) === '5') {
	// 						switch ($item2) {
	// 							case 'q5a':
	// 								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
	// 								break;
	// 							case 'q5c':
	// 								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
	// 								break;
	// 							case 'q5b':
	// 								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
	// 								break;
	// 							case 'q5d':
	// 								$single[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
	// 								break;
	// 							default:
	// 								//code block
	// 						}
	// 					} else  if (isset($pilihan['pilihan'][$item2])) {
	// 						$single[$key][strtolower(str_replace('/', '_', $key2_name))] = $pilihan['pilihan'][$item2];
	// 					} else {
	// 						$single[$key][strtolower(str_replace('/', '_', $key2_name))] =  $item2;
	// 					}
	// 				}
	// 			}
	// 		}

	// 		foreach ($multi as $key => $item) {
	// 			$temp_single = $single[$key];
	// 			foreach ($item as $key2 => $item2) {
	// 				foreach ($item2 as $key3 => $item3) {
	// 					$temp = $temp_single;
	// 					$temp['multi_' . $key2] = $pilihan['pilihan'][$item3];
	// 					array_push($total_semua, $temp);
	// 				}
	// 			}
	// 		}
	// 		$allDataPivot = array_merge($allDataPivot, $total_semua);
	// 	}


	// 	return response()->json($allDataPivot);
	// }



	// public function pivot_data_lpAll()
	// {
	// 	$header = $this->url['pivot'];

	// 	$pilihan = $this->setting_data()->getOriginalContent();

	// 	$client = new Client();
	// 	$headers = [
	// 		'Authorization' => 'Token ' . $this->url['token'],
	// 	];

	// 	$allDataPivot = [];
	// 	foreach ($this->url['region'] as $region_data) {
	// 		$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $region_data . '/data?format=json', [
	// 			'headers' => $headers,
	// 			'verify'  => false,
	// 		]);
	// 		$responseBody = json_decode($response->getBody());
	// 		$lokal = $responseBody->results;
	// 		$lokal1 = [];


	// 		foreach ($lokal as $key => $item) {
	// 			foreach ($item as $key2 => $item2) {
	// 				if (array_key_exists(strtolower(str_replace('/', '_', $key2)), $header)) {
	// 					$key2_name = $header[strtolower(str_replace('/', '_', $key2))];
	// 					if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
	// 						$data_explo = explode(' ', $item2);
	// 						if (count($data_explo) > 0) {
	// 							foreach ($data_explo as $item3) {
	// 								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name)) . '_ch-' . substr($item3, -1, 1)] = $pilihan['pilihan'][$item3];
	// 							}
	// 						}
	// 					} else if (strtolower(str_replace('/', '_', $key2_name)) === '5') {
	// 						switch ($item2) {
	// 							case 'q5a':
	// 								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
	// 								break;
	// 							case 'q5c':
	// 								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Men-owned business';
	// 								break;
	// 							case 'q5b':
	// 								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
	// 								break;
	// 							case 'q5d':
	// 								$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = 'Women-owned business';
	// 								break;
	// 							default:
	// 						}
	// 					} else if (is_array($item2)) {
	// 						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
	// 					} else if (isset($pilihan['pilihan'][$item2])) {
	// 						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $pilihan['pilihan'][$item2];
	// 					} else {
	// 						$lokal1[$key][strtolower(str_replace('/', '_', $key2_name))] = $item2;
	// 					}
	// 				}
	// 			}
	// 		}
	// 		$allDataPivot = array_merge($allDataPivot, $lokal1);
	// 	}

	// 	return response()->json($allDataPivot);
	// }
}
