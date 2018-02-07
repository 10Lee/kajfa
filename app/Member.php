<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

use App\Helper\DataTableViewer;

class Member extends Model
{

	use DataTableViewer; 

	protected $fillable = ['member_name', 'family_id'];

	public static $columns = ['id','member_name', 'family_name'];

	public function family(){
		return $this->belongsTo('App\Family');
	}
}
