<?php

// Demo token (замени на свой реальный).
$token = 'YOUR_TOKEN_HERE'; 

// Код страны ISO 3166-1 alpha-2 (например: ax, ru, us, de, fr и т.д.)
$countryCode = 'ax';

// Формируем URL
$url = 'https://wildtracks.pro/api/postalcodes/all/' . $countryCode . '/json/' . $token;

// Получаем данные по ссылке
$jsonData = file_get_contents($url);

// Проверка получения данных
if ($jsonData === false) {
    die('Error receiving data from the URL');
}

// Конвертируем JSON → массив
$dataArray = json_decode($jsonData, true);

// Проверка успешного декодирования
if ($dataArray === null) {
    die('Error decoding JSON');
}

// Выводим массив
echo "<h2>Postal Codes for country: " . strtoupper($countryCode) . "</h2>";
echo "<pre>";
print_r($dataArray);
echo "</pre>";

?>
