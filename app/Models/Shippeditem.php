<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Shippeditem extends Model
{
    use HasFactory;

    protected $fillable = ['id','no','weight','amount','destinations','dimensions','insurance','final_delivery_date','retail_centers_uid'];

    protected $table = 'shipped_items';
    public function retail()
    {

        return $this->hasOne(Retailcenter::class,'uid','retail_centers_uid');
    }


    public function transportation_event()
    {

        return $this->belongsToMany(Transportation::class,'transportation_items','id','transportation_id');
    }

    





}
