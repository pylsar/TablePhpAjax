<?php  
 $connect = mysqli_connect("localhost", "root", "", "db");  
 $id = $_POST["id"];  
 $mail = $_POST["mail"];  
 $password = $_POST["password"];  
 $sql = " UPDATE users SET $mail = '".$mail.", $password = '".$password."' WHERE id='".$id."'";  



 ?>