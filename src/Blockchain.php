<?php
namespace Bitcoin;

use Bitcoin\Block;

/**
* 區塊鏈類別
*/
class Blockchain
{
    public $chain;

    public function __construct() {
        $this->chain = [$this->createGenesisBlock()];
        $this->difficulty = 4;
    }

    // 創世區塊方法
    private function createGenesisBlock() {
        return new Block(0, time(), "Genesis block", "0");
    }

    // 回傳區塊鏈之中最後一個區塊
    private function getLastestBlock() {
        return $this->chain[count($this->chain) - 1];
    }

    // 加入一個新的區塊，並為此區塊產生 hash 值，以及關聯上一個區塊
    public function addBlock($newBlock) {
        $newBlock->previousHash = $this->getLastestBlock()->hash;
        $newBlock->instanceBlock($this->difficulty);
        $this->chain[] = $newBlock;
    }

    // 驗證區塊鏈是否正確(未被竄改)
    public function isChainValid() {
        $chainLength = count($this->chain);
        for($i = 1; $i < $chainLength; $i++) 
        {
            $currentBlock = $this->chain[$i];    // 現在的區塊
            $previousBlock = $this->chain[$i-1]; // 上一個區塊

            // 為自己的區塊比對
            if($currentBlock->hash !== $currentBlock->calculatedHash())
                return false;

            // 與前一個區塊比對
            if($previousBlock->hash !== $currentBlock->previousHash) {
                return false;
            }
        }

        // 沒問題，回傳 true
        return true;
    }
}