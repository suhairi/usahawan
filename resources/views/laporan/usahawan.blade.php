@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-10">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Senarai Usahawan</h3></div>
			<div class="panel panel-body">
				<table class="table table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>BIL</th>
							<th>PPK</th>
							<th>NAMA USAHAWAN</th>
							<th>PROJEK / PERUSAHAAN</th>
							<th>NO KP</th>
							<th>NO TELEFON</th>
						</tr>
					</thead>
					<tbody>
					<?php $bil = 1; ?>
						@foreach($usahawans as $usahawan)

						<tr>
							<td>{{ $bil++ }}</td>
							<td>{{ $usahawan->Ppk->kod }}</td>
							<td>{{ $usahawan->nama }}</td>
							<td>{{ $usahawan->perusahaan }}</td>							
							<td>{{ $usahawan->noKP }}</td>
							<td>{{ $usahawan->noTel }}</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@stop