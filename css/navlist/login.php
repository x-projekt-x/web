<h2>Login</h2>
<?php

	/**
	 * Fuer das Anmelden muss der Benutzer 
	 * 
	 * 	a) sich identifizieren
	 * 	b) beweisen, dass er es wirklich ist
	 * 
	 * Die eigegeben Anmeldung (credentials) werden gegen
	 * 
	 */
	 
	if(isset($_POST['anmelden'])) {
		
		$link = mysql_connect('host' , 'user', 'password')
			or die(mysql_error());
		
		mysql_select_db('db_name')
			or die(mysql_error());
			
		$email = $_POST['email'];
		$pass = md5($_POST['pass']);
		
		$query = 	"SELECT
						*
					 FROM
						db_table
					 WHERE
						email='".$email."'
					 AND
					 	pass='".$pass."'
					 		";
		
		$result = mysql_query($query);
		
		// falls genau ein Datensatz abgefragt werden konnte ...
		if(mysql_num_rows($result) ==1) {
			
			// ... sind wir "drin"
			
			// ... und wir speichern die erfolgreiche Anmeldung und 
			// den Benutzernamen (hier Email) in der Sitzung 
			$_SESSION['login'] 	= true;
			$_SESSION['user']	=$email;
                        
		}
		else{
	
			// ... sonst sind wir "draussen"
			echo "Pruefen Sie die Anmeldedaten";
	}
	}
	
	// falls sich jemand abmelden will...
	if(isset($_POST['abmelden'])){
		
		// ...loeschen wir die Sitzungsdaten
		$_SESSION = array();
		 
	}
	
	//das Anmeldeformular anzeigen, falls der Benutzer noch nicht angemeldet ist
	if($_SESSION['login'] != true) {
?>

	<form action="" method="post">
	
		<label for="email">E-Mail:</label>
		<br />
		<input type="text" name="email" id="email" />
		<br />
		<br />

		<label for="pass">Passwort:</label>
		<br />
		<input type="password" name="pass" id="pass" />
		<br />
		<br />
		
		<input type="submit" name="anmelden" id="anmelden" value="Login" />
	
	</form>
<?php 
	}
	else {
?>
	 <form action="" method="post">
	 	<button name="abmelden" id="abmelden">
	 		Logout
	 	</button>
	 </form>
<?php 
	 }
?>
