<?php


class View
{
//    private $name;
//    private $temp_min;
//    private $humidity;
//    private $speed;

//    public function __construct()
//    {
//
//       //do_shortcode("[weather name='$this->name' humidity='$this->humidity' temp_min='$this->temp_min' speed='$this->speed']");
//    }

    public static function api(){
        $apiOptions = (require_once( DIR_PATH . 'config.php' ))['api'];
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
        //$this->setData($data);
        //new WheatherShortcode();
        //var_dump($data);
    }
//    private function setData(object $api_data){
//        $this->setHumidity($api_data->main->humidity);
//        $this->setName($api_data->name);
//        $this->setSpeed($api_data->wind->speed);
//        $this->setTempMin($api_data->main->temp_min);
//    }
//    /**
//     * @param mixed $humidity
//     */
//    private function setHumidity($humidity): void
//    {
//        $this->humidity = $humidity;
//    }
//
//    /**
//     * @param mixed $name
//     */
//    private function setName($name): void
//    {
//        $this->name = $name;
//    }
//
//    /**
//     * @param mixed $speed
//     */
//    private function setSpeed($speed): void
//    {
//        $this->speed = $speed;
//    }
//
//    /**
//     * @param mixed $temp_min
//     */
//    private function setTempMin($temp_min): void
//    {
//        $this->temp_min = $temp_min;
//    }
}