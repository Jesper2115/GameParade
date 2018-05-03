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
		<input type="text" id="title" name="title" required><br>
		<label>Form of copy:</label><br>
			<select id="phydig" name="phydig">
             	<option value="Physical">Physical</option>
                <option value="Digital">Digital</option>
            </select><br>
		<label>Release date:</label><br>
		<input type="text" id="reldate" name="reldate"><br>
		<label>Completion:</label><br>
			<select id="completion" name="completion">
				<option value=""></option>
				<option value="Completed: Yes">Yes</option>
				<option value="Completed: No">No</option>
			</select><br>
		<label>Completion date:</label><br>
		<input type="text" id="comdate" name="comdate"><br>
		<label>Genre:</label><br>
		<input type="text" id="genre" name="genre" required><br>
		<label>Developer:</label><br>
		<input type="text" id="developer" name="developer"><br>
		<label>Publisher:</label><br>
		<input type="text" id="publisher" name="publisher"><br>
		<label>Platform:</label><br>
			<select id="platform" name="platform" required>
				<option value=""></option>
				<option value="Computer">Computer</option>
				<option value="PlayStation 4">PlayStation 4</option>
				<option value="Xbox One">Xbox One</option>
				<option value="Nintendo Switch">Nintendo Switch</option>
				<option value="PlayStation 3">PlayStation 3</option>
				<option value="Xbox 360">Xbox 360</option>
				<option value="Nintendo Wii U">Nintendo Wii U</option>
				<option value="Nintendo 3DS">Nintendo 3DS</option>
				<option value="Nintendo Wii">Nintendo Wii</option>
				<option value="Nintendo DS">Nintendo DS</option>
				<option value="PlayStation 2">PlayStation 2</option>
			</select><br>
		<label>Digital platfom:</label><br>
			<select id="digplatform" name="digplatform">
				<option value=""></option>
				<option value=" - Steam">Steam</option>
				<option value=" - Origin">Origin</option>
				<option value=" - UPlay">UPlay</option>
				<option value=" - Microsoft Store">Microsoft Store</option>
				<option value=" - PlayStationStore">PlayStation Store</option>
				<option value=" - Battlenet">Battle.net</option>
				<option value=" - AppStore">App Store (Mac)</option>
			</select><br>
			<button type="submit" value="submit">Save</button>
		</fieldset>
	</form>
		
            <section id="observationer">
                <?php while ($r = mysqli_fetch_array($resultat)) { 
                            echo '<section class=""><span class="game">' . $r['title'] . '</span> ' . '(' . $r['platform'] . $r['digplatform'] . ') (' . $r['phydig'] . ')</p>' . $r['completion'] . ' ' . $r['comdate'] . '<br>Genre: ' . $r['genre'] .'<br> Developer: '. $r['developer'] . '<br>Publisher: ' . $r['publisher'] . '</section>';
                        } 
                 ?>
        	</section>
</body>

<script>
    if (document.game_form.title.value == "") {
        visfejltekst('Whacha game, bra?');
    document.game_form.title.focus();
        return false;
    }
    </script>

</html>
