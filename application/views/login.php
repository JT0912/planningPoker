<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" media="screen" title="no title">
  </head>
  <body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
        <div class="topnav">
          <a href="<?php echo site_url();?>/User/index">Home</a>
          <a href="<?php echo site_url();?>/Welcome/planningPoker">Planning Poker</a>
          <a href="<?php echo site_url();?>/Welcome/contactUS">Contact</a>
          <a href="">About</a>
        </div>
<<<<<<< HEAD
    <br><br><br><br><br><br><br><br>
=======
<<<<<<< HEAD
    <br><br><br><br><br><br><br><br>
=======
<<<<<<< HEAD
    <br><br><br><br><br><br><br><br>
=======
<<<<<<< HEAD
    <br><br><br><br><br><br><br><br>
=======
<<<<<<< HEAD
    <br><br><br><br><br><br><br><br>
=======
    <br><br><br><br><br><br><br><br><br><br>
>>>>>>> 9e5fae9b3cc288923111468f65a7fa6848130823
>>>>>>> cea6fd95e8e7b0d05e6424cf3022d475baf048bd
>>>>>>> 98ac56971342fa7d27480f5573b2525e5674e780
>>>>>>> 6f1df0aead34c41751e67dfdca80a61bcb479876
>>>>>>> 1de051c77295534e73a37d80059ba2a0e130395d
    <div align="center" class="container">
    <div class="row">
        <div class="col-md-4 col-md-offset-4">
            <div class="login-panel panel panel-success">
                <div class="panel-heading">
                    <h3 class="panel-title">Login</h3>
                </div>
                <?php
                    $success_msg= $this->session->flashdata('success_msg');
                    $error_msg= $this->session->flashdata('error_msg');

                  if($success_msg)
                  {
                    ?>
                    <div class="alert alert-success">
                      <?php echo $success_msg; ?>
                    </div>
                  <?php
                  }
                  if($error_msg)
                  {
                    ?>
                    <div class="alert alert-danger">
                      <?php echo $error_msg; ?>
                    </div>
                    <?php
                  }
                  ?>
                <div class="panel-body">
                    <form role="form" method="post" action="<?php echo site_url('/User/login_user'); ?>">
                        <fieldset>
                            <div class="form-group"  >
                                <input class="form-control" placeholder="E-mail" name="user_email" type="email" autofocus>
                            </div>
                            <div class="form-group">
                                <input class="form-control" placeholder="Password" name="user_password" type="password" value="">
                            </div>
                                <input class="btn btn-lg btn-success btn-block" type="submit" value="login" name="login" >
                        </fieldset>
                    </form>
                <center><b>Not registered ?</b> <br></b><a href="<?php echo site_url('/User'); ?>">Register here</a></center><!--for centered text-->
                </div>
            </div>
        </div>
    </div>
</div>


  </body>
</html>