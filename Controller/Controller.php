<?php 

class Controller
{
  /**
   * Устанавливает заголовок для выводимой страницы]
   * @param string $title
   */
  
  public static function setTitle($title)
  {
    View::$title = $title;
  }

  /**
   * Метод для получение прогноза в виде объекта
   * @param  string $url путь до файла с прогнозом
   * @return Object
   */
  
  public static function getObjectData($url)
  {
    return Model::getObjectData($url);
  }

  /**
   * Метод для получения прогноза в виде массива
   * @param  string $url путь до файла с прогнозом
   * @return Array
   */
  
  public static function getArrayData($url)
  {
    return Model::getArrayData($url);
  }

  /**
   * Метод для получения прогноза в формате XML
   * @param  string $url путь до файла с прогнозом
   * @return string
   */
  
  public static function getXMLData($url)
  {
    return Model::getXmlData($url);
  }

  /**
   * Метод для получения прогноза в формате JSON
   * @param  string $url путь до файла с прогнозом
   * @return string
   */
  public static function getJsonData($url)
  {
    return Model::getJsonData($url);
  }
}