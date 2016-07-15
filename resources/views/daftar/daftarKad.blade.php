@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-4">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Daftar Kad</h3></div>
			<div class="panel-body">
				
				{{ Form::open(['route' => 'postDaftarKad', 'method' => 'post'])}}
				<label>No Kad</label>
				<input type="text" name="noKad" class="form-control" id="noKad" required="">

				<label>No KP Usahawan</label>
				<input type="text" name="noKP" class="form-control" id="noKP" required="">			

				<br />
				<input type="submit" value="Daftar" class="btn btn-primary">

				{{ Form::close() }}		

				<br />	
			</div>
</div>
		

	</div>
</div>




@stop