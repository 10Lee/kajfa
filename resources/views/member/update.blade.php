@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="columns">
			<div class="column is-6 is-offset-3 m-t-50">
				<div class="card">
					<div class="card-header">
						<h1 class="card-header-title title">Edit Data Anggota FA</h1>
					</div>
					<div class="card-content">
						{!! Form::model($memberData, ['route'=>['member.show', $memberData->id],'method'=>'PATCH','role'=>'form']) !!}
							
							@include('_includes.memberform',['buttonLabel' => 'Ubah Data'])

						{!! Form::close() !!}
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection