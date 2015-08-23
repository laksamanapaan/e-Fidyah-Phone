<html>
<head>
<meta charset="utf-8">
<title>e-Fidyah</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<script src="function.js" language="JavaScript">



function prosessimpan()
{
	var f = parseFloat(document.kirakira.tahuntinggal.value);
	var g = parseFloat(document.kirakira.jumlah.value);
	
	document.kirakira.tinggal.value = f;
	document.kirakira.tahun.value = g.toFixed(2);
}
</script>
</head>
<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kira Fidyah</h1>
		<a href="index.html" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
<table align="center" cellpadding="5" bgcolor="#99CC99" cellspacing="5"> 
<tr align="left">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Zakat fitrah semasa
    Johor
 2016</font>
</td>
</tr>
<tr align="center">
<td><font size="+1" color="#000000" face="Comic Sans MS, cursive">RM8.00</font>
</tr>
</table>
<table align="center" cellpadding="5" cellspacing="5">
<tr><td></td></tr>
</table>
<form name="kirakira">
<table align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
    <td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Tahun ganti puasa :</font></td>
    <td width="50"><input type="text" name="tahunsekarang" size="4" value="2016"></td></tr>
<tr align="left">
    <td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Tahun tinggal :</font></td>
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
<td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Bil hari tinggal:</font></td>
<td width="50"><input type="text" name="haritinggal" size="4"></td></tr>
<tr align="left">
<td width="128"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Zakat negeri RM: </font></td>
<td width="50"><input type="text" name="zakatnegeri" size="4" value="8.00"> </td>
</tr></table>
<table align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
<td><input type="button" value="Kira" name="kira" onClick="proseskira()"></td>
<td><input type="reset" value="Reset"></td>
</tr>
</table>
<table align="center" bordercolor="#999933" cellpadding="5" cellspacing="5"> 
<tr>
<td align="left"><font size="-1" color="#000000" face="Comic Sans MS, cursive">Jumlah:</font></td>
<td align="right"><font size="-1" color="#000000" face="Comic Sans MS, cursive">RM</font> <input type="text" name="jumlah" size="8" value="" ></td>
<td width="46"><input type="button" value="Simpan" name="simpan" onClick="prosessimpan()"></td>  
</tr>
</table>

<table align="center" cellpadding="5" cellspacing="5">
<tr><td></td></tr>
</table>

<table bordercolor="#000000" align="center" cellpadding="5" cellspacing="5"> 
<tr align="left">
    <td><font size="-1" color="#000000" face="Comic Sans MS, cursive">Tahun tinggal puasa</font></td>
    <td>Kadar tahun semasa</td>
</tr>
<tr align="left">
<td width="100"><input type="text" name="tinggal" size="15"></td>
<td width="100"><input type="text" name="tahun" size="15"></td></tr>
</table>
</form>
</div>
</body>
</html>