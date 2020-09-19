<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>www.mobolic world.com</title>
    <link rel="stylesheet" href="./bulma-0.8.0/css/bulma.css">


<style>
.hidden
{
  display:none
}
</style>
</head>
<body>

<div class="container">

 <nav class="navbar" role="navigation" aria-label="main navigation">
    <div class="navbar-brand">
      <a class="navbar-item" href="">
        <img src="./photos/brand.webp" width="100px" height="300px"> <h1 class="title" style="margin-left: 25px" style="font-style:unset;">GO MOBILE</h1>
        
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


  




  <div class="columns">
<div class="column">

<form method= "POST">
<input type="text" name="firstmodel"  >
<input type="text" name="secondmodel" >

<input type="submit"  name="search" value="search" onclick="display()">

<br>
<br>
</form>

<?php
if(isset($_POST['search']))
{
  require_once('config.php');
  $firstmodel=$_POST['firstmodel'];
  $secondmodel=$_POST['secondmodel'];
  $query="select * from specification where model='$firstmodel'";
  $result=mysqli_query($con,$query);
  $count=mysqli_num_rows($result);
  $query2="select * from specification where model='$secondmodel'";
  $result2=mysqli_query($con,$query2);
  $count2=mysqli_num_rows($result2);
  
  if($count==1 && $count2==1)
  {
    $row=$result->fetch_assoc();
    $row2=$result2->fetch_assoc();
  }
}

?>

<div class="hidden" id="show1">
<img src ="<?php echo $row['image']; ?>" alt="" width="300px" height="300px">
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
<strong>Review:</strong><?php
echo $row['review'];?><br>
</div>
</div>


<div class="column hidden" id="show2">
<br>
<br>
<img src ="<?php echo $row2['image']; ?>" alt="" width="300px" height="300px">
            <br>
            
            <p>

<strong>Launched:</strong>  <?php
echo $row2['launched'];?><br>
<strong>Technology:</strong>  <?php
echo $row2['technology'];?><br>
<strong>Rate:</strong>  <?php
echo $row2['rate'];?><br>
<strong>Ram:</strong>  <?php
echo $row2['ram'];?><br>
<strong>Storage:</strong>  <?php
echo $row2['storage'];?><br>
<strong>Display size:</strong>  <?php
echo $row2['displaysize'];?><br>
<strong>OS:</strong>  <?php
echo $row2['os'];?><br>
<strong>WLAN:</strong>  <?php
echo $row['wlan'];?><br>
<strong>Camera:</strong>  <?php
echo $row2['camera'];?><br>
<strong>Battery:</strong>  <?php
echo $row2['battery'];?><br>
<strong>Colours:</strong>  <?php
echo $row2['colours'];?><br>
<strong>Dimensions:</strong>  <?php
echo $row2['dimensions'];?><br>
<strong>Bluetooth:</strong>  <?php
echo $row2['bluetooth'];?><br>
<strong>Special feature:</strong>  <?php
echo $row2['specialfeature'];?><br>
<strong>Review:</strong>  <?php
echo $row2['review'];?><br>
</div>
</div>

<script>

<?php
if(isset($_POST['search']))

{?>
  let firstphone=document.getElementById("show1");
  let secondphone=document.getElementById("show2");
  firstphone.classList.remove("hidden");
  secondphone.classList.remove("hidden");
  <?php
}
?>
</script>

</body>
</html>
