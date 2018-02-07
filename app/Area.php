<?php

namespace App;

use App\Leader;
use Illuminate\Database\Eloquent\Model;

class Area extends Model
{
    protected $fillable = ['area_name'];

    public function leader(){
    	return $this->hasOne(Leader::class);
    }
}
