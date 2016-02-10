<?php 

class WeatherController extends Controller
{

  public static function setTitle($title)
  {
    View::$title = $title;
  }

  public static function getForecast($url)
  {
    $forecast = parent::getXmlData($url);
    View::getView($forecast);
  }

}