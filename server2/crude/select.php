<?php

$connect=mysqli_connect("localhost","root","","data"); 
if(isset($_POST['submit'])){  
    $query="SELECT  `first_name`, `last_name`, `email` FROM `table` WHERE  `first_name`='$_POST[first_name]'"; 
    $result=mysqli_query( $connect,$query); 
    while($row=mysqli_fetch_array( $result)){
?>      
                 <table class="table"> 
                   <tr>
                       <td><?php echo $row['first_name']?></td>
                       <td><?php echo $row['last_name']?></td>
                       <td><?php echo $row['email']?></td>  
                   </tr>
                </table>    
    <?php            
    }
} ?> 

        


<!DOCTYPE html>
<html lang="en">
<head>
<meta charset="UTF-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
<link rel="stylesheet" href="style.css">
<title>select</title>  
</head>
<body>       

       <div class="login">   
                   <h3>La liste des employées</h3>   
                <form action="" method="post">            
                    <input type="text" name="first_name" placeholder="first name"><br>  
                    <input type="submit" name="submit">  <hr> 
                  
                </form> 
                  
                <a href="index.php"><button class="insert">insert</button></a>    
                <a href="update.php"><button class="update">update</button></a>    
                <a href="select.php"><button class="select">select</button></a>     
                <a href="delete.php"><button class="delete">delete</button></a>  
       </div>
</body>
</html>