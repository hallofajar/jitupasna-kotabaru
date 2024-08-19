<?php

namespace App\Http\Controllers\user;

use App\Http\Controllers\Controller;
use App\Http\Controllers\ApiData;
use Illuminate\Http\Request;

class DashboardController extends Controller
{
	protected $apiData;
	public function __construct()
	{
		$this->apiData = new ApiData();
	}

	public function index()
	{



		$data = [
			'title' => 'Dashboard',
			'active' => 'dashboard',
			'datasurvei' => [
				'sidoarjo' => $this->apiData->resume_all('sidoarjo')->getOriginalContent()['username']['total'],
				'surabaya' => $this->apiData->resume_all('surabaya')->getOriginalContent()['username']['total'],
				'bekasi' => $this->apiData->resume_all('bekasi')->getOriginalContent()['username']['total'],
				'bandung' => $this->apiData->resume_all('bandung')->getOriginalContent()['username']['total'],
				'jakarta timur' => $this->apiData->resume_all('jakartatimur')->getOriginalContent()['username']['total'],
				'jakarta barat' => $this->apiData->resume_all('jakartabarat')->getOriginalContent()['username']['total'],
			]
		];
		return view('user.v_dashboard', $data);
	}

	public function maps()
	{
		$data = [
			'title' => 'Peta Lokasi',
			'active' => 'maps',
		];
		return view('user.v_map', $data);
	}
	public function resume($region)
	{

		// Ambil Grafik
		// $data_grafik = [];
		// $url_grafik = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS-LYlj8kZaH7I1K7bAe6VqTgKkpTTdZGN0WD2tORafeGAwkqsxXZN1ErBc5V8xFN4P24YwjneAqTno/pub?gid=552506723&single=true&output=csv';
		// $rowCount = 0;
		// if (($handle = fopen($url_grafik, 'r')) !== FALSE) { // Check the resource is valid
		// 	while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) { // Check opening the file is OK!
		// 		$rowCount++;
		// 		if ($rowCount > 1) {
		// 			$data_grafik[strtolower(str_replace('-', '_', $data[0]))] = [
		// 				"kode" => $data[1],
		// 				"judul" => $data[2],
		// 				"grafik" => $data[3],
		// 				"jenis_data" => $data[4]
		// 			];
		// 		};
		// 	}
		// 	fclose($handle);
		// }
		// end grafik

		$data_resume = $this->apiData->resume_grafik($region)->getOriginalContent();

		// $data_resume2 = [];
		// foreach ($data_grafik as $key => $value) {
		// 	if (isset($data_resume[$key])) {
		// 		$data_resume2[$key] = $data_resume[$key];
		// 	}
		// }
		$data['title'] = 'Resume';
		$data['resume'] = $data_resume;
		$data['color'] = $this->apiData->color()->getOriginalContent();
		$data['active'] = 'resume ' . $region;
		$data['region'] = $region;
		return view('user/v_resume', $data);
	}

	public function listResponden($region)
	{
		$data = [
			'title' => 'List Responden',
			'active' => 'list responden',
			'region' => $region,
		];
		$data_api = $this->apiData->data($region)->getOriginalContent();

		function ubah_format($va)
		{
			$va = substr($va, 0, 19);
			$va = str_replace('-', '/', $va);
			$va = str_replace('T', ' ', $va);
			return $va;
		}

		foreach ($data_api as $key => $value1) {
			$time_survei = intval(date_create_from_format("Y/m/j H:i:s", ubah_format($value1['end']))->format('U')) - intval(date_create_from_format("Y/m/j H:i:s", ubah_format($value1['start']))->format('U'));
			$data['tabel_data'][$key] = [
				'id' => $key,
				'responden' => $value1['a_informasiumum_a4'],
				'Perusahaan' => $value1['a_informasiumum_a3'],
				'Jabatan' => $value1['q_q2'],
				'enumerator' =>  $value1['username'],
				// 'email' =>  $value1['email'],
				'start' => $value1['start'],
				'end' => $value1['end'],
				'waktu_wawancara' => [
					'jam' => round($time_survei / (60 * 60)),
					'menit' => ($time_survei / 60) % 60
				],
			];
		}

		return view('user/v_respon', $data);
	}
	public function detailResponden($region, $id)
	{

		$data_api = $this->apiData->detail_data($region, $id)->getOriginalContent();

		$data['detail'] = $data_api;
		$data['title'] = 'Detail Responden';
		$data['active'] = 'list responden';
		$data['region'] = $region;

		return view('user/v_detail_responden', $data);
	}

