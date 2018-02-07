	<thead>
		<tr>
			{{-- <th><abbr>Nomor Anggota</abbr></th> --}}
			<th><abbr>Nama Lengkap</abbr></th>
			<th><abbr>Family Altar</abbr></th>
	{{-- 		<th><abbr>Tanggal Lahir</abbr></th>
			<th><abbr>Jenis Kelamin</abbr></th>
			<th><abbr>Golongan Darah</abbr></th>
 --}}
			{{-- Header Table TOMBOL PENGATURAN --}}
			<th><abbr>PENGATURAN</abbr></th>
		</tr>
	</thead>
	@forelse($memberData as $member)		
	<tbody>
		<tr>
			{{-- <th>{{ $member->nkaj }}</th> --}}
			<td><a href="{{ route('member.show', $member->id) }}">{{ $member->member_name }}</a></td>
			<td>{{ $member->family->family_name}}</td>
{{-- 			<td>{{ $member->dob }}</td>
			<td>{{ $member->gender }}</td>
			<td>{{ $member->bloodtype }}</td>
 --}}
			{{-- Kolom TOMBOL PENGATURAN --}}
			<td>
				{{-- <a href="{{ route('member.create') }}" class="button is-success is-outlined">Tambah</a> --}}
				{!! Form::open(['method'=>'DELETE','route'=>['member.destroy', $member->id]]) !!}
					<a href="{{ route('member.edit', $member->id) }}" class="button is-warning is-outlined">Edit</a>
					<button href="{{ route('member.destroy', $member->id) }}" class="button is-danger is-outlined">Hapus</button>
				{!! Form::close() !!}
			</td>
		</tr>
@empty
	TIDAK ADA DATA
	</tbody>
@endforelse