<?php
require_once '../vendor/autoload.php';
use Goutte\Client;
$client = new Client();


$crawler = $client->request('GET', 'https://www.investing.com/indices/germany-30');
$node = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
echo "<pre>";
echo $node;
echo "</pre>";

$crawler = $client->request('GET', 'https://www.investing.com/indices/nq-100');
$node = $crawler->filter('#quotes_summary_current_data')->filter('span#last_last')->text();
echo "<pre>";
echo $node;
echo "</pre>";