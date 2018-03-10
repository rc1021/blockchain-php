<?php
namespace Bitcoin;

/**
* 區塊類別
*/
class Block
{
    public $index; // 元素編號
    public $timestamp; // 創造時間
    public $data; // 資料內容
    public $previousHash; // 區塊鏈之中，前一個區塊的編號
    public $hash; // 此區塊的編號
    private $nonce = 0; // proof of work 重新生產的次數

    public function __construct($index, $timestamp, $data, $previousHash="") {
        $this->index = $index;
        $this->timestamp = $timestamp;
        $this->data = $data;
        $this->previousHash = $previousHash;
        $this->hash = $this->calculatedHash();
    }

    // 計算 hash 值
    public function calculatedHash() {
        return hash('sha256', $this->index.$this->previousHash.$this->timestamp.serialize($this->data).$this->nonce);
    }

    // 使用工作量證明產生 hash 值
    public function instanceBlock($difficulty) {
        // proof of work
        while (substr($this->hash, 0, $difficulty) !== implode("", array_fill(0, $difficulty, "0"))) {
            $this->nonce++;
            $this->hash = $this->calculatedHash();
        }
        // print "Block mined: ".$this->hash."\n";
    }
}