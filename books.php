 <?php
 //index.php
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
 <html>
      <head>
           <title>Resources Page</title>
           <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>
           <!-- Compiled and minified CSS -->

  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/css/materialize.min.css">
  <link rel="stylesheet" href="http://sulley.cah.ucf.edu/~ti153451/DIG4503/assignment3/css/materialize.css">
	</head>
	<style>

	</style>
  <!-- Compiled and minified JavaScript -->
  <script src="https://cdnjs.cloudflare.com/ajax/libs/materialize/0.98.2/js/materialize.min.js"></script>

      <body>
           <br />
           <div class="container" style="width:700px;" align="center">
                <h3 class="text-center">Textbooks</h3><br />
                <div class="table-responsive" id="textbooks">
                     <table class="table table-bordered">
                          <tr>
                               <th><a class="column_sort" id="name" data-order="desc" href="#">Name</a></th>
                               <th><a class="column_sort" id="price" data-order="desc" href="#">Price</a></th>
                          </tr>

                     </table>

       <?php
                          while($row = mysql_fetch_assoc($result))
                          {
                          ?>
						<div class = "row">
                          <div class="col s4">

                     <form method="post" id = "resources" action="books.php?action=add&id=<?php echo $row["ID"]; ?>">
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:8px;" align="center">
                               <img src="<?php echo $row["Image"]; ?>" class="img-responsive" width= 200 height= 200/><br />
                               <h4 class="text-info"><?php echo $row["Name"]; ?></h4>
                               <h4 class="text-danger" id = "item_price">$ <?php echo $row["Price"]; ?></h4>
                               <input type="text" name="quantity" class="form-control" value="1" />
                               <input type="hidden" name="hidden_name" value="<?php echo $row["Name"]; ?>" />
                               <input type="hidden" name="hidden_price" value="<?php echo $row["Price"]; ?>" />
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />
                          </div>
                     </form>

                </div>
                          <?php
                          }
                          ?>

                </div>
				</div>

           <br />
		       <h3>Order Details</h3>
                <div class="table-responsive">
                     <table class="table table-bordered">
                          <tr>
                               <th width="40%">Item Name</th>
                               <th width="10%">Quantity</th>
                               <th width="20%">Price</th>
                               <th width="15%">Total</th>
                               <th width="5%">Action</th>
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
                               <td><a href="test.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>
                          </tr>
                          <?php
                                    $total = $total + ($values["item_quantity"] * $values["item_price"]);
                               }
                          ?>
                          <tr>
                               <td colspan="3" align="right">Total</td>
                               <td align="right">$ <?php echo number_format($total, 2); ?></td>
                               <td></td>
                          </tr>
                          <?php
                          }
                          ?>
                     </table>
                </div>
 <script>
 $(document).ready(function(){
      $(document).on('click', '.column_sort', function(){
           var column_name = $(this).attr("id");
           var order = $(this).data("order");
           var arrow = '';
           //glyphicon glyphicon-arrow-up
           //glyphicon glyphicon-arrow-down
           if(order == 'desc')
           {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-down"></span>';
           }
           else
           {
                arrow = '&nbsp;<span class="glyphicon glyphicon-arrow-up"></span>';
           }
           $.ajax({
                url:"sort.php",
                method:"POST",
                data:{column_name:column_name, order:order},
                success:function(data)
                {
                     $('#textbooks').html(data);
                     $('#'+column_name+'').append(arrow);
                }
           })
      });
 });
 </script>
 </body>
 </html>
