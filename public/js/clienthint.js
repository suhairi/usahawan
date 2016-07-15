function search(str)
{	
	var xmlHttp

	// alert('' + str);
	
	function stateChanged() 
	{ 
		if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
			document.getElementById("searchResult").innerHTML=xmlHttp.responseText
		} 
	}

	function GetXmlHttpObject()
	{
		var xmlHttp=null;

		try	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
		} catch (e) {
		 // Internet Explorer
		 	try {
		 		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		 	} catch (e) {
		 		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		 	}
		}

		return xmlHttp;
	}

	if (str.length==0)
	{ 
		document.getElementById("searchResult").innerHTML=""
		return
	}
	
	xmlHttp=GetXmlHttpObject()
	
	if (xmlHttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

	var url="functions/searchNoKP.php"
	url=url+"?noKP="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)
}

/*
//	Semak Pemilik Kad
*/

function semakPemilikKad(str)
{	
	var xmlHttp

	// if(str == "")
	// 	exit();
	
	function stateChanged() 
	{ 
		if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
			document.getElementById("searchSemak").innerHTML=xmlHttp.responseText
		} 
	}

	function GetXmlHttpObject()
	{
		var xmlHttp=null;

		try	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
		} catch (e) {
		 // Internet Explorer
		 	try {
		 		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		 	} catch (e) {
		 		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		 	}
		}

		return xmlHttp;
	}

	if (str.length==0)
	{ 
		document.getElementById("searchSemak").innerHTML=""
		return
	}
	
	xmlHttp=GetXmlHttpObject()
	
	if (xmlHttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

	var url="functions/searchNoKad.php"
	url=url+"?noKad="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)

	setTimeout(function() {
		$("#noKad").val("");
	}, 3000);
}

/*
//	Semak Pemilik Kad 2
*/

function semakPemilikKad2(str)
{	
	var xmlHttp

	// if(str == "")
	// 	exit();
	
	function stateChanged() 
	{ 
		if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
			document.getElementById("searchSemak2").innerHTML=xmlHttp.responseText
		} 
	}

	function GetXmlHttpObject()
	{
		var xmlHttp=null;

		try	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
		} catch (e) {
		 // Internet Explorer
		 	try {
		 		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		 	} catch (e) {
		 		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		 	}
		}

		return xmlHttp;
	}

	if (str.length==0)
	{ 
		document.getElementById("searchSemak2").innerHTML=""
		return
	}
	
	xmlHttp=GetXmlHttpObject()
	
	if (xmlHttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

	var url="functions/searchNoKad.php"
	url=url+"?noKad="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)

	setTimeout(function() {
		$("#noKad").val("");
	}, 3000);
}


/*
//	Semak Pemilik Kad
*/

function searchForBatal(str)
{	
	var xmlHttp

	// if(str == "")
	// 	exit();
	
	function stateChanged() 
	{ 
		if (xmlHttp.readyState==4 || xmlHttp.readyState=="complete") { 
			document.getElementById("result").innerHTML=xmlHttp.responseText
		} 
	}

	function GetXmlHttpObject()
	{
		var xmlHttp=null;

		try	{
		 // Firefox, Opera 8.0+, Safari
		 xmlHttp=new XMLHttpRequest();
		} catch (e) {
		 // Internet Explorer
		 	try {
		 		xmlHttp=new ActiveXObject("Msxml2.XMLHTTP");
		 	} catch (e) {
		 		xmlHttp=new ActiveXObject("Microsoft.XMLHTTP");
		 	}
		}

		return xmlHttp;
	}

	if (str.length==0)
	{ 
		document.getElementById("result").innerHTML=""
		return
	}
	
	xmlHttp=GetXmlHttpObject()
	
	if (xmlHttp==null)
	{
		alert ("Browser does not support HTTP Request")
		return
	} 

	var url="functions/searchForBatal.php"
	url=url+"?noKP="+str
	url=url+"&sid="+Math.random()
	xmlHttp.onreadystatechange=stateChanged 
	xmlHttp.open("GET",url,true)
	xmlHttp.send(null)

}