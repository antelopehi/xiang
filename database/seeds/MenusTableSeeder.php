<?php

use Illuminate\Database\Seeder;
use Xiang\Service\SeedService;


class MenusTableSeeder extends Seeder {
	// protected $now = ;
	protected $dataArray = [
		[
			'menus' => ['滷肉飯','好吃滷肉飯'],
			'menu_details' => [
				[30,1,0,0,0],
			]
		],[
			'menus' => ['炒米粉','好吃炒米粉'],
			'menu_details' => [
				[30,1,0,0,0]
			],
		],[
			'menus' => ['炒麵','好吃炒麵'],
			'menu_details' => [
				[30,1,0,0,0]
			],
		],[
			'menus' => ['麵包','好吃麵包'],
			'menu_details' => [
				[20,1,0,0,0]
			],
		],[
			'menus' => ['包子','好吃包子'],
			'menu_details' => [
				[20,1,0,0,0]
			],
		],[
			'menus' => ['饅頭','好吃饅頭'],
			'menu_details' => [
				[10,1,0,0,0]
			],
		],[
			'menus' => ['清粥','好吃清粥'],
			'menu_details' => [
				[10,1,0,0,0]
			],
		],[
			'menus' => ['鹹粥','好吃鹹粥'],
			'menu_details' => [
				[20,1,0,0,0]
			],
		],[
			'menus' => ['牛奶','好吃牛奶'],
			'menu_details' => [
				[20,1,0,0,0]
			],
		],[
			'menus' => ['豆漿','好吃豆漿'],
			'menu_details' => [
				[10,1,1,1,1]
			],
		],[
			'menus' => ['紅茶','好吃紅茶'],
			'menu_details' => [
				[10,1,1,1,1]
			],
		],[
			'menus' => ['奶茶','好吃奶茶'],
			'menu_details' => [
				[10,1,1,1,1]
			],
		],[
			'menus' => ['米漿','好吃米漿'],
			'menu_details' => [
				[10,1,1,1,1]
			],
		],[
			'menus' => ['豬血湯','好吃豬血湯'],
			'menu_details' => [
				[30,1,0,0,0]
			],
		],[
			'menus' => ['四神湯','好吃四神湯'],
			'menu_details' => [
				[30,1,0,0,0]
			],
		],[
			'menus' => ['雞腿便當','好吃雞腿便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		],[
			'menus' => ['雞腿便當','好吃雞腿便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		],[
			'menus' => ['牛腩便當','好吃牛腩便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],		],[
			'menus' => ['扣肉便當','好吃扣肉便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		],[
			'menus' => ['咖哩雞便當','好吃咖哩雞便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		],[
			'menus' => ['豬肉便當','好吃豬肉便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		],[
			'menus' => ['牛肉便當','好吃牛肉便當'],
			'menu_details' => [
				[75,0,1,1,1]
			],		],[
			'menus' => ['白飯','好吃白飯'],
			'menu_details' => [
				[75,0,1,1,1]
			],
		]
	];

	public function run() {
		DB::table('menus')->delete();
		DB::table('menu_details')->delete();
		$ss = new SeedService();
		foreach ($this->dataArray as $value) {
			$menu = [
				'realname' => $value['menus'][0],
				'summary' => $value['menus'][1],
			];
			$aftMenu = $ss->addTimestmpes($menu);
			$id = (DB::table('menus')->insertGetId($aftMenu));
			foreach ($value['menu_details'] as $memuDetail) {
				$aftMemuDetail =[
					'meid' => $id,
					'price' => $memuDetail[0],
					'breakfast' => $memuDetail[1],
					'lunch' => $memuDetail[2],
					'dinner' => $memuDetail[3],
					'supper' => $memuDetail[4],
					'beginning' => date('Y-m-d H:i:s')
				];
				$aftMemuDetail = $ss->addTimestmpes($aftMemuDetail);
				DB::table('menu_details')->insert($aftMemuDetail);
			}
		}
	}

}
