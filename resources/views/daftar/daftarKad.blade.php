@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-4">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Daftar Kad</h3></div>
			<div class="panel-body">
				
				{{ Form::open(['route' => 'postDaftarKad', 'method' => 'post']) }}
				
				{{ Form::label('No Kad', 'No Kad Usahawan') }}
				{{ Form::text('noKad', '', ['class' => 'form-control', 'id' => 'noKad', 'required' => 'true']) }}

				{{ Form::label('No KP', 'No KP Usahawan') }}
				{{ Form::text('noKP', '', ['class' => 'form-control', 'required' => 'true']) }}			

				<br />
				{{ Form::submit('Daftar Kad', ['class' => 'btn btn-primary'])}}

				{{ Form::close() }}		

				<br />	
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