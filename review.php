<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./bulma-0.8.0/css/bulma.css">
</head>
<body>
<?php

session_start();
require_once('config.php');
$name=$_GET['dname'] ;
$_SESSION['dname']=$name;
$query="select * from specification where model='$name'";
$result=mysqli_query($con,$query);
$row=$result->fetch_assoc();

?>
   
    <div class="container">
       <nav class="navbar" role="navigation" aria-label="main navigation">
        <div class="navbar-brand">
          <a class="navbar-item" href="">
            <img src="./photos/brand.webp" width="75px" height="150px"> <h1 class="title" style="margin-left: 25px" style="font-style:unset;">GO MOBILE</h1>
            
          </a>
      
          <a role="button" class="navbar-burger burger" aria-label="menu" aria-expanded="false" data-target="navbarBasicExample">
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
            <span aria-hidden="true"></span>
          </a>
        </div>
      
        <div id="navbarBasicExample" class="navbar-menu">
          <div class="navbar-start">
            <a class="navbar-item">
              Home
            </a>
      <a href=".//contact us.html">
            <a class="navbar-item">
              contact us
            </a>
          </a>
      
            <div class="navbar-item has-dropdown is-hoverable">
              <a class="navbar-link">
                More
              </a>
      
              <div class="navbar-dropdown">
                <a class="navbar-item">
                  About
                </a>
                <a href="contact us.html">
                <a class="navbar-item">
                  Contact us
                  </a>
                </a>
                <hr class="navbar-divider">
                <a class="navbar-item">
                  Report an issue
                </a>
              </div>
            </div>
          </div>
      
          <div class="navbar-end">
            <div class="navbar-item">
              <div class="buttons">
    
                
    
                <a href="./login" class="button is-light">Log out</a>
               
              </div>
            </div> 
          </div>
        </div>
      </nav>
    
      
      <br>
      <br>
      
     
         

       <div class="container">
        <p class="title is-size-1 has-text-centered"> <?php echo $_GET['dname']  ?> </p>
<div class="columns">
    <div class="column"> 
      
        <img src ="<?php echo $row['image']; ?>" alt="" width="350px">
    </div>
   <div class="column">
       <br>
       <br>
       <br>
       
        <p>

            <strong>Launched:</strong>  <?php
            echo $row['launched'];?><br>
            <strong>Technology:</strong>  <?php
            echo $row['technology'];?><br>
            <strong>Rate:</strong>  <?php
            echo $row['rate'];?><br>
            <strong>Ram:</strong>  <?php
            echo $row['ram'];?><br>
            <strong>Storage:</strong>  <?php
            echo $row['storage'];?><br>
            <strong>Display size:</strong>  <?php
            echo $row['displaysize'];?><br>
            <strong>OS:</strong>  <?php
            echo $row['os'];?><br>
            <strong>WLAN:</strong>  <?php
            echo $row['wlan'];?><br>
            <strong>Camera:</strong>  <?php
            echo $row['camera'];?><br>
            <strong>Battery:</strong>  <?php
            echo $row['battery'];?><br>
            <strong>Colours:</strong>  <?php
            echo $row['colours'];?><br>
            <strong>Dimensions:</strong>  <?php
            echo $row['dimensions'];?><br>
            <strong>Bluetooth:</strong>  <?php
            echo $row['bluetooth'];?><br>
            <strong>Special feature:</strong>  <?php
            echo $row['specialfeature'];?><br>
            

            
        </p>
           
            
   </div>
  
</div>
<div class="columns">
   
    <div class="column is-offset-2">
        <h1  class="title is-size-4">
            Review
         </h1>
        <?php
        echo $row['review'];
        ?>
    </div>
   
    
</div>
            
            <br>
            </div>

        
             

              
              
              
<p >

  <?php


require_once('config.php');
$name=$_GET['dname'] ;

$query="select * from comments where model='$name'";
$result=mysqli_query($con,$query);

while($count=$result->fetch_assoc())
{
  echo '<div class="columns">';
  echo '<div class="column  is-offset-2">';
  
echo $count['username'] ; echo ":";
echo "<br>";
echo "<br>";


 


 echo $count['comments'];
 echo"</div>";
 echo '<div class="column  is-offset-2">';
 echo '<img src="'.$count['rating']. '" style="width: 60px;" >';
 echo"</div>";
 echo"</div>";

 echo"<br>";
}
 
 $likequery="select rating from comments where rating='./photos/afterlike.jpeg'";
 $dislikequery="select rating from comments where rating='./photos/afterdislike.jpeg'";
 $likecount=mysqli_query($con,$likequery);
 $dislikecount=mysqli_query($con,$dislikequery);
 $count1=mysqli_num_rows($likecount);
 $count2=mysqli_num_rows($dislikecount);
 
 $percentage=$count1/($count1+$count2)*100;
 
 echo '<div class="columns">';
 echo '<div class="column  is-offset-2">';
  echo '<p>'. round($percentage).' % has liked this product </p></div> </div>'; 




  ?>


</p>





           

              <div class="container">
                <div class="columns">
                  <div class="column"></div>
                  <div class="column">
    <form action="review1.php" method="POST" id="myform">
    

<textarea name="comments" id="comments" cols="60" rows="10" >


</textarea>
  


  <input type="hidden" name="rating" id="rating">
  <img src="./photos/like.jpeg" alt="" id="up" style="width: 60px ;" onclick="like()"> 
<img src="./photos/dislike.jpeg" alt="" id="down" style="width: 60px;" onclick="dislike()"> 
<input type="submit" value="SUBMIT" name="submit" onclick="popup()"> 


       

</form> 
</div>
<div class="column"></div>
</div>
</div>
<!-- <button   onclick="popup()">SUBMIT</button> -->
<script>
  function like() {
    let thumbsup=document.getElementById("up");
       thumbsup.setAttribute("src","./photos/afterlike.jpeg")   
       let thumbsdown=document.getElementById("down");
       thumbsdown.setAttribute("src","./photos/dislike.jpeg")  
       let rate=document.getElementById("rating")
       rate.setAttribute("value","./photos/afterlike.jpeg")
       
     
  }
  function dislike() {
    let thumbsdown=document.getElementById("down");
       thumbsdown.setAttribute("src","./photos/afterdislike.jpeg")  
       let thumbsup=document.getElementById("up");
       thumbsup.setAttribute("src","./photos/like.jpeg")   
       let rate=document.getElementById("rating")
       rate.setAttribute("value","./photos/afterdislike.jpeg")

  }
  function popup() {
    
    alert ("Your comment will be added");
  // document.getElementById("myform").submit();
    
  }
  </script>
              

      
</body>
</html>