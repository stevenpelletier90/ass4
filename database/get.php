<?php
$q = $_GET['q'];

$username = "st488021";
$password = "Avocados90";
$database = "st488021";

$con = mysqli_connect("localhost" , "$username" , "$password", "$database") or die(mysql_error());

mysqli_select_db($con,"st488021");
$sql="SELECT * FROM teachers WHERE Subject = '".$q."'";
$result = mysqli_query($con,$sql);

while($row = mysqli_fetch_array($result)) {
    echo "<div class='card center animated fadeIn'>
    <div class='card-content'>";
    echo "<span class='card-title'>" . $row['Name'] . "</span>";
    echo "<div class='row'>
          <div class='col s12 m4'>";
    echo "<br>";
    echo "<h6 class='red-text'>Phone</h6><p>" . $row['Phone'] . "</p></div>";
    echo "<div class='col s12 m4'>";
    echo "<h6 class='red-text'>Subject</h6><p>" . $row['Subject'] . "</p></div>";
    echo "<div class='col s12 m4'>";
    echo "<h6 class='red-text'>Location</h6><p>" . $row['Location'] . "</p></div>";
    echo "</div>
    </div>
    </div>
    </div>";
}

mysqli_close($con);
?>
