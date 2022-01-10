<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Retailcenter extends Model
{
    use HasFactory;


    protected $fillable = ['uid','address','type'];

    protected $table = 'retail_centers';
    

}
