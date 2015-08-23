<html>
<head>
<meta charset="utf-8">
<title>e-Fidyah</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<style type="text/css">
.next {
	color: #000;
}
</style>

<script type= "text/javascript">
$day=0;
function alertFunction($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"April 2016 "+ "  /  "+$hijri+" " + "Jamadil Akhir 1437h";
}
	function alertFunction1($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"April 2016 "+ "  /  "+$hijri+" " + "Rejab 1437h";
}

</script>

<script src="style.css"></script>


</head>

<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kalendar</h1>
		<a href="#page" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
	<div data-role="content">	
<p align="center" id="tarikh">tarikh</p>
<table width="461" border="0" align="center" height="44" bgcolor="#99CC99">
    <td width="88"><a href="cMac.php" class="sprev"> <span class="prev">Mac </span></a></td>
    <td width="275"><h4 align="center"> April </h4></td>
    <td width="84"><a href="cMay.php" class="next"> May </a></td>
</table>
<p></p>
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
    <td>&nbsp;</td>
    <td></td>
    <td>&nbsp;</td>
    <td></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(1,23)" value="1" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(2,24)" value="2" align="center"/></td>
        
  </tr>
  <tr>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(3,25)" value="3" align="center"/></td>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(4,26)" value="4" align="center"/></td>
    <td align="center"><input type="button" class="button"  onclick="alertFunction(5,27)" value="5" align="center"/></td>
    <td align="center"><input type="button" class="button" onClick="alertFunction(6,28)"value="6"/></td>
    <td align="center"><input type="button" class="button" value="7" onClick="alertFunction(7,29)"/></td>
    <td align="center"><input type="button" class="button" value="8" onClick="alertFunction1(8,1)"/></td>
    <td align="center"><input type="button" class="button" value="9" onClick="alertFunction1(9,2)"/></td>
    
   
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="10" onClick="alertFunction1(10,3)"/></td>
   <td align="center"><input type="button" class="button2" value="11" onClick="alertFunction1(11,4)"/></td>
    <td align="center"><input type="button" class="button2" value="12" onClick="alertFunction1(12,5)"/></td>
    <td align="center"><input type="button" class="button2" value="13" onClick="alertFunction1(13,6)"/></td>
    <td align="center"><input type="button" class="button2" value="14" onClick="alertFunction1(14,7)"/></td>
    <td align="center"><input type="button" class="button2" value="15" onClick="alertFunction1(15,8)"/></td>
    <td align="center"><input type="button" class="button2" value="16" onClick="alertFunction1(16,9)"/></td>
    
   
  </tr>
  <tr>
  <td align="center"><input type="button" class="button" value="17" onClick="alertFunction1(17,10)"/></td>
   <td align="center"><input type="button" class="button" value="18" onClick="alertFunction1(18,11)"/></td>
    <td align="center"><input type="button" class="button" value="19" onClick="alertFunction1(19,12)"/></td>
    <td align="center"><input type="button" class="button" value="20" onClick="alertFunction1(20,13)"/></td>
    <td align="center"><input type="button" class="button" value="21" onClick="alertFunction1(21,14)"/></td>
    <td align="center"><input type="button" class="button" value="22" onClick="alertFunction1(22,15)"/></td>
    <td align="center"><input type="button" class="button" value="23" onClick="alertFunction1(23,16)"/></td>
    
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2"value="24" onClick="alertFunction1(24,17)"/></td>
  <td align="center"><input type="button" class="button2" value="25" onClick="alertFunction1(25,18)"/></td>
    <td align="center"><input type="button" class="button2" value="26" onClick="alertFunction1(26,19)"/></td>
    <td align="center"><input type="button" class="button2" value="27" onClick="alertFunction1(27,20)"/></td>
    <td align="center"><input type="button" class="button2" value="28" onClick="alertFunction1(28,21)"/></td>
    <td align="center"><input type="button" class="button2" value="29" onClick="alertFunction1(29,22)"/></td>
    <td align="center"><input type="button" class="button2" value="30" onClick="alertFunction1(30,23)"/></td>
    
    
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