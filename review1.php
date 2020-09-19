<?php
session_start();
if (isset($_POST['submit']))
{   
    require_once('config.php');
  $comments=mysqli_escape_string($con,$_POST['comments']);
  $rating=mysqli_escape_string($con,$_POST['rating']);
  $comments=trim($comments);
  $query="insert into comments values ('$_SESSION[username]', '$_SESSION[dname]','$comments','$rating')";
  $table=mysqli_query($con,$query); 
  header("location:review.php?dname=$_SESSION[dname]");
            }






          
?>
