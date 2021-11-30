<?php
namespace App\Table;
use App\Table\Table;
class Companies extends Table
{
    protected static $table = 'society';

    public  static function  getLast(){
        return  self::query("
            SELECT  society.name, society.vat, society.country,society.type  FROM society  ORDER BY society.id ASC LIMIT 5 ");
    }

    public function getUrl(){
        return 'index.php?p=companies';
    }
}