<?php
session_start();
$_SESSION['username'] = $_POST['user'];
$_SESSION['userpass'] = $_POST['pass'];
$_SESSION['authuser'] = 0;
if ($_SESSION['ok'] != 1){
	echo "Sorry, but you don't have permission to view this page!";
	exit();
}
?>
<html>
   <head>
     <title>My serie site <?php echo $_GET['FAVSERIE']?></title>
   </head>
<body>
<?php
echo "Bienvenido a mi pagina, ";
echo $_COOKIE["username"];
echo "! <br/>";
echo "My favorite serie is ";
echo $_GET['FAVSERIE'];
$serierate = 8;
echo '<br>';
$nombre_usuario = $_GET['FAVSERIE'] ?? 'Cronicas Vampiricas';
$nombre_usuario = isset($_GET['FAVSERIE']) ? $_GET['FAVSERIE']: 'Cronicas Vampiricas';
$nombre_usuario = $_GET['FAVSERIE'] ?? $_POST['FAVSERIE'] ?? 'Cronicas Vampiricas';
echo $nombre_usuario;
?>
</body>
</html>