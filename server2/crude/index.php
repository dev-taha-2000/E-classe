     <?php
              $connect=mysqli_connect("localhost","root","","data"); 
              if(isset($_POST['submit'])){  
                  $name=htmlspecialchars(trim(strtolower( $_POST['first_name']))); 
                  $last_name=htmlspecialchars(trim(strtolower($_POST['last_name']))); 
                  $email=htmlspecialchars(trim(strtolower($_POST['email'])));   
                
                  $msql="INSERT INTO `table`(`first_name`, `last_name`, `email`) VALUES('$name','$last_name','$email')";
                  mysqli_query( $connect,$msql); 
              } 
     ?>
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <link rel="stylesheet" href="style.css">
           <title>insert</title> 
       </head>
       <body>          
                   <div class="login">   
                               <h3>La liste des employées</h3>   
                            <form action="<?php echo $_SERVER['PHP_SELF']?>" method="post">            
                                <input type="text" name="first_name" placeholder="first name"><br>  
                                <input type="text" name="last_name"  placeholder="last name"><br> 
                                <input type="text" name="email"  placeholder="email"><br>   
                                <input type="submit" name="submit">  <hr> 
                              
                            </form> 
                              
                            <a href="index.php"><button class="insert" >insert</button></a>    
                            <a href="update.php"><button class="update" >update</button></a>    
                            <a href="select.php"> <button class="select" >select</button></a>     
                            <a href="delete.php"><button class="delete" >delete</button></a>     
                   </div>
       </body>
       </html>