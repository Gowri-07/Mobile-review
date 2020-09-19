<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Sign up </title>
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet"> -->
    <!-- <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> -->
    <!-- Bulma Version 0.8.x-->
    <!-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/login.css"> -->
    <link rel="stylesheet" href="./bulma-0.8.0/css/bulma.css">
   
</head>

<body>
    <?php require_once 'signup2.php'; ?>
    
        <div class="hero-body">
            <div class="container has-text-centered">
                <div class="column is-4 is-offset-4">
                    <h3 class="title has-text-black">Sign up</h3>
                  
             
              
              <?php 
              if(@$_GET['available']==true)
              {
                  ?>
                  <div class=" alert alert-strong text-danger text-center text-is-bold  py-3"> <?php echo $_GET['available'] ?> </div>
             <?php
              }
              ?>
                    <hr class="login-hr">
                    
                    <div class="box">
                      
                        <form action="signup2.php" onsubmit="return validatepassword()" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="username" name="username" placeholder="User name" autofocus=""  required
                                     >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="email" name="emailid" placeholder="Your Email" autofocus="" required
                                    >
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" name="password" placeholder="Your Password" id = "password" required
                                    >
                                </div>
                            </div>
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password" name=confirmpassword placeholder=" Confirm Your Password" id = "newpassword">
                                </div>
                            </div>

                          <input class="button is-info" type="submit" name="submit" value="sign up">
                                        
                        </form>
                    </div>
                   
                </div>
            </div>
        </div>
  
     <script>
        function validatepassword(){
           var password = document.getElementById("password").value;
           var newpassword =document.getElementById("newpassword").value;
            
         if(password!=newpassword)
         {
              alert ("passwords dont match");
              return false; 
         }
        } 
    </script> 
  




    
</body>

</html>