	public function Crosstab($region)
	{
		$data = [
			'title' => 'Crosstab',
			'active' => 'crosstab',
			'region' => $region,
		];
		if ($region == 'all') {
			return view('user.v_crosstabAll', $data);
		} else {
			return view('user/v_crosstab', $data);
		}
	}
	public function CrosstabAll()
	{
		$data = [
			'title' => 'Crosstab',
			'active' => 'crosstab',
			'region' => 'all',
		];
		return view('user/v_crosstab', $data);
	}

	public function allResume()
	{
		// $data_grafik = [];
		// $url_grafik = 'https://docs.google.com/spreadsheets/d/e/2PACX-1vS-LYlj8kZaH7I1K7bAe6VqTgKkpTTdZGN0WD2tORafeGAwkqsxXZN1ErBc5V8xFN4P24YwjneAqTno/pub?gid=552506723&single=true&output=csv';
		// $rowCount = 0;
		// if (($handle = fopen($url_grafik, 'r')) !== FALSE) { // Check the resource is valid
		// 	while (($data = fgetcsv($handle, 100000, ",")) !== FALSE) { // Check opening the file is OK!
		// 		$rowCount++;
		// 		if ($rowCount > 1) {
		// 			$data_grafik[strtolower(str_replace('-', '_', $data[0]))] = [
		// 				"kode" => $data[1],
		// 				"judul" => $data[2],
		// 				"grafik" => $data[3],
		// 				"jenis_data" => $data[4]
		// 			];
		// 		};
		// 	}
		// 	fclose($handle);
		// }


		$data_resume = $this->apiData->resumeAllData()->getOriginalContent();
		// $data_resume2 = [];
		// foreach ($data_grafik as $key => $value) {
		// 	if (isset($data_resume[$key])) {
		// 		$data_resume2[$key] = $data_resume[$key];
		// 	}
		// }
		// dd($data_resume);
		$data['title'] = 'Resume';
		$data['resume'] = $data_resume;
		$data['color'] = $this->apiData->color()->getOriginalContent();
		$data['active'] = 'resume-all';
		$data['region'] = 'all';
		// dd($data);
		return view('user/v_resume', $data);
	}

	public function printResume($region)
	{
		if ($region == 'all') {
			$data_resume = $this->apiData->resumeAllData()->getOriginalContent();
		} else {
			$data_resume = $this->apiData->resume_grafik($region)->getOriginalContent();
		}

		$data['title'] = 'Resume';
		$data['resume'] = $data_resume;
		$data['color'] = $this->apiData->color()->getOriginalContent();
		$data['active'] = 'resume ' . $region;
		$data['region'] = $region;
		return view('user/v_resume_print', $data);
	}


	public function tablecrosstab($region)
	{
		$data = [
			'region' => $region,
			'title' => 'table crosstab',
			'active' => 'tablecrosstab-' . $region,
			'responden_total' => 12,
			'data_single' => $this->apiData->pivot_data_lp($region)->getOriginalContent(),
			'data_multi' => $this->apiData->pivot_data_multi_lp($region)->getOriginalContent(),
		];

		return view('user.v_pivot_req', $data);
	}
	public function tablecrosstaball()
	{
		$data = [
			'region' => 'all',
			'title' => 'table crosstab',
			'active' => 'tablecrosstab-all',
			'responden_total' => 12,
			'data_single' => $this->apiData->pivot_data_lpAll()->getOriginalContent(),
			'data_multi' => $this->apiData->pivot_data_multi_lpAll()->getOriginalContent(),
		];

		return view('user.v_pivot_req', $data);
	}
}
