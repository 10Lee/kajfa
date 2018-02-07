@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="columns">
			<div class="column is-6 is-offset-3 m-t-50">
				<div class="card">
					<div class="card-header">
						<h1 class="card-header-title title">Pendaftaran Leader/Gembala Baru</h1>
					</div>
					<div class="card-content">
						{!! Form::open(['route'=>'leader.index', 'method'=>'POST', 'role'=>'form']) !!}

							@include('_includes.leaderForm',['buttonLabel' => 'Daftarkan Data Leader Baru'])

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection
