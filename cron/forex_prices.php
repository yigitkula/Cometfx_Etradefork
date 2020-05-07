<?php
require_once '../vendor/autoload.php';
use Goutte\Client;
$client = new Client();

$usdeur = 0;
$crypto = [];
$forex = [];
$indices = [];
$commodities = [];

/*XAUUSD
XAGUSD
XPDUSD

Sugar
Copper
*/



try {
    $crawler = $client->request('GET', 'https://www.investing.com/indices/germany-30');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $indices[] = (object) [
        "symbol" => 'DAX',
        "price" => floatval($price)
    ];
} catch (\Exception $e) {
    echo "Error loading dax price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/indices/uk-100');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $indices[] = (object) [
        "symbol" => 'FTSE100',
        "price" => floatval($price)
    ];
} catch (\Exception $e) {
    echo "Error loading FTS100 price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/indices/nq-100');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $indices[] = (object) [
        "symbol" => 'NASDAQ100',
        "price" => floatval($price)
    ];
} catch (\Exception $e) {
    echo "Error loading NASDAQ100 price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/indices/us-spx-500');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $indices[] = (object) [
        "symbol" => 'SP500',
        "price" => floatval($price)
    ];
} catch (\Exception $e) {
    echo "Error loading SP500 price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/indices/us-30-futures');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $indices[] = (object) [
        "symbol" => 'US30',
        "price" => floatval($price)
    ];
} catch (\Exception $e) {
    echo "Error loading US30 price.";
    print_r($e);
    exit;
}



try {
    $forex_items = makeCurlRequest("https://api.1forge.com/quotes?pairs=USDJPY,USDGBP,USDCHF,USDCAD,EURUSD,EURJPY,EURCHF,EURGBP,USDTRY,EURTRY,GBPTRY,XAUUSD,XAGUSD&api_key=HyWJyy31mercu9Hp6h18o3p0jxvznptq");
    foreach ($forex_items as $item) {
        if($item->symbol == 'EURUSD'){
            $usdeur = 1 / floatval($item->price);
        } else if($item->symbol == 'XAUUSD' || $item->symbol == 'XAGUSD'){
            $commodities[] = (object) [
                "symbol" => $item->symbol,
                "price" => floatval($item->price),
            ];
        } else {
            $forex[] = $item;
        }
    }
} catch (\Exception $e) {
    echo "Error loading crypto prices.";
    print_r($e);
    exit;
}



try {
    $crawler = $client->request('GET', 'https://www.investing.com/currencies/xpd-usd');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $commodities[] = (object) [
        "symbol" => 'XPDUSD',
        "price" => floatval($price),
    ];
} catch (\Exception $e) {
    echo "Error loading XPDUSD price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/currencies/xpt-usd');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $commodities[] = (object) [
        "symbol" => 'XPTUSD',
        "price" => floatval($price),
    ];
} catch (\Exception $e) {
    echo "Error loading XPTUSD price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/commodities/copper');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $commodities[] = (object) [
        "symbol" => 'COPPER',
        "price" => floatval($price),
    ];
} catch (\Exception $e) {
    echo "Error loading COPPER price.";
    print_r($e);
    exit;
}

try {
    $crawler = $client->request('GET', 'https://www.investing.com/commodities/us-sugar-no11');
    $price = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
    $price = str_replace(',','', $price);
    $commodities[] = (object) [
        "symbol" => 'SUGAR',
        "price" => floatval($price),
    ];
} catch (\Exception $e) {
    echo "Error loading SUGAR price.";
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
                "price" => floatval($item->priceUsd),
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
    "crypto" => $crypto,
    "indices" => $indices,
    "commodities" => $commodities,
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