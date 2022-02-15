<?php
       $connect=mysqli_connect("localhost","root","","e_classe_db");
       $delete="DELETE FROM `course` WHERE id='$_GET[id]'" ; 
       $query=mysqli_query( $connect,$delete);
        header('location:course.php'); 