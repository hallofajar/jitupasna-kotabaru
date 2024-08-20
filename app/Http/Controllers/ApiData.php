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
			'pivot' => [
				'q_q1' => '1',
				'q_q2' => '2',
				'q_q2_a' => '2a',
				'q_q3' => '3',
				'q_q4' => '4',
				'q_q5' => '5',
				'q_q6' => '6',
				'q_q6_a' => '6a',
				'q_q7' => '7',
				'q_q7_a' => '7a',
				'q_q8' => '8',
				'q_q9' => '9',
				'q_q10' => '10',
				'q_q10_a' => '10a',
				'q_q10_b' => '10b',
				'q_q10_c' => '10c',
				'q_q11' => '11',
				'b_tenderpemerintah_q12' => '12',
				'b_tenderpemerintah_q14' => '14',
				'b_tenderpemerintah_q13' => '13',
				'b_tenderpemerintah_q13_a' => '13a',
				'b_tenderpemerintah_q15' => '15',
				'b_tenderpemerintah_q16' => '16',
				'b_tenderpemerintah_q16_a' => '16a',
				'b_tenderpemerintah_q17' => '17',
				'b_tenderpemerintah_q18' => '18',
				'b_tenderpemerintah_q18_a' => '18a',
				'b_tenderpemerintah_q19' => '19',
				'b_tenderpemerintah_q19_a' => '19a',
				'b_tenderpemerintah_q20' => '20',
				'b_tenderpemerintah_q21' => '21',
				'b_tenderpemerintah_q22' => '22',
				'b_tenderpemerintah_q23' => '23',
				'b_tenderpemerintah_q24' => '24',
				'b_tenderpemerintah_q25' => '25',
				'b_tenderpemerintah_q26' => '26',
				'c_ekosistem_partisipasi_umkm_q27' => '27',
				'c_ekosistem_partisipasi_umkm_q28' => '28',
				'c_ekosistem_partisipasi_umkm_q29' => '29',
				'c_ekosistem_partisipasi_umkm_q30' => '30',
				'c_ekosistem_partisipasi_umkm_q31' => '31',
				'c_ekosistem_partisipasi_umkm_q31a' => '31a',
				'c_ekosistem_partisipasi_umkm_q32' => '32',
				'd_manfaat_pengadaan_pemerintah_q33' => '33',
				'd_manfaat_pengadaan_pemerintah_q34' => '34',
				'd_manfaat_pengadaan_pemerintah_q34a' => '34a',
				'e_rencana_ke_depan_q35' => '35',
				'e_rencana_ke_depan_q36' => '36',
				'e_rencana_ke_depan_q36a' => '36a',
			]
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
		$url_pilihan = $this->url['data']['url_pilihan'];
		$url_multic = $this->url['data']['url_multic'];
		$url_grafik = $this->url['data']['url_grafik'];

		$result_data = [
			'pilihan' => [
				' ' => ' ',
			],
			'multi_c' => [],
			'grafik' => []
		];


		// ambil tabel pilihan
		$rowCount = 0;
		if (($handle = fopen($url_pilihan, 'r')) !== FALSE) { // Check the resource is valid
			while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) { // Check opening the file is OK!
				$rowCount++;
				if ($rowCount > 1) {
					$result_data['pilihan'][$data[0]] = $data[1];
				};
			}
			fclose($handle);
		}

		// ambil tabel multi_c
		$rowCount = 0;
		if (($handle = fopen($url_multic, 'r')) !== FALSE) { // Check the resource is valid
			while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) { // Check opening the file is OK!
				$rowCount++;
				if ($rowCount > 1) {
					array_push($result_data['multi_c'], str_replace('-', '_', $data[0]));
				};
			}
			fclose($handle);
		}

		// ambil tabel Grafik
		$rowCount = 0;
		if (($handle = fopen($url_grafik, 'r')) !== FALSE) { // Check the resource is valid
			while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) { // Check opening the file is OK!
				$rowCount++;
				if ($rowCount > 1) {
					$result_data['grafik'][strtolower(str_replace('-', '_', $data[0]))] = [
						"kode" => $data[1],
						"judul" => $data[2],
						"grafik" => $data[3],
						"jenis_data" => $data[4]
					];
				};
			}
			fclose($handle);
		}

		header('Access-Control-Allow-Origin: *');
		header("Access-Control-Allow-Headers: X-API-KEY, Origin, X-Requested-With, Content-Type, Accept, Access-Control-Request-Method, Authorization");
		header("Access-Control-Allow-Methods: GET, POST, OPTIONS, PUT, DELETE");

		// $result_data = $this->dataSetting->dataSetting();
		return response()->json($result_data);
	}


	public function data($region)
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
	public function detail_data($region, $id)
	{

		$data_api = $this->data($region)->getOriginalContent();

		return response()->json($data_api[$id]);
	}
	public function geojson($region)
	{

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
	public function resume_grafik($region = null)
	{
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
				} else if (strtolower(str_replace('/', '_', $key2)) === 'q_q5') {
					switch ($item2) {
						case 'q5a':
							$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = 'q5a';
							break;
						case 'q5c':
							$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = 'q5a';
							break;
						case 'q5b':
							$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = 'q5b';
							break;
						case 'q5d':
							$lokal1[$key][strtolower(str_replace('/', '_', $key2))] = 'q5b';
							break;
						default:
							//code block
					}
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
	public function resume_all($region = null)
	{
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

	public function pivot_data($region)
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

	public function pivot_data_multi($region)
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
	public function resumeAllData()
	{
		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];
		$all_array = [];
		$jml_responden = [];
		foreach ($this->url['region'] as $item) {
			$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $item . '/data?format=json', [
				'headers' => $headers,
				'verify'  => false,
			]);

			$responseBody = json_decode($response->getBody());
			$lokal = $responseBody->results;
			foreach ($lokal as $key => $item) {
				$lokal1 = [];
				foreach ($item as $key2 => $item2) {
					if (isset($jml_responden[strtolower(str_replace('/', '_', $key2))])) {
						$jml_responden[strtolower(str_replace('/', '_', $key2))] = $jml_responden[strtolower(str_replace('/', '_', $key2))] + 1;
					} else {
						$jml_responden[strtolower(str_replace('/', '_', $key2))] = 1;
					}

					if (is_array($item2) || is_object($item2)) {
						$lokal1[strtolower(str_replace('/', '_', $key2))] = $item2;
					} else if (strtolower(str_replace('/', '_', $key2)) === 'q_q5') {
						switch ($item2) {
							case 'q5a':
								$lokal1[strtolower(str_replace('/', '_', $key2))] = 'q5a';
								break;
							case 'q5c':
								$lokal1[strtolower(str_replace('/', '_', $key2))] = 'q5a';
								break;
							case 'q5b':
								$lokal1[strtolower(str_replace('/', '_', $key2))] = 'q5b';
								break;
							case 'q5d':
								$lokal1[strtolower(str_replace('/', '_', $key2))] = 'q5b';
								break;
							default:
								//code block
						}
					} else if (in_array(strtolower(str_replace('/', '_', $key2)), $pilihan['multi_c'])) {
						$lokal1[strtolower(str_replace('/', '_', $key2))] = pecahmulti_not($item2, $pilihan['pilihan']);
					} else {
						$lokal1[strtolower(str_replace('/', '_', $key2))] =  $item2;
					}
				}
				array_push($all_array, $lokal1);
			}
		}
		// dd($all_array);


		$hasil_array1 = [];
		$hasil_array = [];

		foreach ($all_array as $key => $value) {
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




	public function pivot_data_multi_lpAll()
	{
		$header = $this->url['pivot'];
		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];

		$allDataPivot = [];
		foreach ($this->url['region'] as $region_data) {
			$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $region_data . '/data?format=json', [
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
			$allDataPivot = array_merge($allDataPivot, $total_semua);
		}


		return response()->json($allDataPivot);
	}



	public function pivot_data_lpAll()
	{
		$header = $this->url['pivot'];

		$pilihan = $this->setting_data()->getOriginalContent();

		$client = new Client();
		$headers = [
			'Authorization' => 'Token ' . $this->url['token'],
		];

		$allDataPivot = [];
		foreach ($this->url['region'] as $region_data) {
			$response = $client->request('GET', 'https://eu.kobotoolbox.org/api/v2/assets/' . $region_data . '/data?format=json', [
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
			$allDataPivot = array_merge($allDataPivot, $lokal1);
		}

		return response()->json($allDataPivot);
	}
}
