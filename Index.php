<?php 
  include('functions.php');

  if (!isLoggedIn()) {
    $_SESSION['msg'] = "You must log in first";
    header('location: login.php');
  }
?>

<!DOCTYPE html>
<html>
<head>

  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">

  <title>CariCuan</title>

  <!-- Bootstrap core CSS -->
  <link href="vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

  <!-- Custom styles for this template -->
  <link href="css/shop-homepage.css" rel="stylesheet">

</head>
<body>
<!--  navigation -->
 <nav class="navbar navbar-expand-lg navbar-light fixed-top" style="background-color: #e3f2fd;">
    <div class="container">
      <a class="navbar-brand" href="#">CariCuan</a>
      <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
      </button>
      <div class="collapse navbar-collapse" id="navbarResponsive">
        <ul class="navbar-nav ml-auto">
          <li class="nav-item active">
            <a class="nav-link" href="#">Home
              <span class="sr-only">(current)</span>
            </a>
          </li>
                    <li class="nav-item active">
  
            <a class="nav-link active" href="Index.php?logout='1'">Logout</a>
          </li>
        </ul>
     </div>
 </div>
</nav>
<div class="row justify-content-center">
<div class="col-md-4">
<div class="card">
  <h5 class="card-header text-center"> <?php  if (isset($_SESSION['user'])) : ?>
<strong><?php echo $_SESSION['user']['Username']; ?></strong> <?php endif ?>
</h5>
  <div class="card-body">
   <ul class="nav nav-pills mb-3" id="pills-tab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="pills-home-tab" data-toggle="pill" href="#pills-home" role="tab" aria-controls="pills-home" aria-selected="true">Home</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-profile-tab" data-toggle="pill" href="#pills-profile" role="tab" aria-controls="pills-profile" aria-selected="false">History</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="pills-contact-tab" data-toggle="pill" href="#pills-contact" role="tab" aria-controls="pills-contact" aria-selected="false">Tables</a>
  </li>
</ul>
<div class="tab-content" id="pills-tabContent">
  <div class="tab-pane fade show active" id="pills-home" role="tabpanel" aria-labelledby="pills-home-tab">
     <form>
    <div class="form-group">
    <label for="formGroupExampleInput">Admin controller</label>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="Nama" ><br>
    <input type="text" class="form-control" id="formGroupExampleInput" placeholder="email"><br>
    <input type="password" class="form-control" id="formGroupExampleInput" placeholder="password"><br>
 	<input type="password" class="form-control" id="formGroupExampleInput" placeholder="Confirm password"><br>

  <label> User Role</label>
   <div class="col-sm-10">
        <div class="form-check">
          <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Admin" checked>
          <label class="form-check-label" for="gridRadios1">
          Administrator Privillege 
          </label>
        </div>
  <div class="form-check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Admin" checked>
          <label class="form-check-label" for="gridRadios1">
          User Privillege 
          </label>
  </div>
 <div class="form-check">
  <input class="form-check-input" type="radio" name="gridRadios" id="gridRadios1" value="Admin" checked>
          <label class="form-check-label" for="gridRadios1">
          Seller Privillege 
          </label>
</div>
</div>
    </form>

<br>
<button type="button" class="btn btn-primary ">Create Account </button>

  </div>
  </div>
  <div class="tab-pane fade" id="pills-profile" role="tabpanel" aria-labelledby="pills-profile-tab">...</div>
  <div class="tab-pane fade" id="pills-contact" role="tabpanel" aria-labelledby="pills-contact-tab">...</div>
</div>
  </div>
</div>
</div>
</div>








   <!-- Bootstrap core JavaScript-->
  <script src="vendor/jquery/jquery.min.js"></script>
  <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script>

  <!-- Core plugin JavaScript-->
  <script src="vendor/jquery-easing/jquery.easing.min.js"></script>

</body>
</html>