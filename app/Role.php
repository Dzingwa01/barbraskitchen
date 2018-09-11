<?php
/**
 * Created by PhpStorm.
 * User: DEV
 * Date: 2018-09-11
 * Time: 02:20 PM
 */

//namespace App;

use Zizaco\Entrust\EntrustRole;

class Role extends EntrustRole
{
    protected $fillable = [
        'name', 'display_name', 'description'
    ];
}