

<div class="container">
	<div class="columns">
		<div class="column is-10 is-offset-1 m-t-50">
			<div class="field">
				{!! Form::open(['url'=>'member/search','method'=>'GET']) !!}
		
					{!! Form::text('keywords', (!empty($keywords)) ? $keywords : null, ['class' => 'input','placeholder'=>'Masukan Nama Siswa']) !!}
					{!! Form::submit('Cari', ['class' => 'btn btn-primary', 'type'=>'submit']) !!}
					
				{!! Form::close() !!}
			</div>
		</div>
	</div>
</div>
