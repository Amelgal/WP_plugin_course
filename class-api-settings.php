<?php


class View
{
    public static function api()
    {
        $apiOptions = (require_once(DIR_PLUGIN_PATH . 'config.php'))['api'];
        // API ключ
        $apiKey = $apiOptions['apiKey'];
        // Город погода которого нужна
        $city = $apiOptions['city'];
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