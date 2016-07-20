<?php

namespace Xiang\Model;

use Illuminate\Database\Eloquent\Model;

class Demo extends Model {
	protected $table = 'demo';
	protected $guarded = ['id'];
	public $primaryKey = 'id';

	public function scopeGetList() {
		return $this->select('mid');
	}

	public function scopeGetLastTen($query) {
		return $query->orderBy('created_at', 'desc')->take(10);
	}
}
