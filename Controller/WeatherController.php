<?php 

class WeatherController extends Controller
{

  public static $forecast;

  public static function getForecast($url)
  {
    self::$forecast = parent::getObjectData($url);
    View::getView("forecast");
  }

}