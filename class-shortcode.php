<?php

namespace View;

use View;

class WheatherShortcode
{


    public static function registration()
    {
        add_shortcode('weather', 'weather_func');
    }

    public static function renderShortcode()
    {
        require_once(DIR_PLUGIN_PATH . 'class-api-settings.php');
        $data = View::api();
        //var_dump($data);
        $name = $data->name;
        $temp_min = $data->main->temp_min;
        $humidity = $data->main->humidity;
        $speed = $data->wind->speed;
        do_shortcode("[weather name='$name' humidity='$humidity' temp_min='$temp_min' speed='$speed']");
    }

}