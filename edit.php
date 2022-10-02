<?php  
 $con = mysqli_connect("localhost", "root", "", "db");  

 $id = $_POST["id"];  
 $mail = $_POST["mail"];  
 $password = $_POST["password"];  
 
//  $sel = " UPDATE users SET $mail = '".$mail."' , $password = '".$password."' WHERE id='".$id."' ";  

$sel = " UPDATE users SET mail = '$mail' , password = '$password' WHERE id='$id' "; 


 mysqli_query($con, $sel);

 ?>