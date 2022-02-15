            <?php

            $connect=mysqli_connect("localhost","root","","data"); 
            if(isset($_POST['submit'])){  
                $query="DELETE FROM `table` WHERE first_name='$_POST[first_name]'"; 
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
           <title>Delete</title> 
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