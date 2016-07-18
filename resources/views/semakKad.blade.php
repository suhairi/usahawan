@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-xs-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Semak Kad</h3></div>
			<div class="panel-body">

			{{ Form::open() }}

			{{ Form::label('No Kad', 'No Kad : ') }}
			{{ Form::text('noKad', null, ['class' => 'form-control', 'maxlength' => '10', 'onchange' => 'semakPemilikKad(this.value)', 'onkeyup' => 'semakPemilikKad(this.value)']) }}

			{{ Form::close() }}	

			</div>
		</div>
	</div>

	
	<div class="col-xs-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Pemilik Kad</h3></div>
			<div class="panel-body">
				<div class="searchSemak"></div>

				

			</div>
		</div>
	</div>

</div>

@stop