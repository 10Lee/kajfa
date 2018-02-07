@extends('layouts.app')

@section('content')

<div class="container">
	<div class="columns">
		<div class="column m-t-50">
			<div class="card">
				{{-- @include('member.search') --}}

				<header class="card-header">
					<p class="card-header-title">Daftar Familty Altar</p>
				</header>

				<card-content>
					<div class="field">
						<a href="{{ route('family.create') }}" class="button is-success is-fullwidth">DAFTAR BARU</a>
					</div>
				</card-content>

			
				{{-- Bagian Search Field --}}
				<div class="card-content">
					<div class="field">
						<form action="{{ url('family/search') }}" method="GET">
							<div class="control">
								<input type="text" name="q" class="input" placeholder="Search..." value="{{ request('q') }}">
							</div>
						</form>
					</div>
				</div>

				{{-- Bagian Table  --}}
				<div class="card-content">
					<div class="content">
						<table class="table is-narrow is-fullwidth">
							@include('_includes.familyTable')
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