<?php 

class Controller
{

  public static function setTitle($title)
  {
    View::$title = $title;
  }

  public static function getObjectData($url)
  {
    return Model::getObjectData($url);
  }

  public static function getArrayData($url)
  {
    return Model::getArrayData($url);
  }

  public static function getXMLData($url)
  {
    return Model::getXmlData($url);
  }

  public static function getJsonData($url)
  {
    return Model::getJsonData($url);
  }
}