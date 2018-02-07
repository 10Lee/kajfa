<?php

namespace App\Repository;

use App\Community;
use Illuminate\Database\Eloquent\Collection;

class EloquentCommunitiesRepository implements SearchRepository{
	public function search(string $query="") : Collection{
		// $fields = ['name','nickname','dob','gender','bloodtype','address','phoneNumber','email'];
		// return Member::where('nkaj', 'like', "%{$query}%")
		// 	->orWhere($fields, 'like', "%{$query}%")
		// 	->get();

		return Community::where('name','like',"%{$query}%")
			->orWhere('name','like',"%{$query}%")
			->get();
	}
}