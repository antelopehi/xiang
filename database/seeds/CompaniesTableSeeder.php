<?php

use Illuminate\Database\Seeder;
use Xiang\Service\SeedService;

class CompaniesTableSeeder extends Seeder {
	protected $dataArray =
		[
		[
			'companies' => [
				'realname' => '香又香股份有限公司',
				'nickname' => '香又香',
				'tel' => '(03)8228111',
				'address' => '花蓮縣花蓮市美工路15號',
				'unite_no' => '77918391',
			],
			'members' => [
				[
					'account' => 'admin1',
					'realname' => '林小羊1',
					'password' => 'a123456',
					'type' => 'admin',
				],
				[
					'account' => 'admin2',
					'realname' => '林小羊2',
					'password' => 'a123456',
					'type' => 'admin',
				],
			],
		],
		[
			'companies' => [
				'realname' => '測試A有限公司',
				'nickname' => '測試A',
				'tel' => '(03)8872521',
				'address' => '花蓮縣瑞穗鄉中山一段521號',
				'unite_no' => '77972521',
			],
			'members' => [
				[
					'account' => '0932195880',
					'realname' => 'a林880',
					'password' => 'a123456',
					'type' => 'customer',
				],
				[
					'account' => '0932195881',
					'realname' => 'a林881',
					'password' => 'a123456',
					'type' => 'customer',
				],
			],
		],
		[
			'companies' => [
				'realname' => '測試B有限公司',
				'nickname' => '測試B',
				'tel' => '(03)8872522',
				'address' => '花蓮縣瑞穗鄉中山一段522號',
				'unite_no' => '77972522',
			],
			'members' => [
				[
					'account' => '0932195882',
					'realname' => 'b林882',
					'password' => 'a123456',
					'type' => 'customer',
				],
				[
					'account' => '0932195883',
					'realname' => 'b林883',
					'password' => 'a123456',
					'type' => 'customer',
				],
			],
		],
	];
	public function run() {
		DB::table('companies')->delete();
		DB::table('members')->delete();
		$ss = new SeedService();
		foreach ($this->dataArray as $key => $value) {
			$aftValue = $ss->addTimestmpes($value['companies']);
			$cid = (DB::table('companies')->insertGetId($value['companies']));
			foreach ($value['members'] as $member) {
				$aftMember = $ss->addTimestmpes($member);
				$aftMember['cid'] = $cid;
				DB::table('members')->insert($aftMember);
			}
		}
	}
}
