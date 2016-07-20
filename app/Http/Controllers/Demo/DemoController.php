<?php

namespace App\Http\Controllers\Demo;
use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Xiang\Model\Demo;

class DemoController extends Controller {

	/**
	 * 會員列表
	 */
	public function getIndex() {
		$dbData = Demo::GetLastTen()->get()->toArray();
		$datax = [];
		$date = [];
		foreach ($dbData as $value) {
			$datax[] = $value['x'];
			$date[] = substr($value['created_at'], 5, 11);
		}
		return view('demo-view', ['datax' => json_encode($datax), 'c_date' => json_encode($date)]);
	}

	public function postX(Request $request) {
		$this->validate($request, [
			'x' => 'required|integer',
		]);
		Demo::create(["x" => $request->x]);
		$dbData = Demo::GetLastTen()->get()->toArray();
		$datax = [];
		$date = [];
		foreach ($dbData as $value) {
			$datax[] = $value['x'];
			$date[] = substr($value['created_at'], 5, 11);
		}
		return view('demo-view', ['datax' => json_encode($datax), 'c_date' => json_encode($date)]);
	}

	public function putX(Request $request, $x) {
		Demo::create(["x" => $request->x]);
		dd('成功');
	}

}
