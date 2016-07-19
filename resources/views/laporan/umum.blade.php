@extends('layouts.app')

@section('content')

<style>

ul.tab {
    list-style-type: none;
    margin: 0;
    padding: 0;
    overflow: hidden;
    border: 1px solid #ccc;
    background-color: #f1f1f1;
}

/* Float the list items side by side */
ul.tab li {float: left;}

/* Style the links inside the list items */
ul.tab li a {
    display: inline-block;
    color: black;
    text-align: center;
    padding: 14px 16px;
    text-decoration: none;
    transition: 0.3s;
    font-size: 17px;
}

/* Change background color of links on hover */
ul.tab li a:hover {background-color: #ddd;}

/* Create an active/current tablink class */
ul.tab li a:focus, .active {background-color: #ccc;}

/* Style the tab content */
.tabcontent {
    display: none;
    padding: 6px 12px;
    border: 1px solid #ccc;
    border-top: none;
    -webkit-animation: fadeEffect 1s;
    animation: fadeEffect 1s; /* Fading effect takes 1 second */
}

@-webkit-keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

@keyframes fadeEffect {
    from {opacity: 0;}
    to {opacity: 1;}
}

</style>

<ul class="tab">
  <li><a href="#" class="tablinks" onclick="openCity(event, 'London')">Umur</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Paris')">Tahap Pendidikan</a></li>
  <li><a href="#" class="tablinks" onclick="openCity(event, 'Tokyo')">Jantina</a></li>
</ul>

<div id="London" class="tabcontent">
  <table class="table table-bordered table-condensed table-striped table-hover">
  	<thead>
  		<tr>
  			<th rowspan="2" align="center" valign="middle">Wilayah</th>
  			<th align="center" colspan="7">Umur (Tahun)</th> 
  		</tr>
  		<tr>
  			<th align="center">18 -25</th>
  			<th align="center">26 -30</th>
  			<th align="center">31 -40</th>
  			<th align="center">41 -50</th>
  			<th align="center">51 -60</th>
  			<th align="center">> 61</th>
  			<th align="center">JUMLAH</th>
  		</tr>
  	</thead>
  	<tbody>
  		<tr>
  			<td align="center">1</td>
  			<td align="center">12</td>
  			<td align="center">31</td>
  			<td align="center">15</td>
  			<td align="center">34</td>
  			<td align="center">23</td>
  			<td align="center">4</td>
  			<td align="center"><strong>120</strong></td>
  		</tr>
  		<tr>
  			<td align="center">2</td>
  			<td align="center">12</td>
  			<td align="center">31</td>
  			<td align="center">15</td>
  			<td align="center">34</td>
  			<td align="center">23</td>
  			<td align="center">4</td>
  			<td align="center"><strong>120</strong></td>
  		</tr>
  		<tr>
  			<td align="center">3</td>
  			<td align="center">12</td>
  			<td align="center">31</td>
  			<td align="center">15</td>
  			<td align="center">34</td>
  			<td align="center">23</td>
  			<td align="center">4</td>
  			<td align="center"><strong>120</strong></td>
  		</tr>
  		<tr>
  			<td align="center">4</td>
  			<td align="center">12</td>
  			<td align="center">31</td>
  			<td align="center">15</td>
  			<td align="center">34</td>
  			<td align="center">23</td>
  			<td align="center">4</td>
  			<td align="center"><strong>120</strong></td>
  		</tr>

  	</tbody>
  </table>
</div>

<div id="Paris" class="tabcontent">
  <h3>Tahap Pendidikan</h3>
  <p>Paris is the capital of France.</p> 
</div>

<div id="Tokyo" class="tabcontent">
  <h3>Jantina</h3>
  <p>Tokyo is the capital of Japan.</p>
</div>


<script type="text/javascript">

var i, tabcontent, tablinks;

// Get all elements with class="tabcontent" and hide them
tabcontent = document.getElementsByClassName("tabcontent");
for (i = 0; i < tabcontent.length; i++) {
    tabcontent[i].style.display = "none";
}

// Get all elements with class="tablinks" and remove the class "active"
tablinks = document.getElementsByClassName("tablinks");
for (i = 0; i < tablinks.length; i++) {
    tablinks[i].className = tablinks[i].className.replace(" active", "");
}

// Show the current tab, and add an "active" class to the link that opened the tab
document.getElementById("London").style.display = "block";
document.getElementById("London") += " active";

function openCity(evt, cityName) {
    // Declare all variables
    var i, tabcontent, tablinks;

    // Get all elements with class="tabcontent" and hide them
    tabcontent = document.getElementsByClassName("tabcontent");
    for (i = 0; i < tabcontent.length; i++) {
        tabcontent[i].style.display = "none";
    }

    // Get all elements with class="tablinks" and remove the class "active"
    tablinks = document.getElementsByClassName("tablinks");
    for (i = 0; i < tablinks.length; i++) {
        tablinks[i].className = tablinks[i].className.replace(" active", "");
    }

    // Show the current tab, and add an "active" class to the link that opened the tab
    document.getElementById(cityName).style.display = "block";
    evt.currentTarget.className += " active";
}

</script>

@stop