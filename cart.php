 <?php
 //cart.php
	session_start();
	include 'connect.php';

	$username = "ti153451";
	$password = "1Dancinginlife!";
	$database = "ti153451";

	$connect = mysql_connect("localhost", "$username", "$password") or die(mysql_error());
	mysql_select_db("$database") or die(mysql_error());
 $query = "SELECT * FROM Textbooks ORDER BY id DESC";
 $result = mysql_query($query);
 ?>
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
<style>

		#books {
			font-size: 48px;
			text-align: center;
			margin-top: 22px;
		}
		h4 {
			font-size: 20px;
		}
		.cart {
			border-bottom: 1px solid #ddd;
		}
		tr:nth-child(even) {
			background-color: #fff;
			color: #272838;
		}
		tr:nth-child(odd) {
			color: white;
		}

		#order {
			background-color: #272838;
			width: 1900px;
			height: 800px;
			padding-top: 50px;
		}
		.card-panel {
			background-color: #272838;
			margin-top: -10px;
			height: 150px;
		}
		#panel {
			height: 575px;
			margin-bottom: -10px;
		}
		th a {
			color: #4895ff;
			margin-left: 175px;
		}
		#textbooks {
			border-bottom: 1px solid #d4d4d4;
			border-radius: 5px;
			width: 126%;
			margin-left: -88px;
			font-size: 18px;
		}
		.container2 {
			float: left;
			margin-left: 100px;
		}
		.container3 {
			float: right;
			margin-left: 1700px;
			margin-top: -380px;
		}
		ul {
			text-align: left;
		}
		li.subjects a {
			color: black;
		}
		li.subjects a:hover {
			color: #44E5E7;
		}
		#categories {
			font-size: 20px;
			color: #4895ff;
		}
		#branch, #branch2 {
			display: none;
			font-size: 12px;
		}
		.row {
			margin-top: -200px;

		}
		#names {
			display: none;
		}
		#edu {
			display:none;
			margin-top: -200px;
		}
		#sci {
			display:none;
			margin-top: -200px;
		}
		#cri {
			display:none;
			margin-top: -200px;
		}
		#his {
			display:none;
			margin-top: -200px;
		}
		#mech {
			display:none;
			margin-top: -200px;
		}
		#aero {
			display:none;
			margin-top: -200px;
		}
		#slide-out .side-nav {
			float:right;
		}
		@media only screen and (min-width: 1531px) {
		.row {
			width: 1100px;
			margin-top:-70px;
		}
		}
		@media only screen and (min-width: 360px) and (max-width: 1530px) {
			.row, #edu, #sci, #cri, #his, #mech, #aero {
				margin-top: 80px;
			}
			#list li {
				float: left;
				margin-left: 125px;
			}
			.subjects #list li a {
				display: block;
				color: black;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
			#categories {
				margin-top: 16px;
			}
			#list li {
				float: left;
			}

			.subjects #list li a {
				display: block;
				color: black;
				text-align: center;
				padding: 16px;
				text-decoration: none;
			}
		}
		@media only screen and (min-width: 360px) {
			#order {
				width: 100%;
			}

		}
		#block {
			margin-top: -30px;
		}

		.btn {
			background-color: #1194d7;
		}
