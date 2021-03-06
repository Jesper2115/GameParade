<?php
    include("db.php"); //Inkluderer db.php, som har login-oplysningerne til databasen.
    $sql = 'SELECT title, phydig, reldate, completion, comdate, genre, developer, publisher, platform, digplatform FROM gameparade LIMIT 50'; //Vælger kolonner fra tabellen gameparade i databasen.
    
    $resultat = mysqli_query($conn, $sql); //Den lægger værdier i $resultat

?>
<!DOCTYPE html>
<html lang="en">

<head>
	<meta charset="utf-8">
	<title>Game Parade</title>
	<script type="text/javascript" src="script.js"></script> <!-- script.js har javascript-koden til cookie-popup'en -->
	<link rel="stylesheet" href="cookie.css"> <!-- Style sheet'et til cookie-popup'en -->
	<link rel="stylesheet" href="style.css"> <!-- Stylesheet til resten af siden -->
	<link rel="icon" href="favicon.ico" type="image/x-icon"/>
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>

<body>
       	
	<div id="cookie-bar" class="fixed"> 
    <p>This website uses cookies to ensure the best experience.
        <a href="#" id="save-cookie-example" class="cb-enable">I understand.</a> <!-- En knap der lukker cookie popup'en -->
        <a href="https://cookiesandyou.com/" class="cb-policy">Learn more.</a> <!-- Fører brugeren videre til en side hvor de kan læse om cookies -->
    </p>
	</div>
	
	<h1>GameParade</h1>
	<form name="game_form" method="post" action="do.php"> <!-- do.php har alle variablerne der hører til felterne -->
		<fieldset>
		<label>Title:</label><br>
		<input type="text" id="title" name="title" required><br>
		<label>Form of copy:</label><br>
			<select id="phydig" name="phydig" required>
            	<option value=""></option>
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
				<option value=" - PlayStation Store">PlayStation Store</option>
				<option value=" - Battle.net">Battle.net</option>
				<option value=" - App Store (Mac)">App Store (Mac)</option>
			</select><br>
			<button type="submit" value="submit">Submit</button> <!-- En knap med værdien submit, som tilføjer dataer til tabellen -->
		</fieldset>
	</form>
		
            <section id="list">
                <?php while ($r = mysqli_fetch_array($resultat)) { //En while-lækker der arbejder med $resultat 
                            echo '<section class="games"><span class="game">' . $r['title'] . '</span> ' . '(' . $r['platform'] . $r['digplatform'] . ') (' . $r['phydig'] . ')</p>' . 'Release date: ' . $r['reldate'] . '<br>' . $r['completion'] . ' ' . $r['comdate'] . '<br>Genre: ' . $r['genre'] .'<br> Developer: '. $r['developer'] . '<br>Publisher: ' . $r['publisher'] . '</section>';
                        } 
                 ?>
        	</section>
</body>

</html>