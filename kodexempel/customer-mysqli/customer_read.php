<?php 
/*
  * Visar alla kunder
*/

// Skapar databaskopplingen
$connection = mysqli_connect("localhost", "root", "", "customerDB") or die("Could not connect");
// Väljer databas
mysqli_select_db($connection,"customerDB") or die("Could not select database");

// Visar alla kunder i tabellen
$query = "SELECT * FROM customer ORDER BY customerName ASC";

$result = mysqli_query($connection,$query);
?>
<!DOCTYPE HTML>
<html lang="sv">
<head>
<meta charset="utf-8" />
<title>Kunder - Visa alla</title>
</head>

<body>
<h1>Kunder</h1>
<p><a href="customer_create.php">Lägg till ny kund</a></p>
<ul>
<?php 
	// Loopar genom arrayen som innehåller alla kunder i tabellen
 	while($row = mysqli_fetch_array($result)){
?>
 <li><?php echo $row['customerName'];?> <a href="customer_update.php?editid=<?php echo $row['customerId'];?>">Uppdatera</a> <a href="customer_delete.php?deleteid=<?php echo $row['customerId'];?>">Ta bort</a></li>
<?php 
	}
?>
</ul>
<?php
// Stänger databaskopplingen
mysqli_close($connection);
?>
</body>
</html>

