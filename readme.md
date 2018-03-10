# 區塊鏈實作

## 要求

* PHP >= 5.3
* composer (Dependency Manager for PHP)

## 安裝

```
$ composer install 
```

## 執行 

```
$ php index.php
產生中....

----------- 區塊鏈資訊 ------------

=========== 區塊內容 ============
創世區塊
此區塊 hash: 76f36030ba4f5572bac8d024b43c19197970403d5cc1475f78e3fd20baac4543

=========== 區塊內容 ============
前區塊 hash: 76f36030ba4f5572bac8d024b43c19197970403d5cc1475f78e3fd20baac4543
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 94
此區塊 hash: 0000562391c4bd685e3f15355445c55253f8721d7127261a77b59ec7011c9c1a

=========== 區塊內容 ============
前區塊 hash: 0000562391c4bd685e3f15355445c55253f8721d7127261a77b59ec7011c9c1a
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 66
此區塊 hash: 000097d17b6d08c3e24156172e690f18e59a184524e88f12f085d077b28c749f

=========== 區塊內容 ============
前區塊 hash: 000097d17b6d08c3e24156172e690f18e59a184524e88f12f085d077b28c749f
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 61
此區塊 hash: 0000517101482522fdd946925afe6519226d772554971d5be86e01f0e7634dc8

=========== 區塊內容 ============
前區塊 hash: 0000517101482522fdd946925afe6519226d772554971d5be86e01f0e7634dc8
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 84
此區塊 hash: 000013e9449683de7a7e54f57b521ec9bf55f994181a8ed21fc8164097b2ed99

=========== 區塊內容 ============
前區塊 hash: 000013e9449683de7a7e54f57b521ec9bf55f994181a8ed21fc8164097b2ed99
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 58
此區塊 hash: 0000c765685e4938604a006ec84e313badfb5e0e192839ae3fec15f348568872

=========== 區塊內容 ============
前區塊 hash: 0000c765685e4938604a006ec84e313badfb5e0e192839ae3fec15f348568872
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 100
此區塊 hash: 0000db4e6b0529446efc5a7e0d4393ff8b7318f5de304e9f2a03f7cb885c3f34

=========== 區塊內容 ============
前區塊 hash: 0000db4e6b0529446efc5a7e0d4393ff8b7318f5de304e9f2a03f7cb885c3f34
產生時間   : 2018-03-10 11:57:10
貨幣數量   : 8
此區塊 hash: 00008cc5411e4f243428f3125edb133071a9a5004a61361e8bc2a00f6c9bc32e

=========== 區塊內容 ============
前區塊 hash: 00008cc5411e4f243428f3125edb133071a9a5004a61361e8bc2a00f6c9bc32e
產生時間   : 2018-03-10 11:57:10
貨幣數量   : 1
此區塊 hash: 000046684e37d07119b9d317eecef9ff1e23d84edd11bf442afc67f51cbb7507

=========== 區塊內容 ============
前區塊 hash: 000046684e37d07119b9d317eecef9ff1e23d84edd11bf442afc67f51cbb7507
產生時間   : 2018-03-10 11:57:10
貨幣數量   : 6
此區塊 hash: 0000c6daab10343860394abca28f061235129c1bf7ad86776a675f7e7ef39172

=========== 區塊內容 ============
前區塊 hash: 0000c6daab10343860394abca28f061235129c1bf7ad86776a675f7e7ef39172
產生時間   : 2018-03-10 11:57:10
貨幣數量   : 15
此區塊 hash: 000043b59a2175c4fe21c24196e7b5b2beb51c5c8d726e197a9ce7be7adc3381

----------- 驗證 & 竄改 ------------

驗證區塊鏈是否正確(未被竄改)? true

模擬黑帽竄改第3個區塊
=========== 原本區塊內容 ============
前區塊 hash: 0000562391c4bd685e3f15355445c55253f8721d7127261a77b59ec7011c9c1a
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 66
此區塊 hash: 000097d17b6d08c3e24156172e690f18e59a184524e88f12f085d077b28c749f

=========== 新的區塊內容 ============
前區塊 hash: 0000562391c4bd685e3f15355445c55253f8721d7127261a77b59ec7011c9c1a
產生時間   : 2018-03-10 11:57:09
貨幣數量   : 1000
此區塊 hash: b4e2e903b83032ebc252e1bb3bfa839130c4de85e8a14be022bd2c2354ab0809

驗證區塊鏈是否正確(未被竄改)? false
```