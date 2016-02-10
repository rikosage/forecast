<?php 

class Model
{

	public static $url;
  public static $data;

  private static function parseData()
  {
  	self::$data = simplexml_load_file(self::$url);
  }

  private static function jsonParse()
  {
  	return json_encode(self::$data);
  }

  public static function getObjectData($url)
  {
  	self::$url = $url;
  	self::parseData(); 
  	return self::$data;
  }

  public static function getArrayData($url)
  {
  	self::$url = $url;
  	self::parseData(); 
  	return (array)self::$data;
  }

  public static function getXmlData($url)
  {
  	self::$url = $url;
  	self::$data = file_get_contents($url);
  	return self::$data;
  }

  public static function getJsonData($url)
  {
  	self::$url = $url;
  	self::parseData();
  	return self::jsonParse();
  }
}