<?php
function weather_func(array $api_data)
{
    ?>
    <div class="weather">

    <h2>Погода в городе <?= $api_data["name"]; ?></h2>
    <p>Погода: <?= $api_data["temp_min"]; ?>°C</p>
    <p>Влажность: <?= $api_data["humidity"]; ?> %</p>
    <p>Ветер: <?= $api_data["speed"]; ?> км/ч</p>
    </div><?php
}