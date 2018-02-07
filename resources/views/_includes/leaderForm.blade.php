{{ csrf_field() }}

<div class="field">
	{!! Form::label('leader_name', 'Nama Lengkap', ['class'=>'label']) !!}
	<div class="control">
		{!! Form::text('leader_name', null, ['id'=>'leader_name', 'class'=>"input {{ $errors->has('leader_name') ? 'is-danger' : '' }}"]) !!}
	</div>

	@if($errors->has('leader_name'))
		<p class="help is-danger">{{ $errors->first('leader_name') }}</p>
	@endif
</div>

<div class="field" id="rank_group">
	{!! Form::label('rank_id', 'Jabatan', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">

			{!! Form::select('rank_id', $rankData , null, array('id'=>'rank_select', 'placeholder'=>'Pilih Jabatan')) !!}

		</div>
	</div>
	@if($errors->has('family_id'))
		<p class="help is-danger">{{ $errors->has('family_id') }}</p>
	@endif
</div>


<div class="field" id="family_group">
	{!! Form::label('family_id', 'Family', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">

			{!! Form::select('family_id', $familyData , null, array('id'=>'family_select', 'placeholder'=>'Pilih FA')) !!}

		</div>
	</div>
	@if($errors->has('family_id'))
		<p class="help is-danger">{{ $errors->has('family_id') }}</p>
	@endif
</div>

<div class="field" id="district_group">
	{!! Form::label('district_id', 'Rayon', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">

			{!! Form::select('district_id', $districtData , null, array('id'=>'district_select', 'placeholder'=>'Pilih Rayon')) !!}

		</div>
	</div>
	@if($errors->has('family_id'))
		<p class="help is-danger">{{ $errors->has('family_id') }}</p>
	@endif
</div>

<div class="field" id="area_group">
	{!! Form::label('area_id', 'Wilayah', ['class'=>'label']) !!}
	<div class="control">
		<div class="select">

			{!! Form::select('area_id', $areaData , null, array('id'=>'area_select', 'placeholder'=>'Pilih Wilayah')) !!}

		</div>
	</div>
	@if($errors->has('family_id'))
		<p class="help is-danger">{{ $errors->has('family_id') }}</p>
	@endif
</div>


{!! Form::submit($buttonLabel, ['class'=>'button is-success is-outlined is-fullwidth m-t-50']) !!}


