<?php
class catalogTovaruModel extends Model{
    public function __construct()
    {
        parent::__construct();
    }

    public function getCatalog(){
        $sql = 'SELECT categories_key, name FROM categories ORDER BY categories_key';
        $result = self::$db->getConnection()->query($sql);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }

        return $array;
    }

    public function getTovaru(){
        $sql = 'SELECT tovari_key, Name, Price FROM tovari ORDER BY tovari_key';
        $result = self::$db->getConnection()->query($sql);
        while($row = $result->fetch_assoc()){
            $array[] = $row;
        }

        return $array;
    }



}
