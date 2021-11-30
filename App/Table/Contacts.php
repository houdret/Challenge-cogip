<?php
namespace App\Table;
use App\Table\Table;
class Contacts extends Table
{
    protected static $table = 'contacts';

    public  static function  getLast(){
        return  self::query("
            SELECT contacts.id, contacts.lastName, contacts.firstName, contacts.phone, contacts.email, contacts.society FROM contacts  ORDER BY contacts.id ASC LIMIT 5");
    }
}
