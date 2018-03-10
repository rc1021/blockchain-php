<?php

// 載入 composer 套件
require __DIR__ . '/vendor/autoload.php';

// 宣告核心各類別
use Bitcoin\Blockchain;
use Bitcoin\Block;
use Bitcoin\Currency;

// 建立區塊鏈
$bitcoinChain = new Blockchain();

print "產生中....\n\n";

// 預計產生 10 個區塊
for($i = 0; $i < 10; $i++) {
    // 隨機產生交易金額
    $currency = new Currency(rand(1, 100));
    // 新增區塊
    $block = new Block($i+1, time(), $currency);
    // 加入區塊鏈
    $bitcoinChain->addBlock($block);
}

print "----------- 區塊鏈資訊 ------------\n\n";

foreach ($bitcoinChain->chain as $block) {
    print "=========== 區塊內容 ============\n";
    if($block->previousHash != "0") {
        print "前區塊 hash: ".$block->previousHash."\n";
        print "產生時間   : ".date("Y-m-d H:i:s", $block->timestamp)."\n";
        print "貨幣數量   : ".$block->data->amount."\n";
    }
    else
        print "創世區塊\n";
    print "此區塊 hash: ".$block->hash."\n";
    print "\n";
}

print "----------- 驗證 & 竄改 ------------\n\n";

// 驗證區塊鏈是否被竄改?
// 使用正常的方式產生區塊是不會被竄改的，所以答案是 true
print "驗證區塊鏈是否正確(未被竄改)? ".var_export($bitcoinChain->isChainValid(), true)."\n\n";

// 模擬黑帽竄改第3個區塊
print "模擬黑帽竄改第3個區塊\n\n";

print "=========== 原本區塊內容 ============\n";
print "前區塊 hash: ".$bitcoinChain->chain[2]->previousHash."\n";
print "產生時間   : ".date("Y-m-d H:i:s", $bitcoinChain->chain[2]->timestamp)."\n";
print "貨幣數量   : ".$bitcoinChain->chain[2]->data->amount."\n";
print "此區塊 hash: ".$bitcoinChain->chain[2]->hash."\n";
print "\n";

$bitcoinChain->chain[2]->data = new Currency(1000);  // 產生一個不可能出現的金額
$bitcoinChain->chain[2]->hash = $bitcoinChain->chain[2]->calculatedHash(); // 重新產生 hash

print "=========== 新的區塊內容 ============\n";
print "前區塊 hash: ".$bitcoinChain->chain[2]->previousHash."\n";
print "產生時間   : ".date("Y-m-d H:i:s", $bitcoinChain->chain[2]->timestamp)."\n";
print "貨幣數量   : ".$bitcoinChain->chain[2]->data->amount."\n";
print "此區塊 hash: ".$bitcoinChain->chain[2]->hash."\n";
print "\n";

// 驗證區塊鏈是否被竄改?
// 使用人為的方式竄改區塊，所以答案是 false
print "驗證區塊鏈是否正確(未被竄改)? ".var_export($bitcoinChain->isChainValid(), true)."\n";