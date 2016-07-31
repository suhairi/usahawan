@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-4">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Daftar Program</h3></div>
			<div class="panel-body">

				{{ Form::open(['route' => 'daftarProgram', 'method' => 'post']) }}

					{{ Form::label('Nama Program', '*Nama Program') }}
					{{ Form::text('nama', '', ['class' => 'form-control', 'required' => 'true']) }}

					{{ Form::label('Tarikh Program', '*Tarikh Program') }}
					{{ Form::date('tarikh', '', ['class' => 'form-control', 'required' => 'true']) }}

					{{ Form::label('Point', '*Point') }}
					{{ Form::selectRange('point', 1, 10, '', ['class' => 'form-control', 'required' => 'true', 'min' => 1]) }}

					<br />
					{{ Form::submit('Daftar Usahawan', ['class' => 'btn btn-primary']) }}

				{{ Form::close() }}
				

			</div>
		</div>
	</div>


	<div class="col-xs-6 col-xs-offset-1">
	<div class="panel panel-primary">
		<div class="panel-heading"><h3>Senarai Program</h3></div>
		<div class="panel-body">

			<table class="table table-condensed table-striped table-hover">
				<tr>
					<td><strong>Nama Program</strong></td>
					<td><strong>Tarikh</strong></td>
					<td><strong>Point</strong></td>
				</tr>

				@foreach($programs as $program)

				<tr>
					<td>{{ $program->nama }}</td>
					<td>{{ $program->tarikh }}</td>
					<td>{{ $program->point }}</td>
				</tr>

				@endforeach
				
			</table>

		</div>
	</div>
	</div>

</div>

@stop