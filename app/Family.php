<?php

namespace App;

use App\District;
use App\Helper\DataTableViewer;
use App\Leader;
use App\Member;
use Illuminate\Database\Eloquent\Model;

class Family extends Model
{

    use DataTableViewer;

    

	protected $fillable = ['family_name', 'description', 'district_id'];

    public function members(){
    	return $this->hasMany(Member::class);
    }

    public function leader(){
    	return $this->hasOne(Leader::class);
    }

    public function district(){
    	return $this->belongsTo(District::class);
    }
}
	