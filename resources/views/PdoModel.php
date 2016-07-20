<?php

class PdoModel
{
    /* PDO 連線設定 */
    private $sHost = 'localhost';
    private $iPort = '3306';
    private $sDBName = 'xiang';
    private $sDBUser = 'root';
    private $sDBPwd = '1qazxsw2';
    private $PdoOptions = [
        PDO::ATTR_PERSISTENT         => false,
        PDO::ATTR_ERRMODE            => PDO::ERRMODE_EXCEPTION,
        PDO::ATTR_EMULATE_PREPARES   => false,
        PDO::MYSQL_ATTR_INIT_COMMAND => 'SET NAMES utf8'
    ];
    private $oPDO;

    /**
     * 開啟資料庫連線
     */
    public function open()
    {
        /* 資料庫連線 */
        try {
            $this->oPDO = new PDO('mysql:host='.$this->sHost.';port='.$this->iPort.';dbname='.$this->sDBName,
                                  $this->sDBUser, $this->sDBPwd, $this->PdoOptions);
            $this->oPDO->exec('SET CHARACTER SET utf8');
        } catch (PDOException $e) {
            throw new PDOException($e->getMessage());
        }
    }

    /**
     * 單筆執行語法
     * @param  string $sQuery [執行語法]
     * @return array          [執行語法回傳資料]
     */
    public function query($sQuery)
    {
        $this->open();
        $oSQL = $this->oPDO->prepare($sQuery);
        $oData = $oSQL->execute();
        $this->close();
        return $oData;
    }

    /**
     * 批次執行語法
     * @param  array $aQuery [執行語法陣列]
     * @return array         [執行語法回傳資料]
     */
    public function batch_query($aQuery)
    {
        $oData = [];
        $this->open();
        foreach ($aQuery as $sQuery) {
            $oSQL = $this->oPDO->prepare($sQuery);
            $oData[] = $oSQL->execute();
        }
        $this->close();
        return $oData;
    }

    /**
     * 取得單筆資料
     * @param  string  $sQuery [執行語法陣列]
     * @return array           [執行語法回傳資料]
     */
    public function find($sQuery)
    {
        $this->open();
        $oSQL = $this->oPDO->prepare($sQuery);
        $oSQL->execute();
        $oData = $oSQL->fetch(PDO::FETCH_ASSOC);
        $this->close();
        return $oData;
    }

    /**
     * 取得多筆資料
     * @param  string $sQuery [執行語法陣列]
     * @return array          [執行語法回傳資料]
     */
    public function fetch($sQuery)
    {
        $this->open();
        $oSQL = $this->oPDO->prepare($sQuery);
        $oSQL->execute();
        $oData = $oSQL->fetchAll(PDO::FETCH_ASSOC);
        $this->close();
        return $oData;
    }

    /**
     * 新增資料並回傳 AUTO_INCREMENT的ID值
     * @param  string   $sQuery   [執行語法陣列]
     * @return integer            [AUTO_INCREMENT的ID值]
     */
    public function add($sQuery)
    {
        $this->open();
        $oSQL = $this->oPDO->prepare($sQuery);
        $oSQL->execute();
        $oData = $this->oPDO->lastInsertId();
        $this->close();
        return $oData;
    }

    /**
     * 關閉資料庫連線
     */
    public function close()
    {
        //關閉資料庫
        unset($this->oPDO);
    }
}
