<?php 

class WeatherController extends Controller
{
  /**
   * Хранит в себе прогноз погоды (здесь - в виде объекта)
   * @var Object
   */
  public static $forecast;

  /**
   * Метод для непосредственного вывода прогноза на экран
   * @param  string $url Путь до файла с прогнозом
   * @return view
   */
  
  public static function getForecast($url)
  {
    self::$forecast = parent::getObjectData($url);
    View::getView("forecast");
  }

}