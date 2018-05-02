<?php


?>
<!DOCTYPE html>
<html lang="da">

<head>
	<meta charset="utf-8">
	<title>Game Parade</title>
	<link rel="stylesheet" href="style.css">

</head>

<body>
	<form name="game_form" method="post" action="behandl_observation.php">
		<label>Title:</label><br>
		<textarea id="title" name="title"></textarea><br>
		<label>Physical/digital:</label><br>
			<select id="phydig" name="phydig">
             	<option value="Physical">Physically</option>
                <option value="Digital">Digitally</option>
            </select><br>
		<label>Release date:</label><br>
		<textarea id="obsTekst" name="obsTekst"></textarea><br>
		<label>Completion:</label><br>
			<select id="completion" name="completion">
				<option value="Yes">Yes</option>
				<option value="No">No</option>
			</select><br>
		<label>Completion date:</label><br>
		<textarea id="comdate" name="comdate"></textarea><br>
		<label>Genre:</label><br>
		<textarea id="genre" name="genre"></textarea><br>
		<label>Developer:</label><br>
		<textarea id="developer" name="developer"></textarea><br>
		<label>Publisher:</label><br>
		<textarea id="publisher" name="publisher"></textarea><br>
		<label>Platform:</label><br>
			<select id="platform" name="platform">
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

	</form>
</body>

</html>
