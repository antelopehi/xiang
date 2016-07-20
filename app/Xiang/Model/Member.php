<?php

namespace Xiang\model;

use Illuminate\Database\Eloquent\Model;

class Member extends Model
{
	// protected $table = 'members';
	protected $guarded = ['mid'];
	public $primaryKey = 'mid';

	public function scopeGetList() {
		return $this->select('mid');
	}
	/**
	 * 取得會員資料
	 * @return [type] [description]
	 */
	public function scopeGetMember($query,$account) {
		return $query->whereAccount($account);
	}
}
