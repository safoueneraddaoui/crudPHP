<html>
<head>
</head>
<body>
<input type="button" value="ajouter voiture" onclick="window.location.href='index.php?controller=voitures&action=add1'">
<input type="button" value="liste voiture" onclick="window.location.href='index.php?controller=voitures&action=list1'">  
<?php 
if(isset($_REQUEST['controller']))
	$controller=$_REQUEST['controller'];
else $controller="voitures";
include "controllers/".$controller.".controller.php";
?>

</body>
</html>