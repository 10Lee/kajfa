<?php 

namespace App\Helper; 

use App\Family;

use Validator;

trait DataTableViewer{

	public function scopeDynamicTable($query){

		$request = app()->make('request');

		$v = Validator::make($request->only(['column', 'direction']), [
			'column' => 'required|in:'.implode(',', self::$columns),
			'direction' => 'required|in:asc,desc'
		]);

		if($v->fails()){
			dd($v->messages());
		}

		return $query->with('family')->orderBy($request->column, $request->direction)->paginate(10);




	}

}

