<?php

ini_set('display_errors', true);
/* 載入Libraries檔 */
$sPath = '/var/www/html/xiang/resources/views/';
if (file_exists('./PdoModel.php')) {
    $sPath = './';
}
include_once($sPath . 'PdoModel.php');
$oPdo = new PdoModel;


/* 取得已超過目前時間且未開打的賽事清單 */
foreach ($oPdo->fetch("SELECT * FROM `member`") as $aVal) {
    print_r($aVal);
    exit;
}


exit;
