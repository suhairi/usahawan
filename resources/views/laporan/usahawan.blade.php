@extends('layouts.app')

@section('content')

<div class="row">
	<div class="col-xs-8">
		<div class="panel panel-primary">
			<div class="panel panel-heading"><h3>Senarai Usahawan</h3></div>
			<div class="panel panel-body">
				<table class="table table-condensed table-hover table-striped">
					<thead>
						<tr>
							<th>Bil</th>
							<th>Nama</th>
							<th>No KP</th>
							<th>Jantina</th>
							<th>Dun</th>
							<th>PPK</th>
						</tr>
					</thead>
					<tbody>
					<?php $bil = 1; ?>
						@foreach($usahawans as $usahawan)

						<tr>
							<td>{{ $bil++ }}</td>
							<td>{{ $usahawan->nama }}</td>
							<td>{{ $usahawan->noKP }}</td>
							<td>{{ $usahawan->jantina }}</td>
							<td>{{ $usahawan->dun }}</td>
							<td>{{ $usahawan->ppk }}</td>
						</tr>

						@endforeach
					</tbody>
				</table>
			</div>
		</div>
	</div>
</div>


@stop