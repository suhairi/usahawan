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
		<div class="panel panel-heading"><h3>Keputusan Carian</h3></div>
		<div class="panel panel-body">
			<table class="table table-condensed table-hover table-bordered">
				<tr>
					<td colspan="2"><img src="{{ asset('/images/profiles/' . $usahawan->foto) }}" height="150" width="150"><br /><br /></td>
				</tr>
				<tr>
					<td><strong>Nama</strong></td>
					<td>{{ $usahawan->nama }}</td>
				</tr>
				<tr>
					<td><strong>No KP</strong></td>
					<td>{{ $usahawan->noKP }}</td>
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
					<td><strong>Bangsa</strong></td>
					<td>{{ $usahawan->bangsa }}</td>
				</tr>
				<tr>
					<td><strong>Alamat</strong></td>
					<td>{{ $usahawan->alamat }}</td>
				</tr>
				<tr>
					<td><strong>Dun</strong></td>
					<td>{{ $usahawan->alamat }}</td>
				</tr>
				<tr>
					<td><strong>Parlimen</strong></td>
					<td>{{ $usahawan->parlimen }}</td>
				</tr>





			</table>
		</div>
	</div>
</div>

@stop