</style>
<body>
	<?php include("includes/header.php"); ?>
		<div class = "col s12 m5" id = "block">
				<div class="card-panel">
                <h3 class="text-center" id = "books">Textbooks</h3>
				<br>
			</div>
			</div>
        <div class = "container" style = "width: 700px;" align= "center">
			<br />
			<h3>PROMO CODE: Iloveschool for 25% off purchases $75 and up!</h3>
                <div class="table-responsive" id="textbooks">
                     <table class="table table-bordered">
                          <tr>
                               <th><a class="column_sort" id="name" data-order="desc">Name</a></th>
                               <th><a class="column_sort" id="price" data-order="desc">Price</a></th>
                          </tr>

                     </table>
				</div>
		</div>

		<div class="container2">
			<ul id = "list">
				<li id = "categories"><a href = "#">Categories</a></li>
				<br>
				<li id = "education" class = "subjects"><a href = "#">Education</a></li>
				<li id = "science" class = "subjects"><a href = "#">Science</a></li>
				<li id = "history" class = "subjects"><a href = "#">History</a></li>
				<li id = "justice" class = "subjects"><a href = "#">Criminal Justice</a></li>
				<li id = "engineering" class = "subjects"><a href = "#">Engineering</a></li>
				<li id = "branch" class = "subjects"><a href = "#">- Mechanical Engineering</a></li>
				<li id = "branch2" class = "subjects"><a href = "#">- Aerospace Engineering</a></li>
			</ul>
			<!--<input type = "search"id="myInput" onkeyup="myFunction()" style = "width: 170px;" placeholder = "Search">-->
		</div>
		<div class = "row">


       <?php
                          while($row = mysql_fetch_assoc($result))
                          {
                          ?>
			<div class="col s4">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:12px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" id = "submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />

                          </div>

                     </form>

                  </div>
                  </div>
                          <?php
                          }
                          ?>


		</div>
 <div class = "container" style = "width: 1100px; margin-top:50px;" align= "center">


	<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results2)) {
			?>
			<div id = "edu">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					</div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
	<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results3)) {
			?>
			<div id = "sci">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					</div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
		<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results4)) {
			?>
			<div id = "his">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					</div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
		<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results5)) {
			?>
			<div id = "cri">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					</div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
		<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results6)) {
			?>
			<div id = "mech">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					 </div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
		<div class = "container4" style = "width: 300px" align= "center">
		   <?php
			 while($row = mysql_fetch_assoc($results7)) {
			?>
			<div id = "aero">
			<div class="col s3">
				<div class = "card">
                     <form method="post" id = "resources" action="cart.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="background-color:#fff; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= "130" height= "180"/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" style = "width: 200px;"/>
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>

                     </form>
					 </div>
                  </div>
				</div>
			<?php
			 }
			 ?>
		</div>
	</div>

	   <br />
	   <div class="col s12 m5">
  <div class="card-panel" id = "panel">
  <span class="white-text"><h3>Order Details</h3> </span>
 <span class="white-text"><div class="table-responsive" id = "table">
                     <table class="table table-bordered">
                          <tr>
                               <th class = "cart" width="40%">Item Name</th>
                               <th class = "cart" width="10%">Quantity</th>
                               <th class = "cart" width="20%">Price</th>
                               <th class = "cart" width="15%">Total</th>
                               <th class = "cart" width="5%">Action</th>
                          </tr>
                          <?php
                          if(!empty($_SESSION["shopping_cart"]))
                          {
                               $total = 0;
                               foreach($_SESSION["shopping_cart"] as $keys => $values)
                               {
                          ?>
                          <tr>
                               <td><?php echo $values["item_name"]; ?></td>
                               <td><?php echo $values["item_quantity"]; ?></td>
                               <td>$ <?php echo $values["item_price"]; ?></td>
                               <td>$ <?php echo number_format($values["item_quantity"] * $values["item_price"], 2); ?></td>
                               <td><a href="cart.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
                               <td></td>
							   <a class="waves-effect waves-light btn" href="checkout.php">Check Out</a>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
          </span>
 <!--<div class = "container" style = "width: 1200px" align= "center">
		        <span class="white-text"><h3 class="center-align">Order Details</h3> </span>

            </div>  -->
            </div>

        </div>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.1/js/materialize.min.js"></script>
	<script src="js/main.js"></script>
	<script src="js/function.js"></script>
	 <script>

$("#submit").click(function(e) {
  e.preventDefault();
  var name = $("#name").val();
  var last_name = $("#last_name").val();
  var dataString = 'name='+name+'&last_name='+last_name;
  $.ajax({
    type:'POST',
    data:dataString,
    url:'cart.php',
    success:function(data) {
      alert(data);
    }
  });
});
$(document).ready(function(){
    $("#engineering").click(function(){
        $("#branch").toggle(200);
        $("#branch2").toggle(200);
    });
});

$(document).ready(function() {
$("#education").click(function() {
	$("#edu").show();
	$(".row").hide();
	$("#sci").hide();
	$("#his").hide();
	$("#cri").hide();
	$("#mech").hide();
	$("#aero").hide();
});
$("#science").click(function() {
	$("#sci").show();
	$(".row").hide();
	$("#edu").hide();
	$("#his").hide();
	$("#cri").hide();
	$("#mech").hide();
	$("#aero").hide();
});
$("#history").click(function() {
	$("#his").show();
	$(".row").hide();
	$("#edu").hide();
	$("#sci").hide();
	$("#cri").hide();
	$("#mech").hide();
	$("#aero").hide();
});
$("#justice").click(function() {
	$("#cri").show();
	$(".row").hide();
	$("#edu").hide();
	$("#sci").hide();
	$("#his").hide();
	$("#mech").hide();
	$("#aero").hide();
});
$("#branch").click(function() {
	$("#mech").show();
	$(".row").hide();
	$("#edu").hide();
	$("#sci").hide();
	$("#his").hide();
	$("#cri").hide();
	$("#aero").hide();
});
$("#branch2").click(function() {
	$("#aero").show();
	$(".row").hide();
	$("#edu").hide();
	$("#sci").hide();
	$("#his").hide();
	$("#cri").hide();
	$("#mech").hide();
});
$("#categories").click(function() {
	$(".row").show();
	$("#edu").hide();
	$("#aero").hide();
	$("#sci").hide();
	$("#his").hide();
	$("#cri").hide();
	$("#mech").hide();
});
});

 </script>

</body>
</html>
