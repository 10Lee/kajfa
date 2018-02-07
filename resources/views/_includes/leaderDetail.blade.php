<tbody>
	<tr>
		<th><abbr>Nama Lengkap</abbr></th>
		<td><span class="m-l-10">{{ $leaderData->leader_name }}</span></td>
	</tr>
	<tr>
		<th><abbr>Jabatan</abbr></th>
		<td><span class="m-l-10">{{ $leaderData->rank->rank_position}}</span></td>
	</tr>
	<tr>
		@switch($leaderData->id)
			@case(1):
				<th><abbr>Family Altar</abbr></th>
				<td><span class="m-l-10">{{ $leaderData->family->family_name }}</span></td>
				@break
			@case(2):
				<th><abbr>Rayon</abbr></th>
				<td><span class="m-l-10">{{ $leaderData->district->district_name }}</span></td>
				@break
			@case(3):
				<th><abbr>Wilayah</abbr></th>
				<td><span class="m-l-10">{{ $leaderData->area->area_name }}</span></td>
				@break

		@endswitch
	</tr>
	{{-- <tr>
		<th><abbr>Anggota</abbr></th>
		<td>
			<ol class="m-t-5">
				@foreach($familyData->members as $member)
					<li>{{ $member->member_name }}</li>
				@endforeach
			</ol>
		</td>
	</tr>
 --}}	

</tbody>

