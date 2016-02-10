<?php 

class Model
{
	/**
	 * Путь до XML-файла с прогнозом погоды
	 * @var string
	 */
	public static $url;

	/**
	 * В переменной хранится прогноз в виде объекта
	 * @var Object
	 */
  public static $data;

  /**
   * Метод превращает xml-документ в объект и помещает его в $data
   * @return Object
   */
  
  private static function parseData()
  {
  	self::$data = simplexml_load_file(self::$url);
  }

  /**
   * Парсит объект с прогнозом в формат JSON
   * @return string Возвращает JSON-строку
   */
  private static function jsonParse()
  {
  	return json_encode(self::$data);
  }

  /**
   * Метод для получение прогноза в виде объекта
   * @param  string $url путь до файла с прогнозом
   * @return Object
   */
  
  public static function getObjectData($url)
  {
  	self::$url = $url;
  	self::parseData(); 
  	return self::$data;
  }

    /**
   * Метод для получения прогноза в виде массива
   * @param  string $url путь до файла с прогнозом
   * @return Array
   */

  public static function getArrayData($url)
  {
  	self::$url = $url;
  	self::parseData(); 
  	return (array)self::$data;
  }

    /**
   * Метод для получения прогноза в формате XML
   * @param  string $url путь до файла с прогнозом
   * @return string
   */
  
  public static function getXmlData($url)
  {
  	self::$url = $url;
  	self::$data = file_get_contents($url);
  	return self::$data;
  }

    /**
   * Метод для получения прогноза в формате JSON
   * @param  string $url путь до файла с прогнозом
   * @return string
   */
  
  public static function getJsonData($url)
  {
  	self::$url = $url;
  	self::parseData();
  	return self::jsonParse();
  }
}