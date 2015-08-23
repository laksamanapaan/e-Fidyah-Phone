<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>calendar</title>
<link href="jquery-mobile/jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<link href="style.css" rel="stylesheet" type="text/css" />
<style type="text/css">
.next {
	color: #000;
}
</style>
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="calendarSimple.php"> </script>
<script type= "text/javascript">
$day=0;
function alertFunction($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Oktober 2015 "+ "  /  "+$hijri+" " + "DzulHijja 1436h";
}
	function alertFunction1($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Oktober 2015 "+ "  /  "+$hijri+" " + "Muharram 1437h";
}

</script>

<script src="style.css"></script>


</head>

<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kalendar</h1>
		<a href="index.html" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
<p align="center" id="tarikh">tarikh</p>
<table width="461" border="0" align="center" height="44" bgcolor="#99CC99">
    <td width="88"><a href="cSept.html" class="sprev"> <span class="prev">September </span></a></td>
    <td width="275"><h4 align="center"> Oktober </h4></td>
    <td width="84"><a href="cNov.php" class="next"> November </a></td>
</table>
<table width="461" border="0" align="center">
  <tr bgcolor="#666666" class="hari" >
    <td width="61">Ahd</td>
    <td width="58">Isn</td>
    <td width="57">Sel</td>
    <td width="59">Rab</td>
    <td width="53">Kha</td>
    <td width="51">Jum</td>
    <td width="76">Sab</td>
  </tr>
  
  <tr bgcolor="#CCCCCC">
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(1,18)" value="1" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(2,19)" value="2" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(3,20)" value="3" align="center"/></td>
    
  </tr>
  <tr>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(4,21)" value="4" align="center"/></td>
    <td align="center"><input type="button" class="button"  onclick="alertFunction(5,22)" value="5" align="center"/></td>
    <td align="center"><input type="button" class="button" onClick="alertFunction(6,23)"value="6"/></td>
    <td align="center"><input type="button" class="button" value="7" onClick="alertFunction(7,24)"/></td>
    <td align="center"><input type="button" class="button" value="8" onClick="alertFunction(8,25)"/></td>
    <td align="center"><input type="button" class="button" value="9" onClick="alertFunction(9,26)"/></td>
    <td align="center"><input type="button" class="button" value="10" onClick="alertFunction(10,27)"/></td>
   
  </tr>
  <tr bgcolor="#CCCCCC">
   <td align="center"><input type="button" class="button2" value="11" onClick="alertFunction(11,28)"/></td>
    <td align="center"><input type="button" class="button2" value="12" onClick="alertFunction(12,29)"/></td>
    <td align="center"><input type="button" class="button2" value="13" onClick="alertFunction(13,30)"/></td>
    <td align="center"><input type="button" class="button2" value="14" onClick="alertFunction1(14,1)"/></td>
    <td align="center"><input type="button" class="button2" value="15" onClick="alertFunction1(15,2)"/></td>
    <td align="center"><input type="button" class="button2" value="16" onClick="alertFunction1(16,3)"/></td>
    <td align="center"><input type="button" class="button2" value="17" onClick="alertFunction1(17,4)"/></td>
   
  </tr>
  <tr>
   <td align="center"><input type="button" class="button" value="18" onClick="alertFunction1(18,5)"/></td>
    <td align="center"><input type="button" class="button" value="19" onClick="alertFunction1(19,6)"/></td>
    <td align="center"><input type="button" class="button" value="20" onClick="alertFunction1(20,7)"/></td>
    <td align="center"><input type="button" class="button" value="21" onClick="alertFunction1(21,8)"/></td>
    <td align="center"><input type="button" class="button" value="22" onClick="alertFunction1(22,9)"/></td>
    <td align="center"><input type="button" class="button" value="23" onClick="alertFunction1(23,10)"/></td>
    <td align="center"><input type="button" class="button" value="24" onClick="alertFunction1(24,11)"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="25" onClick="alertFunction1(25,12)"/></td>
    <td align="center"><input type="button" class="button2" value="26" onClick="alertFunction1(26,13)"/></td>
    <td align="center"><input type="button" class="button2" value="27" onClick="alertFunction1(27,14)"/></td>
    <td align="center"><input type="button" class="button2" value="28" onClick="alertFunction1(28,15)"/></td>
    <td align="center"><input type="button" class="button2" value="29" onClick="alertFunction1(29,16)"/></td>
    <td align="center"><input type="button" class="button2" value="30" onClick="alertFunction1(30,17)"/></td>
    <td align="center"><input type="button" class="button2" value="31" onClick="alertFunction1(31,18)"/></td>
    
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
</table>


</div>
</div>
</body>
</html>