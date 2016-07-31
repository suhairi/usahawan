@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col col-xs-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Sistem Point Usahawan</h3></div>
			<div class="panel panel-body">
				
				{{ Form::open(['route' => 'postPoint', 'method' => 'post']) }}

				{{ Form::label('Nama Program', '*Nama Program') }}
				{{ Form::text('program', $program->nama, ['class' => 'form-control', 'readonly' => 'true']) }}

				{{ Form::label('Tarikh Program', '*Tarikh Program') }}
				{{ Form::text('tarikh', $program->tarikh, ['class' => 'form-control', 'readonly' => 'true']) }}

				{{ Form::hidden('program_id', $program->id) }}
				
				{{ Form::label('No Kad', '*No Kad Usahawan') }}
				{{ Form::text('noKad', null, ['class' => 'form-control', 'id' => 'noKad', 'placeholder' => 'Sentuhkan Kad Disini']) }}



				<br />
				{{ Form::submit('Daftar Point', ['class' => 'btn btn-primary']) }}

				{{ Form::close() }}
			</div>
		</div>
	</div>

	<div class="col col-xs-4">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Usahawan</h3></div>
			<div class="panel panel-body">
				
				<table class="table table-condensed table-striped table-hover">
					<tr>
						<td><strong>Nama Usahawan</strong></td>
						<td><strong>No KP</strong></td>
						<td><strong>PPK</strong></td>
						<td><strong>Point</strong></td>
					</tr>

					@if(!empty($points))
						@foreach($points as $point)
							<tr>
								<td>{{ $point->pengusaha->nama }}</td>
								<td>{{ $point->pengusaha->noKP }}</td>
								<td>{{ $point->pengusaha->Ppk->kod }}</td>
								<td>{{ $point->point }}</td>
							</tr>							
						@endforeach
					@else 
						<tr>
							<td colspan="4">Tiada data</td>
						</tr>
					@endif

				</table>
				
			</div>
		</div>
	</div>
</div>

<script type="text/javascript">
	$(document).ready(function() {
		$('#noKad').focus();
	});


</script>

@stop