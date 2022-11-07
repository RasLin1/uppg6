<!DOCTYPE html>
<html>
<head>
<title>Programmering - Audio Player</title>
<!-- Set charset to allow ÅÄÖ -->
<meta charset="UTF-8">

<!-- Set viewport to make responsive design possible -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<form method="POST" action="">

  <label for="date">Datum</label><br>
  <input type="date" id="date" name="date" value=""><br><br>
  
  <label for="time">Tid</label><br>
  <input type="time" id="time" name="time" value=""><br><br>
  
  <input type="radio" id="Klassisk" name="massage-type" value="Klassisk">
  <label for="Klassisk">Klassisk</label><br>
  <input type="radio" id="Sportmassage" name="massage-type" value="Sportmassage">
  <label for="Sportmassage">Sportmassage</label><br>
  <input type="radio" id="Fysioterapi" name="massage-type" value="Fysioterapi">
  <label for="Fysioterapi">Fysioterapi</label>
  
  <label for="name">Namn</label><br>
  <input type="text" id="name" name="name" value=""><br><br>

  <label for="phonenumber">Telefonnummer</label><br>
  <input type="text" id="phonenumber" name="phonenumber" value=""><br><br>
  
  <input type="submit" name="form-submit" value="Submit">

</form> 
<?php

include 'includes/config.php';

//tar bort skadlig kod samt stoppar att script inte körs
function cleanInput ($data){
	$data = trim($data);
	$data = stripslashes($data);
	$data = htmlspecialchars($data);
	return $data;
}

if (empty($_POST["date"])){
	$nameErr = "Error: Fyll i datum";
}

if (empty($_POST["time"])){
	$nameErr = "Error: Fyll i tid";
}

if (empty($_POST["massage-type"])){
	$nameErr = "Error: Fyll i massage typ";
}

if (empty($_POST["name"])){
	$nameErr = "Error: Fyll i namn";
}

if (empty($_POST["phonenumber"])){
	$nameErr = "Error: Fyll i telefonnummer";
}
		
if(isset($_POST['form-submit'])){
	$Fornamn2 = cleanInput($_POST['fornamn2']);
	$Efternamn = cleanInput($_POST['efternamn']);
	$Older = cleanInput($_POST['older']);
	$Stad = cleanInput($_POST['stad']);
	$Postnummer = cleanInput($_POST['postnummer']);
	
	
	
if(isset($nameErr)){
	echo $nameErr;
}

else{
echo $Fornamn2 . "<br>";
echo $Efternamn . "<br>";
echo $Older . "<br>";
echo $Stad . "<br>";
echo $Postnummer . "<br>";

?>
</body>
</html>