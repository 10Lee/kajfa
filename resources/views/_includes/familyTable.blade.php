<thead>
	<tr>
		<th><abbr>Nomor FA</abbr></th>
		<th><abbr>Deskripsi</abbr></th>

		{{-- Header Table TOMBOL PENGATURAN --}}
		<th><abbr>PENGATURAN</abbr></th>
	</tr>
</thead>
<tbody>
	@forelse($familyData as $family)		
	<tr>
		<td><a href="{{ route('family.show', $family->id) }}">{{ $family->family_name }}</a></td>
		<td>{{ $family->description }}</td>

		{{-- Kolom TOMBOL PENGATURAN --}}
		<td>
			{{-- <a href="{{ route('member.create') }}" class="button is-success is-outlined">Tambah</a> --}}
			{!! Form::open(['method'=>'DELETE','route'=>['family.destroy', $family->id]]) !!}
				<a href="{{ route('family.edit', $family->id) }}" class="button is-warning is-outlined">Edit</a>
				<button href="{{ route('family.destroy', $family->id) }}" class="button is-danger is-outlined">Hapus</button>
			{!! Form::close() !!}
		</td>
	</tr>
	@empty
		<tr><td>
			<h1 class="title">TIDAK ADA DATA</h1>
		</td></tr>
	@endforelse
</tbody>