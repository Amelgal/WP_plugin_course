<?php
/**
 * Plugin Name:       WP_course_plugin
 * Plugin URI:        https://.../
 * Description:       test plugin
 * Version:           1.0.0
 * Requires PHP:      7.4
 * Author:            Shalko Eugene
 * Author URI:        https://.../
 */

// API ключ
$apiKey = "10b3b07a85737b4baa1309bf555b9aaa";
// Город погода которого нужна
$city = "Kharkiv";
// Ссылка для отправки
$url = "http://api.openweathermap.org/data/2.5/weather?q=" . $city . "&lang=ru&units=metric&appid=" . $apiKey;
// Создаём запрос
$ch = curl_init();

// Настройка запроса
curl_setopt($ch, CURLOPT_RETURNTRANSFER, true);
curl_setopt($ch, CURLOPT_URL, $url);

// Отправляем запрос и получаем ответ
$data = json_decode(curl_exec($ch));

// Закрываем запрос
curl_close($ch);
?>
<!--<div class="weather">-->
<!--    <h2>Погода в городе --><?php //echo $data->name; ?><!--</h2>-->
<!--<p>Погода: --><?php //echo $data->main->temp_min; ?><!--°C</p>-->
<!--<p>Влажность: --><?php //echo $data->main->humidity; ?><!-- %</p>-->
<!--<p>Ветер: --><?php //echo $data->wind->speed; ?><!-- км/ч</p>-->
<!--</div>-->