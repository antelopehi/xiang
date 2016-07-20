<?php

namespace App\Http\Controllers\Admin;
use Xiang\Model\Member;
use App\Http\Controllers\Controller;
use DB;

class MemberController extends Controller {

	/**
	 * 會員列表
	 */
	public function getIndex() {
		$sTitle = trans('main.mPred') . ' | ' . trans('main.manager') . ' | ' . trans('main.title');

		return view('web-' . session('ver', 'a') . '/member', [
			'sCntPage' => 'member',
			'sCntTitle' => trans('member.MemberFuncList'),
		]);
	}

	/**
	 * 會員基本資料
	 */
	public function getList() {
		ini_set('display_errors', true);
		$list2 = Member::getMember('0932195881');
		dd($list2->get()->toArray());
	}

}
