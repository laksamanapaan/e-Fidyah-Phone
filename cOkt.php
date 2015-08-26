
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
<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kalendar</h1>
		<a href="index.php" data-role="button" data-icon="home" data-rel="external">Halaman Utama</a>
  </div>
  <div data-role="content">
	<p align="center" id="tarikh">tarikh</p>
<table width="461" border="0" align="center" height="44" bgcolor="#99CC99">
    <td width="88"><a href="cSept.php" class="sprev" rel="external"> <span class="prev">September </span></a></td>
    <td width="275"><h4 align="center"> Oktober </h4><h4 align="center">Dzul Hijja / Muharram</h4></td>
    <td width="84"><a href="cNov.php" class="next" rel="external"> November </a></td>
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
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(1,18)" value="1&#x00A;18" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(2,19)" value="2&#x00A;19" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(3,20)" value="3&#x00A;20" align="center"/></td>
    
  </tr>
  <tr>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(4,21)" value="4&#x00A;21" align="center"/></td>
    <td align="center"><input type="button" class="button"  onclick="alertFunction(5,22)" value="5&#x00A;22" align="center"/></td>
    <td align="center"><input type="button" class="button" onClick="alertFunction(6,23)"value="6&#x00A;23"/></td>
    <td align="center"><input type="button" class="button" value="7&#x00A;24" onClick="alertFunction(7,24)"/></td>
    <td align="center"><input type="button" class="button" value="8&#x00A;25" onClick="alertFunction(8,25)"/></td>
    <td align="center"><input type="button" class="button" value="9&#x00A;26" onClick="alertFunction(9,26)"/></td>
    <td align="center"><input type="button" class="button" value="10&#x00A;27" onClick="alertFunction(10,27)"/></td>
   
  </tr>
  <tr bgcolor="#CCCCCC">
   <td align="center"><input type="button" class="button2" value="11&#x00A;28" onClick="alertFunction(11,28)"/></td>
    <td align="center"><input type="button" class="button2" value="12&#x00A;29" onClick="alertFunction(12,29)"/></td>
    <td align="center"><input type="button" class="button2" value="13&#x00A;30" onClick="alertFunction(13,30)"/></td>
    <td align="center"><input type="button" class="button2" value="14&#x00A;1" onClick="alertFunction1(14,1)"/></td>
    <td align="center"><input type="button" class="button2" value="15&#x00A;2" onClick="alertFunction1(15,2)"/></td>
    <td align="center"><input type="button" class="button2" value="16&#x00A;3" onClick="alertFunction1(16,3)"/></td>
    <td align="center"><input type="button" class="button2" value="17&#x00A;4" onClick="alertFunction1(17,4)"/></td>
   
  </tr>
  <tr>
   <td align="center"><input type="button" class="button" value="18&#x00A;5" onClick="alertFunction1(18,5)"/></td>
    <td align="center"><input type="button" class="button" value="19&#x00A;6" onClick="alertFunction1(19,6)"/></td>
    <td align="center"><input type="button" class="button" value="20&#x00A;7" onClick="alertFunction1(20,7)"/></td>
    <td align="center"><input type="button" class="button" value="21&#x00A;8" onClick="alertFunction1(21,8)"/></td>
    <td align="center"><input type="button" class="button" value="22&#x00A;9" onClick="alertFunction1(22,9)"/></td>
    <td align="center"><input type="button" class="button" value="23&#x00A;10" onClick="alertFunction1(23,10)"/></td>
    <td align="center"><input type="button" class="button" value="24&#x00A;11" onClick="alertFunction1(24,11)"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="25&#x00A;12" onClick="alertFunction1(25,12)"/></td>
    <td align="center"><input type="button" class="button2" value="26&#x00A;13" onClick="alertFunction1(26,13)"/></td>
    <td align="center"><input type="button" class="button2" value="27&#x00A;14" onClick="alertFunction1(27,14)"/></td>
    <td align="center"><input type="button" class="button2" value="28&#x00A;15" onClick="alertFunction1(28,15)"/></td>
    <td align="center"><input type="button" class="button2" value="29&#x00A;16" onClick="alertFunction1(29,16)"/></td>
    <td align="center"><input type="button" class="button2" value="30&#x00A;17" onClick="alertFunction1(30,17)"/></td>
    <td align="center"><input type="button" class="button2" value="31&#x00A;18" onClick="alertFunction1(31,18)"/></td>
    
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
</html><!--
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


<script src="style.css"></script>


</head>




</div>
</div>
</body>
</html>
-->