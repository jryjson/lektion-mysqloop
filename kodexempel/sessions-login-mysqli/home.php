<?php
// Startar upp sessionen
session_start();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
 <title>Sessioner Hem</title>
 <meta charset="utf-8" />
</head>
<body>
<?php
// Kontrollerar om sessions variabeln för inloggningen finns
if($_SESSION['status'] == "ok"){
	echo "<p>Du har är inloggad på en privat sida!</p>";
} else{
	echo "<p>Du har inte behörighet för att se denna sida</p>";
}
?>
<p><a href="logout.php">Logga ut</a></p>
</body>
</html>