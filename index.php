<!DOCTYPE html>
<html>
<head>
  <title>Massage Formulär</title>
  <link rel="stylesheet" href="css/style.css">
  <!-- Set charset to allow ÅÄÖ -->
  <meta charset="UTF-8">

  <!-- Set viewport to make responsive design possible -->
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
</head>
<body>

<div id="nav">
	<div>
		<h2>Massage Formulär</h2>
		<ul>
			<li><a href="database_orders.php">Kund Beställningar</a></li>
			<li><a href="#">Link</a></li>
			<li><a href="#">Link</a></li>
		</ul>
	</div>
</div>

<div class="container">
  <form method="POST" action="" id="order-form">

    <label for="date">Datum</label><br>
    <input type="date" id="date" name="date" value=""><br><br>
  
    <label for="time">Tid</label><br>
    <input type="time" id="time" name="time" value=""><br><br>
  
    <input type="radio" id="Klassisk" name="massage-type" value="Klassisk">
    <label for="Klassisk">Klassisk</label><br>
    <input type="radio" id="Sportmassage" name="massage-type" value="Sportmassage">
    <label for="Sportmassage">Sportmassage</label><br>
    <input type="radio" id="Fysioterapi" name="massage-type" value="Fysioterapi">
    <label for="Fysioterapi">Fysioterapi</label> <br><br>
  
    <label for="name">Namn</label><br>
    <input type="text" id="name" name="name" value=""><br><br>

    <label for="phonenumber">Telefonnummer</label><br>
    <input type="text" id="phonenumber" name="phonenumber" value=""><br><br>
  
    <input type="submit" name="form-submit" value="Submit">

  </form> 
</div>

<div id="footer">

</div>
<?php

include 'config.php';

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
  $date = cleanInput($_POST['date']);
  $time = cleanInput($_POST['time']);
  $massageType = cleanInput($_POST['massage-type']);
	$name = cleanInput($_POST['name']);
	$phonenumber = cleanInput($_POST['phonenumber']);
	
	
	
if(isset($nameErr)){
	echo $nameErr;
}

else{


if($conn->query("INSERT INTO massagetimes(mas_date, mas_time, mas_type, customer_name, customer_phone)values('$date', '$time', '$massageType', '$name', '$phonenumber')")){
	echo "Order created successfully";

}
else{
	echo "error";
}
}
}
?>
</body>
</html>