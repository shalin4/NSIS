<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta name="description" content="">
  <meta name="author" content="">
  <title>Rangana - Login Page</title>
  <!-- Bootstrap core CSS-->
    <link href="<?php echo base_url(); ?>vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link href="<?php echo base_url(); ?>vendor/css/sb-admin.css" rel="stylesheet">
</head>

<body class="bg-dark">
  <div class="container">
    <div class="card card-login mx-auto mt-5">
      <div class="card-header">Login</div>
      <div class="card-body">


          <?php echo validation_errors()?>
          <?php echo form_open('Login/LoginUser') ?>

          <div class="form-group">
            <label for="exampleInputEmail1">Email address</label>
            <input name="email" class="form-control" id="exampleInputEmail1" type="email" aria-describedby="emailHelp" placeholder="Enter email">
          </div>
          <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input name="password" class="form-control" id="exampleInputPassword1" type="password" placeholder="Password">
          </div>

          <button class="btn btn-primary btn-block">Login</button>


          <?php echo form_close() ?>

      </div>
    </div>
  </div>

</body>

</html>
