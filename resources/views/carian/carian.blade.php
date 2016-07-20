@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col col-xs-6">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Carian Usahawan</h3></div>
			<div class="panel panel-body">
				
				{{ Form::open(['route' => 'carianPost', 'method' => 'post']) }}

				{{ Form::label('No kP', 'No Kad Pengenalan') }}
				{{ Form::text('noKP', null, ['class' => 'form-control']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>
</div>


@stop