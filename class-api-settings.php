<?php


class View
{
    public static function api()
    {
        // API ключ
        $apiKey = get_option('api_options');
        // Город погода которого нужна
        $city = get_option('city_name');
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

        return $data;
    }
}