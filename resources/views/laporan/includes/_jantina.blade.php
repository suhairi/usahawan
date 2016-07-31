<div class="panel panel-primary">
	<div class="panel panel-heading"><strong>Laporan Umum</strong></div>
	<div class="panel panel-body">
	<table class="table table-bordered table-condensed table-striped table-hover">
		<thead>
			<tr>
				<th rowspan="2"><div align="center" valign="middle"><strong>WILAYAH</strong></div></th>
				<th align="center" colspan="7"><div align="center" valign="middle"><strong>JANTINA</strong></div></th> 
			</tr>
			<tr>
				<th align="center"><div align = "center">LELAKI</div></th>
				<th align="center"><div align = "center">PEREMPUAN</div></th>
				<th align="center"><div align = "center">JUMLAH</div></th>
			</tr>
		</thead>
		<tbody>

			@for($i = 1; $i <= 4; $i++)
				<tr>
					<td align="center">{{ $i}}</td>
					<td align="center">{{ $jantina[$i]["lelaki"] }}</td>
					<td align="center">{{ $jantina[$i]["perempuan"] }}</td>
					<td align="center"><strong>{{ $jantina[$i]["total"] }}</strong></td>
				</tr>
			@endfor

			<tr>
				<td colspan="3" align="right"><strong>JUMLAH</strong></td>
				<td align="center"><strong>{{ $jantina['grandTotal'] }}</strong></td>
		</tbody>
	</table>
	</div>
</div>