<?php 
session_start();

?>
<!DOCTYPE html>
<html lang="en">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=UTF-8"/>
        <!-- <meta http-equiv="refresh" content="5;w3schools.com"/> -->
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1.0"/>
        <title>Doffice</title>

        <!-- CSS  -->
        
        <link href="./css/font.css" rel="stylesheet">
        <link href="./css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
        <link href="./css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    </head>
    <body>

        <!-- Navigational-Menu-Structure -->

    <nav class="teal darken-3" role="navigation">
 
            <div class="nav-wrapper container"><a id="logo-container" href="index.php" class="brand-logo"><img class="responsive-img" style="max-height:60px;" src="./images/logo.png" alt=""></a>

                <ul class="right hide-on-med-and-down">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="./about_us.php">About Us</a></li>
                    <li><a href="./contact_us.php">Contact Us</a></li>
 
                    <?php if(isset($_SESSION['UserID']))
                    {
                      echo '<li><a class="modal-trigger" href="./veiw_work.php">View Work</a></li>';
                      echo '<li><a class="modal-trigger" href="./user_profile.php">Profile</a></li>';
                      echo '<li><a class="modal-trigger" href="./logout.php">Logout</a></li>';
                    }
                    else
                    {
                      echo '<li><a class="modal-trigger" href="#login-modal">Login</a></li>';
                      echo '<li><a class="modal-trigger" href="#register-modal">Register</a></li>';
                    } ?>
              </ul>

                <ul id="nav-mobile" class="sidenav">
                    <li><a href="index.php">Home</a></li>
                    <li><a href="#">About Us</a></li>
                    <li><a href="#">Contact Us</a></li>
<?php
          if(isset($_SESSION['UserID']))
          {
              echo '<li><a class="modal-trigger" href="./veiw_work.php">View Work</a></li>';
              echo '<li><a class="modal-trigger" href="./logout.php">Logout</a></li>';
              echo '<li><a class="modal-trigger" href="./user_work.php">Profile</a></li>';
          }
          else
          {
              echo '<li><a class="modal-trigger" href="#login-modal">Login</a></li>';
              echo '<li><a class="modal-trigger" href="#register-modal">Register</a></li>';
          }
?>
                </ul>
                <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
            </div>
        </nav>
<script>

</script>

 <!-- Login Modal Structure -->

 <div id="login-modal" class="modal">
    <div class="modal-content row">
      <h4 class="col l2 offset-l5 center-align" style="color : #00695c;">Login</h4>
    </div>

    <!-- DIVIDER CLASS -->

    <div class="divider"></div>

    <!-- LOGIN FORM -->

    <form id="customer-login" onsubmit="return false">

    <div class="row">
          <div class="input-field col l6 s8 offset-l3 offset-s2">
            <i class="small material-icons prefix" style="color : #00695c;">email</i>
            <input id="lemail" type="email" class="validate" name="lemail" required>
            <label for="lemail">Email</label>
          </div>
    </div>

      <div class="row">
        <div class="input-field col l6 s8 offset-l3 offset-s2">
          <i class="small material-icons prefix" style="color : #00695c;">lock</i>
          <input id="password" type="password" class="validate" name="password" required>
          <label for="password">Password</label>
        </div>
      </div>


      <div class="row">
            <div class="input-field col l6 s8 offset-l3 offset-s2">
              <select name="usselect" required>
                <option value="" selected>User Type</option>
                <option value="Customer">Customer</option>
                <option value="Employees">Employees</option>
              </select>
              <label>User Selection</label>
            </div>
      </div>

      <div class="row">
        <div class="col l2 offset-l5 offset-s5">
          <button class="btn waves-effect waves-dark" name="login_user" onclick="user_login()">
            Login
          </button>
        </div>
      </div>
  </div>
  </form>
  </div>


  <!-- Register Modal Structure -->
    <div id="register-modal" class="modal">  
      <div class="modal-content">
        <div class="row">
              <h4 class="col-s3 offset-s3 center-align" style="color : #00695c;">
                Register
              </h4>
        </div>

      <!-- DIVIDER CLASS -->
      <div class="divider"></div>

<form id="customer-registration" onsubmit="return customer_registration()"> 
      
      <div class="row">
        <div class="input-field col s12 l6 offset-l3">
          <i class="small material-icons prefix" style="color : #00695c;">email</i>
          <input id="email" type="email" class="validate" name="remail" required>
          <label for="email">Email</label>
        </div>
      </div> 

      <div class="row">
        <div class="input-field col s12 l6 offset-l3">
        <i class="small material-icons prefix" style="color : #00695c;">lock_open</i>
          <input id="password1" type="password" class="validate" name="password" required>
          <label for="password1">Password</label>
        </div>
      </div>

      <div class="row">
            <div class="input-field col s12 l6 offset-l3">
            <i class="small material-icons prefix" style="color : #00695c;">lock</i>
              <input id="Confirmpassword" type="password" class="validate" name="Confirmpassword"> 
              <label for="Confirmpassword">Confirm Password</label>
            </div>
      </div>

      <div class="row">
            <div class="input-field col s12 l6 offset-l3">
              <input type="hidden" id="usselect" name="usselect" value="Customer" required>
            </div>
      </div>
      
      <div class="row"> 
            <div>
              <button id="btn_submit" class="btn btn-flat teal darken-4 white-text waves-effect waves-dark col l2 offset-l5 s6 offset-s3" >
                Register
              </button>
             </div>
      </div>
</form>
</div>
</div>