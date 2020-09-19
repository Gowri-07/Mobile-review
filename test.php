<?php
session_start();
require_once("config.php");
echo $_SESSION['username'];
echo $_SESSION['dname'];
$query="select * from user_login";
$result=mysqli_query($con,$query);
$count=mysqli_num_rows($result);
echo $count;
while($row=$result->fetch_assoc()){

    echo implode(" ",$row);
    
    echo "<br>";
}


// while($count>0){
// $row=$result->fetch_assoc();
 
// $count=$count-1;
// }

?>