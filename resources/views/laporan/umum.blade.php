@extends('layouts.app')

@section('content')

<ul class="nav nav-tabs">
  <li role="presentation" id="txtUmur"><a href="#"><div id="txtUmur">Umur</div></a></li>
  <li role="presentation" id="txtJantina"><a href="#"><div id="txtJantina">Jantina</div></a></li>
</ul>

<div id="umur">
 	@include('laporan.includes._umur')
</div>

<div id="jantina">
  @include('laporan.includes._jantina')
</div>


<script type="text/javascript">

$(document).ready(function() {

    $(".txtUmur").addClass("active");
    $("#jantina").hide();    

    $("#txtUmur").click(function() {
        $("#jantina").hide();
        $("#umur").show();
        $(".txtUmur").addClass("active");
        $(".txtJantina").removeClass("active");
    });

    $("#txtJantina").click(function() {
        $("#umur").hide();
        $("#jantina").show();
        $(".txtJantina").addClass("active");
        $(".txtUmur").removeClass("active");
    });

    $(".txtUmur").addClass("active");
    $(".txtJantina").removeClass("active");


});

</script>

@stop