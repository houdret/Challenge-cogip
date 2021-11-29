<?php
namespace App\Table;
use App\App;
class Contacts extends Table
{
    protected static $table = 'contacts';

    public  static function  getLast(){
        return  self::query("
            SELECT contact.id, contacts.lastName, contacts.firstName, contacts.titre FROM contacts ");
    }
}
