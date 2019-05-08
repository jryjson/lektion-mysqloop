<!DOCTYPE html>
<html lang="sv">
<head>
 <title>Sessioner Index</title>
<meta charset="utf-8" />
</head>
<body>

<form action="checklogin_mysqli.php" method="post">
    <h1>Logga in</h1>

    <label>Användare (e-post):</label>
    <p><input type="email" name="txtUser"></p>

    <label>Lösenord:</label>
    <p><input type="password" name="txtPassword"></p>

    <p><input type="submit" name="submit" value="logga in"></p>
</form>
</body>
</html>