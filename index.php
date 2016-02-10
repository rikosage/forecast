<?php 
  require_once("autoload.php");

  WeatherController::setTitle("Forecast");
  WeatherController::getForecast("http://export.yandex.ru/weather-ng/forecasts/27331.xml");