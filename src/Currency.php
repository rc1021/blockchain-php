<?php

namespace Bitcoin;

/**
* 貨幣類別
*/
class Currency
{
    public $amount; // 數量
    
    function __construct($amount = 0)
    {
        $this->amount = $amount;
    }
}