@extends('layouts.app')

@section('content')

<div class="container">
	<div class="columns">
		<div class="column m-t-50">
			<div class="card">
				{{-- @include('member.search') --}}

				<header class="card-header">
					<p class="card-header-title">Daftar Jemaat Yang Ber-FA</p>
				</header>

				<div class="card-content">
					<div class="field">
						<a href="{{ route('member.create') }}" class="button is-success is-fullwidth">DAFTAR BARU</a>
					</div>
				</div>
				

				<div class="card-content">
					<div class="field">
						<form action="{{ url('member/search') }}" method="GET">
							<div class="control">
								<input type="text" name="q" class="input" placeholder="Search..." value="{{ request('q') }}">
							</div>
						</form>
					</div>
				</div>

				<div class="card-content">
					<div class="content">
						<table class="table is-narrow is-fullwidth">
							{{-- @include('_includes.membertable') --}}
        					<data-viewer source="/api/member" title="testing" />
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