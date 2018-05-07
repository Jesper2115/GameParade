<?php
include("db.php"); //db.php forbinder til databasen

$title = $_POST['title'];
$phydig = $_POST['phydig'];
$reldate = $_POST['reldate'];
$completion = $_POST['completion'];
$comdate = $_POST['comdate'];
$genre = $_POST['genre'];
$developer = $_POST['developer'];
$publisher = $_POST['publisher'];
$platform = $_POST['platform'];
$digplatform = $_POST['digplatform'];
//Variabler

$sql = "INSERT INTO gameparade (title, phydig, reldate, completion, comdate, genre, developer, publisher, platform, digplatform) VALUES ('".$title."', '".$phydig."', '".$reldate."', '".$completion."', '".$comdate."', '".$genre."', '".$developer."', '".$publisher."', '".$platform."', '".$digplatform."')"; //Værdier indsættes til gameparade-tabellens

$conn->close(); //Forbindelsen til databasen lukkes
    header('Location: GameParade.php');
?>


