<?php  
 //sort.php  
	
	$username = "ti153451";
	$password = "1Dancinginlife!";
	$database = "ti153451";

	$connect = mysql_connect("localhost", "$username", "$password") or die(mysql_error());
	mysql_select_db("$database") or die(mysql_error()); 
 $output = '';  
 $order = $_POST["order"];  
 if($order == 'desc')  
 {  
      $order = 'asc';  
 }  
 else  
 {  
      $order = 'desc';  
 }  
 $query = "SELECT * FROM Textbooks ORDER BY ".$_POST["column_name"]." ".$_POST["order"]."";  
 $result = mysql_query($query);  
 $output .= '  
 <table class="table table-bordered">  
      <tr>   
           <th><a class="column_sort" id="name" data-order="'.$order.'" href="#">Name</a></th>  
           <th><a class="column_sort" id="price" data-order="'.$order.'" href="#">Price</a></th>  
      </tr>  
 ';  

 $output .= '</table>';  
  while($row = mysql_fetch_assoc($result))  
 {  
      $output .= '  
 
	  

					 <div class = "row">
                          <div class="col s4">  

                     <form method="post" id = "resources" action="index.php?action=add&id="'. $row["ID"] .'">  
                          <div style="border:1px solid #333; background-color:#f1f1f1; border-radius:5px; padding:8px;" align="center">  
                               <img src="' .$row["Image"].'" class="img-responsive" width= 200 height= 200/><br />  
                               <h4 class="text-info">"' .$row["Name"]. '"</h4>  
                               <h4 class="text-danger" id = "item_price">$"' . $row["Price"]. '"</h4>  
                               <input type="text" name="quantity" class="form-control" value="1" />  
                               <input type="hidden" name="hidden_name" value="' .$row["Name"].'" />  
                               <input type="hidden" name="hidden_price" value="'. $row["Price"].'" />  
                               <input type="submit" name="add_to_cart" style="margin-top:5px;" class="btn btn-success" value="Add to Cart" />  
                          </div>  
                     </form>
					 
                </div>  
				
		      
	  	   
      ';  
 }  
 echo $output;  
 
 ?>  
 
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
                               <td><a href="index.php?action=delete&id=<?php echo $values["item_id"]; ?>"><span class="text-danger">Remove</span></a></td>  
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