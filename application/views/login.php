<!--
    Created by Josh Tyra
    10/13/2018
-->
<!DOCTYPE html>
<?php echo link_tag('assets/css/homepageStyle.css'); ?>
<?php echo link_tag('assets/css/navBar.css'); ?>
<?php echo link_tag('assets/css/bootstrap.css'); ?>
<html>
  <head>
    <meta charset="utf-8">
    <title>Login</title>
  </head>
  <body class="bg" background="<?php echo base_url();?>/assets/images/Home.jpg">
        <div class="topnav">
          <a href="<?php echo site_url();?>/User/index">Home</a>
          <a href="<?php echo site_url();?>/User/planningPoker">Planning Poker</a>
          <a href="<?php echo site_url();?>/User/contactUS">Contact</a>
          <a href="<?php echo site_url();?>/User/aboutPage">About</a>
        </div>
    <br><br><br><br><br><br><br><br>
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