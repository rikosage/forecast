<?php 
/**
 * Стартовая страница, с которой идет запрос на погодный контроллер
 * Функция getForeCast выводит на экран прогноз погоды по соответствующему id городу
 */

  require_once("autoload.php");

  WeatherController::setTitle("Forecast");
  WeatherController::getForecast("http://export.yandex.ru/weather-ng/forecasts/27331.xml");