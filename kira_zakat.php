<html>
<head>
<meta charset="utf-8">
<title>e-Fidyah</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script><script language="JavaScript">
function proseskira()
{
    var a = parseFloat(document.kirakira.tahunsekarang.value);
    var b = parseInt(document.kirakira.tahuntinggal.value);
	var c = parseInt(document.kirakira.haritinggal.value);
	var d = parseInt(document.kirakira.zakatnegeri.value);
    var e = (a-b)*(c)*(d*0.25);

    document.kirakira.jumlah.value = e.toFixed(2);
}

function prosessimpan()
{
	var f = parseInt(document.kirakira.tahuntinggal.value);
	document.kirakira.tersimpan.value = f;
}
</script>
</head>
<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kira Fidyah</h1>
		<a href="#page" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
	<div data-role="content">	
<table align="center" cellpadding="5" bgcolor="#99FF99" cellspacing="5"> 
<tr align="left">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Zakat fitrah semasa
<?php
	if (isset($_POST['button'])) {
		$negeri = $_POST["negeri"]; 
	}
		?>
<?php print $negeri;
?> 2016</font>
</td>
</tr>
<tr align="center">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">RM 7.00</font>
</tr>
</table>
<form name="kirakira">
<table align="center" cellpadding="5" bgcolor="#99FF99" cellspacing="5"> 
<tr align="left">
    <td width="128">Tahun sekarang:</td>
    <td width="50"><input type="text" name="tahunsekarang" size="7" value="2016"></td>
    <td width="128">Tahun tinggal:</td>
    <td width="78"><select size="1" name="tahuntinggal">
                <option selected></option>
                <option>2001</option>
                <option>2002</option>
                <option>2003</option>
                <option>2004</option>
                <option>2005</option>
                <option>2006</option>
                <option>2007</option>
                <option>2008</option>
                <option>2009</option>
                <option>2010</option>
                <option>2011</option>
                <option>2012</option>
                <option>2013</option>
                <option>2014</option>
                <option>2015</option>
				</select> </td>
    </tr>
<tr align="left">
<td width="128">Bil hari tinggal:</td>
<td width="50"><input type="text" name="haritinggal" size="7"></td>
<td width="128">Zakat negeri RM: </td>
<td width="50"><input type="text" name="zakatnegeri" size="7" value="7.00"></td>
</tr></table>
<table align="center" cellpadding="5" cellspacing="5"> 
<tr align="right">
<td></td>
<td></td>
<td width="46"><input type="button" value="Kira" name="kira" onClick="proseskira()"></td>
<td></td>
<td></td>
</tr>
</table>
<table align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
<td >Jumlah</td>
<td> RM <input type="text" name="jumlah" size="8" value="" ></td> 
</tr>
</table>

<table align="center" cellpadding="5" cellspacing="5">
<td width="46"><input  type="button" value="simpan" name="simpan" onClick="prosessimpan()"></td>
</tr>
</table>

</form>
</div>
</body>
</html>