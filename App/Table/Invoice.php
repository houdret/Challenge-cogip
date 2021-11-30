<?php
namespace App\Table;
use App\Table\Table;

class Invoice extends Table
{
    protected static $table = 'invoice';

    public  static function  getLast(){
        return  self::query("
            SELECT  invoice.numbers, invoice.dates, invoice.society,  FROM invoice  ORDER BY invoice.id ASC LIMIT 5 ");
    }

    public function getUrl(){
        return 'index.php?p=invoice';
    }
}