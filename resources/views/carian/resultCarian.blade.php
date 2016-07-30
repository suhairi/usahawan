@extends('layouts.app')

@section('content')

<style>
	img {
		height: 150px;
		width: 250;
		border-radius: 5px;
		border: 2px solid #CCC;
		box-shadow: 5px 5px 5px #888888;
	}


</style>

<div class="row">
	<div class="panel panel-primary">
		<div class="panel panel-heading"><h3>Maklumat No Kad Pengenalan</h3></div>
		<div class="panel panel-body">
			<table class="table table-condensed table-hover table-bordered">
				<tr>
					<td colspan="2">

					@if(!$usahawan->foto == '')
						<img src="{{ asset('/images/profiles/' . $usahawan->foto) }}" height="150" width="150">
					@else
						<img src="{{ asset('/images/profiles/dummy.jpg') }}" height="150" width="150">
					@endif
					<br /><br />
					</td>
				</tr>
				<tr>
					<td><strong>Nama</strong></td>
					<td>{{ $usahawan->nama }}</td>
				</tr>
				<tr>
					<td><strong>Projek / Perusahaan</strong></td>
					<td>{{ $usahawan->perusahaan }}</td>
				</tr>
				<tr>
					<td><strong>Ppk</strong></td>
					<td>{{ $usahawan->Ppk->kod }}</td>
				</tr>
				<tr>
					<td><strong>No KP</strong></td>
					<td>{{ $usahawan->noKP }}</td>
				</tr>
				<tr>
					<td><strong>No Kad</strong></td>
					<td>
						@if(!empty($usahawan->Kad($usahawan->id)->noKad))
							{{ $usahawan->Kad($usahawan->id)->noKad }}
						@else
							TIDAK MEMILIKI KAD
						@endif
					</td>
				</tr>	

				<tr>
					<td><strong>Jantina</strong></td>
					<td>{{ $usahawan->jantina }}</td>
				</tr>
				<tr>
					<td><strong>No Telefon</strong></td>
					<td>{{ $usahawan->noTel }}</td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td>{{ $usahawan->alamat }}</td>
				</tr>
				
			</table>
		</div>
	</div>
</div>

@stop