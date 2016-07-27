@extends('layouts.app')

@section('content')

<div class="row">

	<div class="col-xs-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Semak Kad</h3></div>
			<div class="panel-body">

			{{ Form::open() }}

			{{ Form::label('No Kad', 'No Kad : ') }}
			{{ Form::text('noKad', null, ['class' => 'form-control', 'id' => 'noKad', 'maxlength' => '10', 'minlength' => '10']) }}

			<br />
			{{ Form::submit('Carian', ['class' => 'btn btn-primary']) }}

			{{ Form::close() }}	

			</div>
		</div>
	</div>

</div>


<script type="text/javascript">
	
	$(document).ready(function() {
		$('#noKad').focus();

		$('#noKad').change(function() {

			$.ajax({
				type: "POST",
				url: "{{ url('/semakKad') }}",
				data: "_token = {{ csrf_token() }}",
				success: function(data) {
					alert('here');
					$("#searchSemak").html(data.msg);
				}

			});
		});
	});


</script>

@stop