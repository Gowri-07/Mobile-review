<?php

 if (isset($_POST['submit']))
          {
              require_once('config.php');

              echo "inside php";
             
              $username=mysqli_escape_string($con,$_POST['username']);
              $emailid=mysqli_escape_string($con,$_POST['emailid']);
              $password=mysqli_escape_string($con,$_POST['password']);
              $confirmpassword=mysqli_escape_string($con,$_POST['confirmpassword']);
           
              $query="select * from user_login where username='$username'";
              $result=mysqli_query($con,$query);
              $count=mysqli_num_rows($result);
              if($count==1)
              {
              header("location:signup1.php? available=The username $username already exists");
              }
              else
              {
                $query="insert into user_login values ('$username','$emailid','$password','user')";
                $table=mysqli_query($con,$query); 
                
               header("location:login1.php? register=You have successfully registered");

              }    
      
          }
         
          
  ?>
