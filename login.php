<?php
session_start();
require_once('config.php');

if(isset($_POST['login']))
{
   $username=$_POST['username'];
   $password=$_POST['password'];
   $query="select * from user_login where username='$username' and password='$password'";
   $result=mysqli_query($con,$query);
   $count=mysqli_num_rows($result);
   if($count==1)
   {
      
       $row=$result->fetch_assoc();
      
       if ($row['usertype']=="user")
       {
           $_SESSION['username']=$username;
           

          header("location:home.html"); 
        }
        else
        {
           header("location:admin.html");
       }
   }
   

  else 
  {
    header("location:login1.php? Invalid=INVALID USERNAME AND PASSWORD");
 }
}
else
{
    echo"not working";
}



?>
