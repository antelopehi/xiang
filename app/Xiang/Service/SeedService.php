<?php
namespace Xiang\Service;

class SeedService{
	public function addTimestmpes($aData){
		$now  =  date('y-m-d H:i:s');
		return array_merge($aData,['created_at'=>$now,'updated_at'=>$now]);
	}
}