<tbody>
	<tr>
		<th><abbr>Nama FA</abbr></th>
		<td><span class="m-l-10">{{ $familyData->family_name }}</span></td>
	</tr>
	<tr>
		<th><abbr>Rayon</abbr></th>
		<td><span class="m-l-10">{{ $familyData->district->district_name }}</span></td>
	</tr>
	<tr>
		<th><abbr>Deskripsi</abbr></th>
		<td><span class="m-l-10">{{ $familyData->description }}</span></td>
	</tr>
	<tr>
		<th><abbr>Anggota</abbr></th>
		<td>
			<ol class="m-t-5">
				@foreach($familyData->members as $member)
					<li>{{ $member->member_name }}</li>
				@endforeach
			</ol>
		</td>
	</tr>
	

</tbody>

