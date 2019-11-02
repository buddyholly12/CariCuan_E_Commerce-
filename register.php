 <?php include('functions.php') ?>
 <!DOCTYPE html>
 <html>
 <head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">
  <link href="css/footer.css" rel="stylesheet">
  <link href="css/Parallax.css" rel="stylesheet">
  <link href="css/data.css" rel="stylesheet">
   <title>Register here </title>
 </head>
 <body class="bg-dark">
  
  
<div class="container">
<div class="row justify-content-center">
                    <div class="col-md-5">
                        <div class="card">
                            <div class="card-header" style="text-align: center; color: white; background-color:blue; ">Register</div>
                            <div class="card-body">

                                <form class="form-horizontal" method="post" action="register.php">
                                    <div class="form-group">
                                        <label for="email" class="cols-sm-2 control-label">Your Email</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                                <input type="email" name="email" value="<?php echo $email; ?>" " placeholder="Email" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="username" class="cols-sm-2 control-label">Username</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                               <input type="text" name="username" value="<?php echo $username; ?>" " placeholder="Username" required="required">

                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="password" class="cols-sm-2 control-label">Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                               <input type="password" name="password_1" " placeholder="Password" required="required">
                                            </div>
                                        </div>
                                    </div>
                                    <div class="form-group">
                                        <label for="confirm" class="cols-sm-2 control-label">Confirm Password</label>
                                        <div class="cols-sm-10">
                                            <div class="input-group">
                                               <input type="password" name="password_2" " placeholder="Password" required="required">
                                            </div>
                                        </div>
                                    </div>
                             
                                        <button type="submit" class="btn btn-primary btn-block" name="register_btn">Register</button>
                                    
                                    <div class="login-register">
                                       Already a member? <a href="login.php">Sign in</a>
                                    </div>
                                </form>
                            </div>

                        </div>
                    </div>
                </div> 






</body>
 </html>