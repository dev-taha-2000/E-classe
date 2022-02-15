            <?php 

            $connect=mysqli_connect("localhost","root","","e_classe_db");  
           
                $query="DELETE FROM `student` WHERE id='".$_GET['id']."'";        
               if( mysqli_query( $connect,$query)){
                  header("location:student.php"); 
               }else{  
                echo "error ".mysqli_error($connect);
               } 
               mysqli_close( $connect); 
 
            ?>    
        <?php
        
             
        ?>