<?php
   
   $con = mysqli_connect('localhost', 'root', '', 'db');
   $sel = "select * from `users`";
   $result = mysqli_query($con,$sel);


      $table = '
         <thead>
            <tr>
               <th>Id</th>
               <th>FirstName</th>
               <th>LastName</th>
               <th>Mail</th>
               <th>Password</th>
               <th>Buttons</th>
            </tr>
         </thead>
         <tbody>
      ';

      while( $row = mysqli_fetch_assoc($result)){
         $id=$row['id'];
         $firstname=$row['firstname'];
         $lastname=$row['lastname'];
         $mail=$row['mail'];
         $password=$row['password'];
         $table .= '
            <tr>
               <td>'.$id.'</td>
               <td>'.$firstname.'</td>
               <td>'.$lastname.'</td>
               <td>'.$mail.'</td>
               <td>'.$password.'</td>
               <td><button>edit</button><button>delete</button></td>
            </tr>
         ';
      }
      $table .= '
         </tbody>
      ';

      echo $table;



