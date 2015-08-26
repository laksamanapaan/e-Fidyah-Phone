
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>calendar</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.next {
	color: #000;
}
</style>
<script src="calendarSimple.php"> </script>
<script type= "text/javascript">
$day=0;
function alertFunction($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"September 2015 "+ "  /  "+$hijri+" " + "DzulQaedah 1436h";
}
	function alertFunction1($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"September 2015 "+ "  /  "+$hijri+" " + "DzulHijja 1436h";
}

</script>

<script src="style.css"></script>


</head>

<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kalendar</h1>
		<a href="index.html" data-role="button" data-icon="home" data-rel="external">Halaman Utama</a>
  </div>
  <div data-role="content">
<p align="center" id="tarikh">tarikh</p>
<table width="461" border="0" align="center" height="44" bgcolor="#99CC99">
<td width="88"><a href="index.html#kalendar" class="sprev" rel="external"> <span class="prev">Ogos </span></a></td>
<td width="275"><h4 align="center"> September</h4>
  <h4 align="center">DzulQaedah /  DzulHijja</h4></td>
<td width="84"><a href="cOkt.php" class="next" rel="external"> Oktober </a></td>
</table>
<table id="table-column-toggle" data-role="table" data-mode="columntoggle"  class="ui-responsive table-stroke" width="461" border="0" align="center">
<thead>
  <tr bgcolor="#666666" class="hari" >
    <th data-priority="1" width="61">Ahd</th>
    <th data-priority="2">Isn</th>
    <th data-priority="3">Sel</th>
    <th data-priority="4">Rab</th>
    <th data-priority="5">Kha</th>
    <th data-priority="6">Jum</th>
    <th data-priority="7">Sab</th>
  </tr>
 </thead>
 <tbody> 
  <tr bgcolor="#CCCCCC">
    <td>&nbsp;</td>
    <td></td>
    <td align="center"><input type="button" class="button2"   onclick="alertFunction(1,17)" value="1&#x00A;17" align="center"/></td>
    <td align="center"><input type="button" class="button2" onclick="alertFunction(2,18)" value="2&#x00A;18" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(3,19)" value="3&#x00A;19" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(4,20)" value="4&#x00A;20" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(5,21)" value="5&#x00A;21" align="center"/></td>
  </tr>
  <tr>
    <td align="center"><input type="button" class="button" onClick="alertFunction(6,22)"value="6&#x00A;22"/></td>
    <td align="center"><input type="button" class="button" value="7&#x00A;23" onClick="alertFunction(7,23)"/></td>
    <td align="center"><input type="button" class="button" value="8&#x00A;24" onClick="alertFunction(8,24)"/></td>
    <td align="center"><input type="button" class="button" value="9&#x00A;25" onClick="alertFunction(9,25)"/></td>
    <td align="center"><input type="button" class="button" value="10&#x00A;26" onClick="alertFunction(10,26)"/></td>
    <td align="center"><input type="button" class="button" value="11&#x00A;26" onClick="alertFunction(11,27)"/></td>
    <td align="center"><input type="button" class="button" value="12&#x00A;28" onClick="alertFunction(12,28)"/></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center"><input type="button" class="button2" value="13&#x00A;29" onClick="alertFunction(13,29)"/></td>
    <td align="center"><input type="button" class="button2" value="14&#x00A;1" onClick="alertFunction1(14,1)"/></td>
    <td align="center"><input type="button" class="button2" value="15&#x00A;2" onClick="alertFunction1(15,2)"/></td>
    <td align="center"><input type="button" class="button2" value="16&#x00A;3" onClick="alertFunction1(16,3)"/></td>
    <td align="center"><input type="button" class="button2" value="17&#x00A;4" onClick="alertFunction1(17,4)"/></td>
    <td align="center"><input type="button" class="button2" value="18&#x00A;5" onClick="alertFunction1(18,5)"/></td>
    <td align="center"><input type="button" class="button2" value="19&#x00A;6" onClick="alertFunction1(19,6)"/></td>
  </tr>
  <tr>
    <td align="center"><input type="button" class="button" value="20&#x00A;7" onClick="alertFunction1(20,7)"/></td>
    <td align="center"><input type="button" class="button" value="21&#x00A;8" onClick="alertFunction1(21,8)"/></td>
    <td align="center"><input type="button" class="button" value="22&#x00A;9" onClick="alertFunction1(22,9)"/></td>
    <td align="center" bgcolor="#FF0000"uuu><input type="button" class="button3" value="23&#x00A;10" onClick="alertFunction1(23,10)"/></td>
    <td align="center" bgcolor="#FF0000"><input type="button" class="button3" value="24&#x00A;11" onClick="alertFunction1(24,11)"/></td>
    <td align="center" bgcolor="#FF0000"><input type="button" class="button3" value="25&#x00A;12" onClick="alertFunction1(25,12)"/></td>
    <td align="center" bgcolor="#FF0000"><input type="button" class="button3" value="26&#x00A;13" onClick="alertFunction1(26,13)"/></td>
  </tr>
  <tr bgcolor="#CCCCCC">
    <td align="center"><input type="button" class="button2" value="27&#x00A;14" onClick="alertFunction1(27,14)"/></td>
    <td align="center"><input type="button" class="button2" value="28&#x00A;15" onClick="alertFunction1(28,15)"/></td>
    <td align="center"><input type="button" class="button2"value="29&#x00A;16" onClick="alertFunction1(29,16)"/></td>
    <td align="center"><input type="button" class="button2" value="30&#x00A;17" onClick="alertFunction1(30,17)"/></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
  </tr>
  
  <tr>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
    <td align="center"></td>
  </tr>
  </tbody>
</table>

<table align="center" width="200" border="">
  <tr>
    <td width="30" bgcolor="#FF0000"></td>
    <td>Hari Haram Berpuasa</td>
  </tr>
</table>
</div>
</div>
</body>
</html>