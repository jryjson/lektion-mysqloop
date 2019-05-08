<?php
// Startar upp sessionen
session_start();

// Nollställer sessionsvariabeln
unset($_SESSION['status']);

// Återställer hela sessionen och tömmer innehållet i alla sessionsvariabler
session_destroy();
?>
<!DOCTYPE html>
<html lang="sv">
<head>
 <title>Sessioner Logga ut</title>
 <meta charset="utf-8" />
</head>
<body>

<h1>Du är nu utloggad!</h1>

</body>
</html