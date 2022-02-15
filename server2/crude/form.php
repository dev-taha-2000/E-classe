
       <!DOCTYPE html>
       <html lang="en">
       <head>
           <meta charset="UTF-8">
           <meta http-equiv="X-UA-Compatible" content="IE=edge">
           <meta name="viewport" content="width=device-width, initial-scale=1.0">
           <title>Document</title> 
       </head> 
       <body>
      <?php 
                  $connect=mysqli_connect("localhost","root","","data"); 
                  if(isset($_POST['submit'])){  
                      $name=htmlspecialchars(trim(strtolower( $_POST['first_name'])));
                      $last_name=htmlspecialchars(trim(strtolower($_POST['last_name']))); 
                      $email=htmlspecialchars(trim(strtolower($_POST['email'])));   
                    
                      $query="INSERT INTO `table`(`first_name`, `last_name`, `email`) VALUES('$name','$last_name','$email')";
                      mysqli_query( $connect,$query); 
                      $save= mysqli_affected_rows($connect);  
                      if($save){
                          echo "bravoooo"; 
                      }else{ 
                           echo "khriti nta ga3";
                      }
                      mysqli_close($connect); 
                      
                  } 
          
      
      ?>      
       </body>   
       </html>
      
