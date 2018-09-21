<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Order extends Model
{
    //
    protected $fillable =['item_id','quantity','pickup_time','special_instructions','user_id'];

}
