<?php
    include("db.php");
    $sql = 'SELECT title, phydig, reldate, completion, comdate, genre, developer, publisher, platform, digplatform FROM gameparade LIMIT 50';
    
    $resultat = mysqli_query($conn, $sql);

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Game Parade</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<form name="game_form" method="post" action="do.php">
		<fieldset>
		<label>Title:</label><br>
		<input type="text" id="title" name="title"><br>
		<label>Physical/digital:</label><br>
			<select id="phydig" name="phydig">
             	<option value="Physical">Physically</option>
                <option value="Digital">Digitally</option>
            </select><br>
		<label>Release date:</label><br>
		<input type="text" id="reldate" name="reldate"><br>
		<label>Completion:</label><br>
			<select id="completion" name="completion">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br>
		<label>Completion date:</label><br>
		<input type="text" id="comdate" name="comdate"><br>
		<label>Genre:</label><br>
		<input type="text" id="genre" name="genre"><br>
		<label>Developer:</label><br>
		<input type="text" id="developer" name="developer"><br>
		<label>Publisher:</label><br>
		<input type="text" id="publisher" name="publisher"><br>
		<label>Platform:</label><br>
			<select id="platform" name="platform">
				<option value=""></option>
				<option value="pc">PC</option>
				<option value="ps4">PlayStation 4</option>
				<option value="xb1">Xbox One</option>
				<option value="ns">Nintendo Switch</option>
				<option value="ps3">PlayStation 3</option>
				<option value="xb360">Xbox 360</option>
				<option value="wiiu">Nintendo Wii U</option>
				<option value="3ds">Nintendo 3DS</option>
				<option value="wii">Nintendo Wii</option>
				<option value="ds">Nintendo DS</option>
				<option value="ps2">PlayStation 2</option>
			</select><br>
		<label>Digital platfom:</label><br>
			<select id="digplatform" name="digplatform">
				<option value=""></option>
				<option value="Steam">Steam</option>
				<option value="Origin">Origin</option>
				<option value="UPlay">UPlay</option>
				<option value="MicrosoftStore">Microsoft Store</option>
				<option value="PlayStationStore">PlayStation Store</option>
				<option value="Battlenet">Battle.net</option>
				<option value="AppStore">App Store (Mac)</option>
			</select><br>
			<button type="submit" value="submit">Gem</button>
		</fieldset>
	</form>
		
            <section id="observationer">
                <?php while ($r = mysqli_fetch_array($resultat)) { 
                            echo '<section class=""><h3>' . $r['title'] . '</h3><p>' . $r['phydig'] . '</p></section>';
                        } 
                 ?>
        	</section>
</body>

</html>
