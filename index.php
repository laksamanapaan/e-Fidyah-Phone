<html>
<head>
<meta charset="utf-8">
<title>e-Fidyah</title>
<link href="jquery.mobile-1.0.min.css" rel="stylesheet" type="text/css"/>
<script src="jquery-1.6.4.min.js" type="text/javascript"></script>
<script src="jquery.mobile-1.0.min.js" type="text/javascript"></script>
</head>
<body>
<div data-role="page">
	<div data-role="header">
		<h1>Kira Fidyah</h1>
		<a href="index.html" data-role="button" data-icon="home">Halaman Utama</a>
  </div>
<form name="kira_fidyah" action="kira_zakat.php" method="POST">
<table align="center" bgcolor="#99FF99" cellpadding="5" cellspacing="5">
    <tr align="left">
    <td><font size="+1" color="#000000" face="Comic Sans MS, cursive">Pilih Negeri : </font></td>
    </tr>
    <tr>
    <td width="50"><select size="1" name="negeri">
                <option selected></option>
                <option>Johor</option>
                <option>Kedah</option>
                <option>Kelantan</option>
                <option>Negeri Sembilan</option>
                <option>Pahang</option>
                <option>Perak</option>
                <option>Selangor</option>
                <option>Kuala Lumpur</option>
                <option>Perlis</option>
                <option>Melaka</option>
                <option>Terengganu</option>
                <option>Pulau Pinang</option>
                <option>Sabah</option>
                <option>Serawak</option>
				</select> </td>
     <td width="46"><input type="submit" value="Go" name="button"/></td> 
    </tr>     
    </table>
    </form>
    </div>
</body>
</html>