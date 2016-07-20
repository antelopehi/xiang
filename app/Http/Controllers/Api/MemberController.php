<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Config;

class MemberController extends Controller {

	public function v1DoLoging(Request $request) {
		//驗證
		//檢查密碼
		//sission儲存
		$this->validate($request, [
			'account' => 'required'.Config::get('validate.members.account',''),
		//	'password' => 'required'.Config::get('validate.members.password',''),
		]);
		//dd(Config::get('validate.members.account',''));
		dd('ddd');

	}
}
