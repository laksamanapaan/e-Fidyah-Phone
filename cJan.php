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
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Januari 2016 "+ "  /  "+$hijri+" " + "Rabiul Awwal 1437h";
}
	function alertFunction1($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Januari 2016 "+ "  /  "+$hijri+" " + "Rabiul Akhir 1437h";
}

</script>

<script src="style.css"></script>


</head>

<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kalendar</h1>
		<a href="#page" data-role="button" data-icon="home" data-rel="external">Halaman Utama</a>
  </div>
	<div data-role="content">	
<p align="center" id="tarikh">tarikh</p>
<table width="461" border="0" align="center" height="44" bgcolor="#99CC99">
    <td width="88"><a href="cDec.php" class="sprev" rel="external"> <span class="prev">December </span></a></td>
    <td width="275"><h4 align="center"> Januari </h4>
    <h4 align="center">Rabiul Awwal / Rabiul Akhir</h4></td>
    <td width="84"><a href="cFeb.php" class="next" rel="external"> Februari </a></td>
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
    <td align="center"><input type="button"  class="button2" onClick="alertFunction(1,21)" value="1&#x00A;21" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(2,22)" value="2&#x00A;22" align="center"/></td>
        
  </tr>
  <tr>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(3,23)" value="3&#x00A;23" align="center"/></td>
  <td align="center"><input type="button" class="button"  onclick="alertFunction(4,24)" value="4&#x00A;24" align="center"/></td>
    <td align="center"><input type="button" class="button"  onclick="alertFunction(5,25)" value="5&#x00A;25" align="center"/></td>
    <td align="center"><input type="button" class="button" onClick="alertFunction(6,26)"value="6&#x00A;26"/></td>
    <td align="center"><input type="button" class="button" value="7&#x00A;27" onClick="alertFunction(7,27)"/></td>
    <td align="center"><input type="button" class="button" value="8&#x00A;28" onClick="alertFunction(8,28)"/></td>
    <td align="center"><input type="button" class="button" value="9&#x00A;29" onClick="alertFunction(9,29)"/></td>
    
   
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="10&#x00A;30" onClick="alertFunction(10,30)"/></td>
   <td align="center"><input type="button" class="button2" value="11&#x00A;1" onClick="alertFunction1(11,1)"/></td>
    <td align="center"><input type="button" class="button2" value="12&#x00A;2" onClick="alertFunction1(12,2)"/></td>
    <td align="center"><input type="button" class="button2" value="13&#x00A;3" onClick="alertFunction1(13,3)"/></td>
    <td align="center"><input type="button" class="button2" value="14&#x00A;4" onClick="alertFunction1(14,4)"/></td>
    <td align="center"><input type="button" class="button2" value="15&#x00A;5" onClick="alertFunction1(15,5)"/></td>
    <td align="center"><input type="button" class="button2" value="16&#x00A;6" onClick="alertFunction1(16,6)"/></td>
    
   
  </tr>
  <tr>
  <td align="center"><input type="button" class="button" value="17&#x00A;7" onClick="alertFunction1(17,7)"/></td>
   <td align="center"><input type="button" class="button" value="1&#x00A;88" onClick="alertFunction1(18,8)"/></td>
    <td align="center"><input type="button" class="button" value="19&#x00A;9" onClick="alertFunction1(19,9)"/></td>
    <td align="center"><input type="button" class="button" value="20&#x00A;10" onClick="alertFunction1(20,10)"/></td>
    <td align="center"><input type="button" class="button" value="21&#x00A;11" onClick="alertFunction1(21,11)"/></td>
    <td align="center"><input type="button" class="button" value="22&#x00A;12" onClick="alertFunction1(22,12)"/></td>
    <td align="center"><input type="button" class="button" value="23&#x00A;13" onClick="alertFunction1(23,13)"/></td>
    
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="24&#x00A;14" onClick="alertFunction1(24,14)"/></td>
  <td align="center"><input type="button" class="button2" value="25&#x00A;15" onClick="alertFunction1(25,15)"/></td>
    <td align="center"><input type="button" class="button2" value="26&#x00A;16" onClick="alertFunction1(26,16)"/></td>
    <td align="center"><input type="button" class="button2" value="27&#x00A;17" onClick="alertFunction1(27,17)"/></td>
    <td align="center"><input type="button" class="button2" value="28&#x00A;18" onClick="alertFunction1(28,18)"/></td>
    <td align="center"><input type="button" class="button2" value="29&#x00A;19" onClick="alertFunction1(29,19)"/></td>
    <td align="center"><input type="button" class="button2" value="30&#x00A;20" onClick="alertFunction1(30,20)"/></td>
    
    
  </tr>
  
  <tr>
  <td align="center"><input type="button" class="button" value="31&#x00A;21" onClick="alertFunction1(31,21)"/></td>
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