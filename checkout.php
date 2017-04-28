<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Assignment 4 - Knight Tutors</title>
	<link href="http://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/css/materialize.min.css" rel="stylesheet">
	<link href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css" rel="stylesheet">
	<link href="https://cdnjs.cloudflare.com/ajax/libs/animate.css/3.5.2/animate.min.css" rel="stylesheet">
  <link href="css/styles.css" rel="stylesheet">
</head>
<body>
	<?php include("includes/header.php"); ?>

 <div class="row">
   <?php
// define variables and set to empty values
$first_nameErr = $last_nameErr = $group1_Err = $number_Err = $date_Err = $cvc_Err = "";
$first_name = $last_name = $group1 = $number = $date = $cvc = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
  if (empty($_POST["first_name"])) {
    $first_nameErr = "First name is required";
  } else {
    $first_name = test_input($_POST["first_name"]);
  }

  if (empty($_POST["last_name"])) {
    $last_nameErr = "Last name is required";
  } else {
    $last_name = test_input($_POST["last_name"]);
  }

  if (empty($_POST["group1"])) {
    $group1_Err = "Please choose";
  } else {
    $group1 = test_input($_POST["group1"]);
  }

  if (empty($_POST["number"])) {
    $number_Err = "Card number is required";
  } else {
    $number = test_input($_POST["number"]);
  }

   if (empty($_POST["date"])) {
    $date_Err = "Date is required";
  } else {
    $date = test_input($_POST["date"]);
  }

   if (empty($_POST["cvc"])) {
    $cvc_Err = "CVC is required";
  } else {
    $cvc = test_input($_POST["cvc"]);
  }

}

function test_input($data) {
  $data = trim($data);
  $data = stripslashes($data);
  $data = htmlspecialchars($data);
  return $data;
}

?>

 <div class="row">
	 <h2>Checkout Here</h2>
<form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]);?>">
<form class="col s12">
      <div class="row">
   <div class="input-field col s6">
          <input placeholder="Cardholder's first name" name = "first_name" type="text" class="validate">
          <label for="first_name"></label>
		   <?php echo $first_nameErr;?>
        </div>
   <div class="input-field col s6">
          <input placeholder="Cardholder's last name" name = "last_name" type="text" class="validate">
          <label for="last_name"></label>
		  <?php echo $last_nameErr;?>
        </div>
</div>
     <div class="row">
   <div class="input-field col s6">
         <input name="group1" type="radio" id="test1" />
		<label for="test1">Pay with credit card</label>
		<br>
		<br>
		 <?php echo $group1_Err;?>
        </div>
   <div class="input-field col s6">
        <input name="group1" type="radio" id="test2" />
      <label for="test2">Pay with PayPal</label>
	  <br>
	  <br>
	  <?php echo $group1_Err;?>
        </div>
</div>
  <div class="row">
   <div class="input-field col s6">
          <input placeholder="Card Number" name = "number" id="number" type="text" class="validate">
          <label for="date"></label>
		 <?php echo $number_Err;?>
        </div>
   <div class="input-field col s6">
          <input placeholder="Valid Thru" name = "date" id="date" type="text" class="validate">
          <label for="date"></label>
		  <?php echo $date_Err;?>
        </div>
</div>
<div class="row">
   <div class="input-field col s12">
          <input placeholder="CVV/CVC" name = "cvc" id="cvc" type="text" class="validate">
          <label for="cvc"></label>
		  <?php echo $cvc_Err;?>
        </div>
</div>

  <a class = "waves-effect waves-light light-blue darken-2 btn" href = "cart.php">Back</a>
  <input class = "waves-effect waves-light light-blue darken-2 btn" type="submit" name="submit" value="Checkout">

</form>

</form>
</div>

<?php

echo $first_name;
echo "<br>";
echo $last_name;
echo "<br>";
echo $number;
echo "<br>";
echo $date;
echo "<br>";
echo $cvc;

?>

  </div>

  <?php include("includes/footer.php"); ?>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/function.js"></script>

</body>
</html>
