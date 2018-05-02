<?php
include("db.php");

//echo "Der er hul igennem til behandl_observation.php";

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


$sql = "INSERT INTO gameparade (title, phydig, reldate, completion, comdate, genre, developer, publisher, platform, digplatform) VALUES ('".$title."', '".$phydig."', '".$reldate."', '".$completion."', '".$comdate."', '".$genre."', '".$developer."', '".$publisher."', '".$platform."', '".$digplatform."')";
//$sql = "INSERT INTO planteobservationer (obstype, obstekst, obstid) VALUES ('".$obstype."', '".$obstekst."', NOW())"; //nu med tid

//echo("SQL: " . $sql);

if ($conn->query($sql) === TRUE) {
   // echo "Gemt i databasen<br>";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error . "<br>";
}

$conn->close(); //vi lukker forbindelsen til databasen igen
    header('Location: GameParade.php');
?>


