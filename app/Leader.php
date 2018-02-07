<?php

namespace App;

use App\Area;
use App\District;
use App\Family;
use App\Rank;
use Illuminate\Database\Eloquent\Model;

class Leader extends Model
{
    protected $fillable = [
    	'leader_name', 'family_id', 'rank_id', 'district_id', 'area_id'
    ];

    public function rank(){
    	return $this->belongsTo(Rank::class);
    }

    public function family(){
    	return $this->belongsTo(Family::class);
    }

    public function district(){
    	return $this->belongsTo(District::class);
    }

    public function area(){
        return $this->belongsTo(Area::class);
    }
}
