<?php
session_start();
setcookie("username", "maysa", time() +3600);
$_SESSION['username'] = "maysa";
($_SESSION['userpass'] == '123456789');
$_SESSION['ok'] = 1;
?>
<html>
	<head>
		<title> My serie site </title>
	</head>
	<form name="formulario" method="post" action="ejemploPost.php">
		Nombre: <input type="text" name="nombre value="">
		Email: <input type="text" name="nombre" value="">
		<input type="submit"/>
	</form>
<body>
<?php
define("FAVSERIE","Cronicas Vampiricas");
echo "My serie FAV is ";
echo FAVSERIE;
echo '<br/>';
$serierate = 10;
echo "My serie rating for this serie is: ";
echo $serierate;
date_default_timezone_set('UTC');
echo '<br/>';
echo date('Miercoles');
echo '<br/>';
$myfavserie = urlencode("Cronicas Vampiricas");
echo "<a href='FalchouPage2b.php?FAVSERIE=$myfavserie'>";
echo "Click here to see information about my favorite serie!";
echo "</a>";

?>
</body>
</html>