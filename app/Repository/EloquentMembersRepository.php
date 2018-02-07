<?php

namespace App\Repository;

use App\Member;
use Illuminate\Database\Eloquent\Collection;

class EloquentMembersRepository implements SearchRepository{
	public function search(string $query="") : Collection{
		// $fields = ['name','nickname','dob','gender','bloodtype','address','phoneNumber','email'];
		// return Member::where('nkaj', 'like', "%{$query}%")
		// 	->orWhere($fields, 'like', "%{$query}%")
		// 	->get();

		return Member::where('name','like',"%{$query}%")
			->get();
	}
}