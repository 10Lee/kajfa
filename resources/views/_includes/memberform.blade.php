{{ csrf_field() }}

<div class="field">
	{!! Form::label('member_name', 'Nama Lengkap', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::text('member_name', null, ['id'=>'member_name', 'class'=>"input {{ $errors->has('member_name') ? 'is-danger' : '' }}"]) !!}
	</div>

	@if($errors->has('member_name'))
		<p class="help is-danger">{{ $errors->first('member_name') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('family_id', 'Family Altar', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">

			{!! Form::select('family_id', $familyData) !!}

		</div>
	</div>
	@if($errors->has('family_id'))
		<p class="help is-danger">{{ $errors->has('family_id') }}</p>
	@endif
</div>





{{-- <div class="field">
	{!! Form::label('nickname', 'Nama Panggilan', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::text('nickname', null, ['id'=>'nickname','class'=>"input {{ $errors->has('name') ? 'is-danger' : '' }}"]) !!}
	</div>

	@if($errors->has('nickname'))
		<p class="help is-danger">{{ $errors->first('nickname') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('dob', 'Tanggal Lahir', ['class'=>'label']) !!}
	<div class="control has-icons-right">
		{!! Form::date('dob', null, ['id'=>'dob','class'=>"input {{ $errors->has('dob') ? 'is-danger' : '' }}"]) !!}
		<span class="icon is-small is-right">
			<i class="fa fa-chevron-down"></i>
		</span>
	</div>

	@if($errors->has('dob'))
		<p class="help is-danger">{{ $errors->first('dob') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('gender', 'Jenis Kelamin', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">
			{!! Form::select('gender', ['PRIA'=>'Laki-laki','WANITA'=>'Perempuan'], null, ['class'=>"{{ $errors->has('gender') ? 'is-danger' : '' }}"]) !!}
		</div>
	</div>
	@if($errors->has('gender'))
		<p class="help is-danger">{{ $errors->first('gender') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('address', 'Alamat Lengkap', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::textarea('address', null, ['cols'=>'10','rows'=>'5','class'=>'textarea']) !!}
	</div>

	@if($errors->has('address'))
		<p class="help is-danger">{{ $errors->first('address') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('bloodtype', 'Golongan Darah', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">
			{!! Form::select('bloodtype', ['O'=>'O','A'=>'A','B'=>'B','AB'=>'AB'], null, ['id'=>'bloodtype']) !!}
		</div>
	</div>
	@if($errors->has('bloodtype'))
		<p class="help is-danger">{{ $errors->has('bloodtype') }}</p>
	@endif
</div>


<div class="field">
	{!! Form::label('phoneNumber', 'Nomor Telepon', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::text('phoneNumber', null, ['placeholder'=>'085255552222','id'=>'phoneNumber','class'=>"input {{ $errors->has('phoneNumber') ? 'is-danger' : '' }}"]) !!}
	</div>
	@if($errors->has('phoneNumber'))
		<p class="help is-danger">{{ $errors->first('phoneNumber') }}</p>
	@endif
</div>

<div class="field">
	{!! Form::label('email', 'Alamat Email', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::text('email', null, ['id'=>'email','class'=>"input {{ $errors->has('email') ? 'is-danger' : '' }}",'placeholder'=>'alamat@email.com']) !!}
	</div>
</div>

<div class="field">
	<b-checkbox class="m-t-50">Dengan ini data yang saya isi adalah benar dan dapat di pertanggung jawabkan</b-checkbox>
</div>
 --}}
{!! Form::submit($buttonLabel, ['class'=>'button is-success is-outlined is-fullwidth m-t-50']) !!}