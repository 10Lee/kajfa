<?php

namespace App;

use App\Leader;
use Illuminate\Database\Eloquent\Model;

class Rank extends Model
{
	protected $fillable = ['position', 'description'];

	public function leader(){
		return $this->hasMany(Leader::class);
	}

}
