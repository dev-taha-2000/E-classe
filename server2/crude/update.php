<?php

$connect=mysqli_connect("localhost","root","","data"); 
if(isset($_POST['submit'])){  
    $query="UPDATE `table` SET `first_name`='$_POST[first_name]',`last_name`='$_POST[last_name]',`email`='$_POST[email]' WHERE `first_name`='$_POST[first_name]'"; 
    mysqli_query( $connect,$query); 
} 

?>  
<!DOCTYPE html>  
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="style.css">
<title>update</title> 
</head>
<body>       

       <div class="login">   
                   <h3>La liste des employées</h3>   
                <form action="" method="post">            
                    <input type="text" name="first_name" placeholder="first name"><br>  
                    <input type="text" name="last_name"  placeholder="last name"><br> 
                    <input type="text" name="email"  placeholder="email"><br>   
                    <input type="submit" name="submit">  <hr> 
                  
                </form> 
                  
                <a href="index.php"><button class="insert">insert</button></a>    
                <a href="update.php"><button class="update">update</button></a>    
                <a href="select.php"><button class="select">select</button></a>     
                <a href="delete.php"><button class="delete">delete</button></a>  
       </div>
</body>
</html> 