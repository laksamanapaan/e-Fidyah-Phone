<html>
<head>
<meta charset="utf-8">
<title>e-Fidyah</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
<style type="text/css">
.btn {
  background: #c2c2c2;
  background-image: -webkit-linear-gradient(top, #c2c2c2, #e0e3e2);
  background-image: -moz-linear-gradient(top, #c2c2c2, #e0e3e2);
  background-image: -ms-linear-gradient(top, #c2c2c2, #e0e3e2);
  background-image: -o-linear-gradient(top, #c2c2c2, #e0e3e2);
  background-image: linear-gradient(to bottom, #c2c2c2, #e0e3e2);
  -webkit-border-radius: 9;
  -moz-border-radius: 9;
  border-radius: 9px;
  font-family: Arial;
  color: #000000;
  font-size: 20px;
  padding: 8px 35px 9px 35px;
  text-decoration: none;
}

.btn:hover {
  background: #3cfc8f;
  background-image: -webkit-linear-gradient(top, #3cfc8f, #34d95a);
  background-image: -moz-linear-gradient(top, #3cfc8f, #34d95a);
  background-image: -ms-linear-gradient(top, #3cfc8f, #34d95a);
  background-image: -o-linear-gradient(top, #3cfc8f, #34d95a);
  background-image: linear-gradient(to bottom, #3cfc8f, #34d95a);
  text-decoration: none;
}
</style>
</head>
<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kira Fidyah</h1>
		<a href="#page" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
<table align="center" bgcolor="#99CC99" cellpadding="5" cellspacing="5">
	<tr align="left">
    <td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Pilih Negeri : </font></td>
    </tr>
 </table>
 <table align="center" cellpadding="5" cellspacing="5">
    <tr align="center">
	<td><a href="perak.php"><input type="submit" class="btn" value="Perak" name="negeri1" onClick="perak.php"/></a></td>
	</tr>
    <tr align="center">
	<td><a href="selangor.php"><input type="submit" class="btn" value="Selangor" name="negeri2" onClick="selangor.php"/></a></td>
	</tr>
    <tr align="center">
	<td><a href="kedah.php"><input type="submit" class="btn" value="Kedah" name="negeri3" onClick="kedah.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="kelantan.php"><input type="submit" class="btn" value="Kelantan" name="negeri4" onClick="kelantan.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="kelantan.php"><input type="submit" class="btn" value="Terengganu" name="negeri5" onClick="terengganu.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="johor.php"><input type="submit" class="btn" value="Johor" name="negeri6" onClick="johor.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="melaka.php"><input type="submit" class="btn" value="Melaka" name="negeri7" onClick="melaka.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="wilayah.php"><input type="submit" class="btn" value="Kuala Lumpur" name="negeri8" onClick="wilayah.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="negeri_sembilan.php"><input type="submit" class="btn" value="Negeri Sembilan" name="negeri9" onClick="negeri_sembilan.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="sabah.php"><input type="submit" class="btn" value="Sabah" name="negeri10" onClick="sabah.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="serawak.php"><input type="submit" class="btn" value="Serawak" name="negeri11" onClick="serawak.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="pulau_pinang.php"><input type="submit" class="btn" value="Pulau Pinang" name="negeri12" onClick="pulau_pinang.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="perlis.php"><input type="submit" class="btn" value="Perlis" name="negeri13" onClick="perlis.php"/></a></td>
	</tr> 
    <tr align="center">
	<td><a href="pahang.php"><input type="submit" class="btn" value="Pahang" name="negeri14" onClick="pahang.php"/></a></td>
	</tr>       
    </table>
    </div>
</body>
</html>