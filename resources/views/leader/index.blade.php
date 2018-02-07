@extends('layouts.app')

@section('content')

	<div class="container">
	<div class="columns">
		<div class="column m-t-50">
			<div class="card">
				{{-- @include('member.search') --}}

				<header class="card-header">
					<p class="card-header-title">Daftar Pimpinan/Gembala</p>
				</header>

				<card-content>
					<div class="field">
						<a href="{{ route('leader.create') }}" class="button is-success is-fullwidth">DAFTAR BARU</a>
					</div>
				</card-content>

				<div class="card-content">
					<div class="field">
						<form action="{{ url('leader/search') }}" method="GET">
							<div class="control">
								<input type="text" name="q" class="input" placeholder="Search..." value="{{ request('q') }}">
							</div>
						</form>
					</div>
				</div>

				<div class="card-content">
					<div class="content">
						<table class="table is-narrow is-fullwidth">
							@include('_includes.leaderTable')
						</table>
					</div>
				</div>

				<div class="card-footer">
				
					<span>pagination</span>		
			
			 	</div>
			</div>
		</div>
	</div>
</div>


@endsection