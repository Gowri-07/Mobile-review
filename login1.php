<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Login</title>
    <link rel="stylesheet" href="./bulma-0.8.0/css/bulma.css">
    <!-- <link rel="stylesheet" href="bulma-0.8.0css/css"> -->
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Questrial&display=swap" rel="stylesheet"> -->
    
    <!-- <link rel="stylesheet" href="https://unpkg.com/bulma@0.8.0/css/bulma.min.css" /> -->
    <!-- <link rel="stylesheet" type="text/css" href="../css/login.css"> -->
</head>
<body>
<?php require_once 'signup2.php'; ?>
  <div class="container has-text-centered">
  <div class="column is-4 is-offset-4">
        <h3 class="title has-text-black">Login</h3>

                   
        <?php 
              if(@$_GET['Invalid']==true)
              {
                  ?>
                  <div > <?php echo $_GET['Invalid'] ?> </div>
             <?php
              }
              ?>
              
              <?php 
              if(@$_GET['register']==true)
              {
                  ?>
                  <div> <?php echo $_GET['register'] ?> </div>
             <?php
              }
              ?>
                            




                   
                    <div class="box">
                      
                        <form action="login.php" method="POST">
                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="name" name="username" placeholder="Your Username" autofocus="" required
                                    >
                         
                                </div>
                            </div>

                            <div class="field">
                                <div class="control">
                                    <input class="input is-large" type="password"  name="password"  placeholder="Your Password" autofocus="" required>
                                </div>
                            </div>
                            
                            <button class="button is-block is-info is-large is-fullwidth" name="login">Login <i class="fa fa-sign-in" aria-hidden="true"></i></button>
                        </form>
                    </div>
                    <p class="has-text-black">
                        <a href="./signup1.php"> Have you Signed Up yet?</a> &nbsp;·&nbsp;
                       
                    </p>
                    </div>
</div>
              
    </form>
</body>

</html>