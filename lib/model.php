<?php

class Model
{
    public static $db;

    public function __construct()
    {
      self::$db = new DB(Config::get('db.host'), Config::get('db.user'), Config::get('db.password'), Config::get('db.db_name'));
    }
}