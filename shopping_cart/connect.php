<?php
	
	$username = "ti153451";
	$password = "1Dancinginlife!";
	$database = "ti153451";

	$connect = mysql_connect("localhost", "$username", "$password") or die(mysql_error());
	mysql_select_db("$database") or die(mysql_error());
	
 if(isset($_POST["add_to_cart"]))  
 {  
      if(isset($_SESSION["shopping_cart"]))  
      {  
           $item_array_id = array_column($_SESSION["shopping_cart"], "item_id");  
           if(!in_array($_GET["id"], $item_array_id))  
           {  
                $count = count($_SESSION["shopping_cart"]);  
                $item_array = array(  
                     'item_id'               =>     $_GET["id"],  
                     'item_name'               =>     $_POST["hidden_name"],  
                     'item_price'          =>     $_POST["hidden_price"],  
                     'item_quantity'          =>     $_POST["quantity"]  
                );  
                $_SESSION["shopping_cart"][$count] = $item_array;  
           }  
           else  
           {  
                echo '<script>alert("Item Already Added")</script>';  
                echo '<script>window.location="index.php"</script>';  
           }  
      }  
      else  
      {  
           $item_array = array(  
                'item_id'               =>     $_GET["id"],  
                'item_name'               =>     $_POST["hidden_name"],  
                'item_price'          =>     $_POST["hidden_price"],  
                'item_quantity'          =>     $_POST["quantity"]  
           );  
           $_SESSION["shopping_cart"][0] = $item_array;  
      }  
 }  
 if(isset($_GET["action"]))  
 {  
      if($_GET["action"] == "delete")  
      {  
           foreach($_SESSION["shopping_cart"] as $keys => $values)  
           {  
                if($values["item_id"] == $_GET["id"])  
                {  
                     unset($_SESSION["shopping_cart"][$keys]);  
                     echo '<script>alert("Item Removed")</script>';  
                     echo '<script>window.location="index.php"</script>';  
                }  
           }  
      }  
 }  	

		
	$sql = "SELECT * FROM Textbooks";
	$results = mysql_query($sql);
	
	$query2 = "SELECT * FROM Textbooks WHERE Name = 'Multicultural Education'";
	$results2 = mysql_query($query2);
	
	$query3 = "SELECT * FROM Textbooks WHERE Name = 'Biology'";
	$results3 = mysql_query($query3);
	
	$query4 = "SELECT * FROM Textbooks WHERE Name = 'Collins Atlas of the 20th Century History'";
	$results4 = mysql_query($query4);
	
	$query5 = "SELECT * FROM Textbooks WHERE Name = 'Criminal Justice Today'";
	$results5 = mysql_query($query5);
	
	$query6 = "SELECT * FROM Textbooks WHERE Name = 'Fundamentals of Thermodynamics'";
	$results6 = mysql_query($query6);
	
	$query7 = "SELECT * FROM Textbooks WHERE Name = 'Precision Engineering'";
	$results7 = mysql_query($query7);
?>