<table class="table table-bordered table-condensed table-striped table-hover">
	<thead>
		<tr>
			<th rowspan="2"><div align="center" valign="middle"><strong>WILAYAH</strong></div></th>
			<th align="center" colspan="7"><div align="center" valign="middle"><strong>UMUR (TAHUN)</strong></div></th> 
		</tr>
		<tr>
			<th align="center"><div align = "center">18 -25</div></th>
			<th align="center"><div align = "center">26 -30</div></th>
			<th align="center"><div align = "center">31 -40</div></th>
			<th align="center"><div align = "center">41 -50</div></th>
			<th align="center"><div align = "center">51 -60</div></th>
			<th align="center"><div align = "center">> 61</div></th>
			<th align="center"><div align = "center">JUMLAH</div></th>
		</tr>
	</thead>
	<tbody>

		@for($i = 1; $i <= 4; $i++)
			<tr>
				<td align="center">{{ $i}}</td>
				<td align="center">{{ $wilayah[$i][1] }}</td>
				<td align="center">{{ $wilayah[$i][2] }}</td>
				<td align="center">{{ $wilayah[$i][3] }}</td>
				<td align="center">{{ $wilayah[$i][4] }}</td>
				<td align="center">{{ $wilayah[$i][5] }}</td>
				<td align="center">{{ $wilayah[$i][6] }} </td>
				<td align="center"><strong>{{ $wilayah[$i]["total"] }}</strong></td>
			</tr>
		@endfor

		<tr>
			<td colspan="7" align="right"><strong>JUMLAH</strong></td>
			<td align="center"><strong>{{ $wilayah['grandTotal'] }}</strong></td>
	</tbody>
</table>