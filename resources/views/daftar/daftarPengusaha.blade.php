@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-6">
		<div class="panel panel-primary">
			<div class="panel-heading"><h3>Daftar Usahawan</h3></div>
			<div class="panel-body">

				{{ Form::open(['route' => 'daftarPengusaha', 'files' => true, 'method' => 'post']) }}

					{{ Form::label('Gambar', 'Gambar Foto Usahawan') }}
					{{ Form::file('foto', ['class' => 'form-control']) }}

					{{ Form::label('No KP', '*No KP Usahawan') }}
					{{ Form::text('noKP', '', ['class' => 'form-control', 'required' => 'true']) }}

					{{ Form::label('Nama', '*Nama Usahawan') }}
					{{ Form::text('nama', '', ['class' => 'form-control', 'required' => 'true']) }}

					{{ Form::label('Jantina', 'Jantina') }}
					{{ Form::select('jantina', ['LELAKI' => 'LELAKI', 'PEREMPUAN' => 'PEREMPUAN'], null, ['class' => 'form-control', 'placeholder' => 'JANTINA']) }}

					{{ Form::label('No Tel', 'No Telefon Usahawan') }}
					{{ Form::text('noTel', '', ['class' => 'form-control']) }}

					{{ Form::label('PPK', '*PPK') }}
					{{ Form::select('ppk', $ppk, '', ['class' => 'form-control', 'placeholder' => 'PPK   ']) }}

					<br />
					{{ Form::submit('Daftar Usahawan', ['class' => 'btn btn-primary']) }}

				{{ Form::close() }}
				

			</div>
		</div>



	</div>
</div>

@stop