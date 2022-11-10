<!DOCTYPE html>
<html>
<head>
  <title>Databas Beställningar</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Set charset to allow ÅÄÖ -->
  <meta charset="UTF-8">

  <!-- Set viewport to make responsive design possible -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<?php
include 'header.php';
?>


<div class="container">
<?php

include 'config.php';

$queryResult = $conn->query("SELECT * FROM massagetimes");
	
	foreach ($queryResult as $row)
		{
			echo "<p>";
			echo $row['Mas_Date'] . ": ";
			echo $row['Mas_Time'] . "<br>";
			echo $row['Mas_Type'] . "<br>";
			echo $row['Customer_Name'] . "<br>";
			echo "</p>";
		}
?>
</div>
<?php
include 'footer.php';
?>
</html>