<?php

$usdeur = 0;
$crypto = [];
$forex = [];

try {
    $forex = makeCurlRequest("https://api.1forge.com/quotes?pairs=USDJPY,USDGBP,USDCHF,USDCAD,EURUSD,EURJPY,EURCHF,EURGBP,USDTRY,EURTRY,GBPTRY,XAUUSD,XAGUSD&api_key=HyWJyy31mercu9Hp6h18o3p0jxvznptq");
    foreach ($forex as $item) {
        if($item->symbol == 'EURUSD'){
            $usdeur = 1 / floatval($item->price);
        }
    }
} catch (\Exception $e) {
    echo "Error loading crypto prices.";
    print_r($e);
    exit;
}

try {
    $symbols = ['BTC','ETH','XLM','XRP'];
    $crypto_prices = makeCurlRequest("https://api.coincap.io/v2/assets")->data;
    foreach ($crypto_prices as $item) {
        if(in_array($item->symbol, $symbols)){
            $crypto[] = (object) [
                "symbol" => $item->symbol . 'USD',
                "price" => $item->priceUsd,
            ];
            $crypto[] = (object) [
                "symbol" => $item->symbol . 'EUR',
                "price" => floatval($item->priceUsd) * floatval($usdeur),
            ]; 
        }
    }
} catch (\Exception $e) {
    echo "Error loading crypto prices.";
    print_r($e);
    exit;
}

$result = (object) [
    "forex" => $forex,
    "crypto" => $crypto
]; 

file_put_contents('../include/price.json', json_encode($result));



function makeCurlRequest($url){
    $curl = curl_init();

    curl_setopt_array($curl, array(
        CURLOPT_URL => $url,
        CURLOPT_RETURNTRANSFER => true,
        CURLOPT_ENCODING => "",
        CURLOPT_MAXREDIRS => 10,
        CURLOPT_TIMEOUT => 30000,
        CURLOPT_HTTP_VERSION => CURL_HTTP_VERSION_1_1,
        CURLOPT_CUSTOMREQUEST => "GET",
        CURLOPT_HTTPHEADER => array(
            "content-type: application/x-www-form-urlencoded",
        ),
    ));
    $response = curl_exec($curl);
    $err = curl_error($curl);

    curl_close($curl);

    if ($err) {
        throw new Exception($err->getMessage(), $err->getCode(), $err);
    } else {
        $responseJson = json_decode($response);
        return $responseJson;
    }
}


/* Indices */
// DAX,
// SP500
// NASDAQ100
// FTSE100
// US30

/* Commodities */
// XAUUSD
// XAGUSD
// XPDUSD
// XPTUSD
// Sugar
// Copper

/* CRYPTO */
// BTCUSD
// BTCEUR
// ETHUSD
// ETHEUR
// XLMUSD
// XLMEUR
// XRPUSD
// XRPEUR