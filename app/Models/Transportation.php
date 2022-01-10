<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Transportation extends Model
{
    use HasFactory;

    protected $fillable = ['id','schedueld_number','deliveryroute','type'];

   // protected $table = 'transportation';


    public function  shipping()
    {

        return $this->belongsToMany(Shippeditem::class,'transportation_items','id','shipped_item_id');
    }

}
