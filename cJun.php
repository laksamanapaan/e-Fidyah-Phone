<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
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
<script src="jquery-mobile/jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery-mobile/jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="function.js" type="text/javascript"> </script>
<script type= "text/javascript">
$day=0;
function alertFunction($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Jun 2016 "+ "  /  "+$hijri+" " + "Sya'ban 1437h";
}
	function alertFunction1($masihi,$hijri){
	document.getElementById("tarikh").innerHTML=$masihi+" " +"Jun 2016 "+ "  /  "+$hijri+" " + "Ramadan 1437h";}
	

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
<td width="88"><a href="cMay.php" class="sprev" rel="external"> <span class="prev">May </span></a></td>
<td width="275"><h4 align="center"> Jun </h4><h4 align="center">Sya'ban / Ramadan</h4></td>
<td width="84"><a href="cJul.php" class="next" rel="external"> Julai </a></td>
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
    <td></td>
    <td></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(1,25)" value="1&#x00A;25" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(2,26)" value="2&#x00A;26" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(3,27)" value="3&#x00A;27" align="center"/></td>
    <td align="center"><input type="button" class="button2"  onclick="alertFunction(4,28)" value="4&#x00A;28" align="center"/></td>
    
  </tr>
  <tr>
  <td align="center" bgcolor="#FF0000"><input type="button" class="button3"  onclick="alertFunction(5,29)" value="5&#x00A;29" align="center"/></td><!--
  <td align="center"><input type="button" class="button" onClick="alertFunction1()" value="6"/></td>
    <td align="center"><input type="button" class="button"v value="7" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="8" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="9" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="10" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="11" onClick="alertFunction1()"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="12" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="13" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="14" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="15" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="16" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="17" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="18" onClick="alertFunction1()"/></td>
    
  </tr>
  <tr>
  <td align="center"><input type="button" class="button" value="19" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="20" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="21" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="22" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="23" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="24" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button" value="25" onClick="alertFunction1()"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="26" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="27" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="28" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="29" onClick="alertFunction1()"/></td>
    <td align="center"><input type="button" class="button2" value="30" onClick="alertFunction1()"/></td>
     <td align="center"></td>
    <td align="center"></td>
  </tr>
  -->
    <td align="center"><input type="button" class="button" onClick="alertFunction1(6,1);kiraHari()" value="6&#x00A;1"/></td>
    <td align="center"><input type="button" class="button"v value="7&#x00A;2" onClick="alertFunction1(7,2);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="8&#x00A;3" onClick="alertFunction1(8,3);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="9&#x00A;4" onClick="alertFunction1(9,4);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="10&#x00A;5" onClick="alertFunction1(10,5);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="11&#x00A;6" onClick="alertFunction1(11,6);kiraHari()"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="12&#x00A;7" onClick="alertFunction1(12,7);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="13&#x00A;8" onClick="alertFunction1(13,8;kiraHari())"/></td>
    <td align="center"><input type="button" class="button2" value="14&#x00A;9" onClick="alertFunction1(14,9);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="15&#x00A;10" onClick="alertFunction1(15,10);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="16&#x00A;11" onClick="alertFunction1(16,11);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="17&#x00A;12" onClick="alertFunction1(17,12);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="18&#x00A;13" onClick="alertFunction1(18,13);kiraHari()"/></td>
    
  </tr>
  <tr>
  <td align="center"><input type="button" class="button" value="19&#x00A;14" onClick="alertFunction1(19,14;kiraHari())"/></td>
    <td align="center"><input type="button" class="button" value="20&#x00A;15" onClick="alertFunction1(20,15);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="21&#x00A;16" onClick="alertFunction1(21,16);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="22&#x00A;17" onClick="alertFunction1(22,17);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="23&#x00A;18" onClick="alertFunction1(23,18)"/></td>
    <td align="center"><input type="button" class="button" value="24&#x00A;19" onClick="alertFunction1(24,19);kiraHari()"/></td>
    <td align="center"><input type="button" class="button" value="25&#x00A;20" onClick="alertFunction1(25,20);kiraHari()"/></td>
    
  </tr>
  <tr bgcolor="#CCCCCC">
  <td align="center"><input type="button" class="button2" value="26&#x00A;21" onClick="alertFunction1(26,21);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="27&#x00A;22" onClick="alertFunction1(27,22);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="28&#x00A;23" onClick="alertFunction1(28,23);kiraHari()"/></td>
    <td align="center"><input type="button" class="button2" value="29&#x00A;24" onClick="alertFunction1(29,24;kiraHari())"/></td>
    <td align="center"><input type="button" class="button2" value="30&#x00A;25" onClick="alertFunction1(30,25);kiraHari()"/></td>
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
</table>


<p align="center">bilangan hari tidak berpuasa =</p>
<p align="center" id="bilangan">0</p>
</div>

 <table align="center" bgcolor="#99CC99" cellpadding="5" cellspacing="5">
	<tr align="left">
    <td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Nak Kira Zakat? </font></td>
    </tr></table>
<table align="center"  cellpadding="5" cellspacing="5">
    <tr align="left">
    <tr align="left">
    <td width="46" align="center"><a href="kira.php"><input type="submit" value="Teruskan"/></a></td> 
  
    </tr>     
    </table>
</div>
</div>

</body>
</html>