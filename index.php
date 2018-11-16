<?php

require_once __DIR__ . '/vendor/autoload.php';

use Tnq\Services\StringService;

$stringHandler = new StringService();

$sortArray = array(
	'english' => $stringHandler->sort_alphabet('lemon orange banana apple'), 
	'russian' => $stringHandler->sort_alphabet('лимон апельсин банан яблоко'),
	'greek' => $stringHandler->sort_alphabet('αβγαβγ αβγαβγαβγ') 
);

echo '<pre>';
print_r($sortArray);
echo '</pre>';