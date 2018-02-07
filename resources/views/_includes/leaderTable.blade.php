<thead>
	<tr>
		<th><abbr>Nama Leader</abbr></th>
		<th><abbr>Jabatan</abbr></th>
		{{-- <th><abbr>Family Altar</abbr></th> --}}

		
		{{-- TODO  --}}
		{{-- Create <th> that show name of part the leader lead --}}
		
		{{-- Header Table TOMBOL PENGATURAN --}}
		<th><abbr>PENGATURAN</abbr></th>
	</tr>
</thead>
<tbody>
	@forelse($leaderData as $leader)		
	<tr>
		<td><a href="{{ route('leader.show', $leader->id) }}">{{ $leader->leader_name }}</a></td>
		<td>{{ $leader->rank->rank_position }}</td>
		
		{{-- Kolom TOMBOL PENGATURAN --}}
		<td>
			{{-- <a href="{{ route('member.create') }}" class="button is-success is-outlined">Tambah</a> --}}
			{!! Form::open(['method'=>'DELETE','route'=>['leader.destroy', $leader->id]]) !!}
				<a href="{{ route('leader.edit', $leader->id) }}" class="button is-warning is-outlined">Edit</a>
				<button href="{{ route('leader.destroy', $leader->id) }}" class="button is-danger is-outlined">Hapus</button>
			{!! Form::close() !!}
		</td>
	</tr>
	@empty
		<tr><td>
			<h1 class="title">TIDAK ADA DATA</h1>
		</td></tr>
	@endforelse
</tbody>