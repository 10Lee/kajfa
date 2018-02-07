@extends('layouts.app')

@section('content')

	<div class="container">
		<div class="columns">
			<div class="column is-6 is-offset-3 m-t-50">
				<div class="card">
					<div class="card-header">
						<h1 class="card-header-title title">Detail Data</h1>
						
					</div>
					<div class="card-content">
						<div class="content">
							<table class="table is-narrow is-fullwidth">
								@include('_includes.familyDetail')
							</table>
							<a href="{{ url('/family') }}" class="button is-primary">Kembali</a>
							<a href="{{ route('family.edit',$familyData->id) }}" class="button is-warning is-full">Edit</a>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

@endsection