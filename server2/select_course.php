<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
    <title>Document</title>
</head>
<body>
<?php  
            $connect=mysqli_connect("localhost","root","","e_classe_db");
            $select="SELECT *from course";
            $query=mysqli_query($connect,$select); 
            ?>    
            <table class="table">  
                <tr>  
                    <th>nome</th>
                    <th>prenom</th>
                    <th>ville</th> 
                    <th>email</th>
                    <th>suprimer</th> 
                    <th>modifier</th>
                </tr>
              <?php
              
              foreach( $query as $result){ 
            ?>      
                  <tr>
                      <?php   $result['id'] ?> 
                      <td><?php echo $result['nom']?></td> 
                      <td><?php echo $result['prenom']?></td>    
                      <td><?php echo $result['ville']?></td>
                      <td><?php echo $result['email']?></td>
                     <td><a href="suprimer_course.php? id=<?php echo $result['id'] ?>">suprimer</a></td>   
                      <td><a href="modifier_course.php? id=<?php echo $result['id'] ?>">modifier</a></td>       
                  </tr>  
            <?php  }?>     
              
            </table>   
</body>
</html>



