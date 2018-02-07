<?php

namespace App;

use App\Family;
use App\Leader;
use Illuminate\Database\Eloquent\Model;

class District extends Model
{
    protected $fillable = ['district_name'];

    public function family(){
    	return $this->hasMany(Family::class);
    }

    public function leader(){
    	return $this->hasOne(Leader::class);
    }


}
