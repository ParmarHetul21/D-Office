<?php
    session_start();
    if (!isset($_SESSION["userid"]))
    {
        header("Location: ../admin/admin_login.php");
        exit();
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admin</title>
    <!-- CSS  -->
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/init.js"></script>
    <script src="../js/addcategories.js"></script>
    <script src="../js/jquery.miranda.js"></script>
    <script src="../js/customer.js"></script>
    <script src="../js/employee.js"></script>
    <script src="../js/empprofile.js"></script>
    <script src="../js/addwork.js"></script>
    <script src="../js/status.js"></script>
    <script src="../js/chk_email.js"></script>
    <script src="../js/emplist.js"></script>
</head>
<body>
<nav class="teal darken-3" role="navigation">
  <div class="nav-wrapper container"><a id="logo-container" href="../admin/index.php" class="brand-logo"><img class="responsive-img" style="max-height:60px;" src="../images/logo.png" alt="">
  </a>
      <ul class="right hide-on-med-and-down">
          <li><a href="../admin/index.php">Dashboard</a></li>
          <li><a class="dropdown-trigger white-text" href="#" data-target="employee_dropdown">Employees</a></li>
            <ul id='employee_dropdown' class='dropdown-content'>
              <li><a href="add_employee.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Employee</a></li>
              <li><a href="employee_list.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Employee List</a></li>
            </ul>
          <li><a class="dropdown-trigger white-text" href="#!" data-target="customer_dropdown">Customer</a></li>
            <ul id='customer_dropdown' class='dropdown-content'>
              <!-- <li><a href="add_customer.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Customer</a></li> -->
              <li><a href="customer_list.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Customer List</a></li>
            </ul>
          <li><a class="dropdown-trigger white-text" href="#!" data-target="category_dropdown">Category</a></li>
            <ul id='category_dropdown' class='dropdown-content'>
              <li><a href="add_category.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Category</a></li>
              <li><a href="category_list.php" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Category List</a></li>
            </ul>
          <li><a href="#">Notification</a></li>
          <li><a href="./logout.php">Logout</a></li>
      </ul>
      <ul id="nav-mobile" class="sidenav" style="background-color:#00695c;">
        <li><a href="../admin/index.php"style="color:white">Dashboard</a></li>
        <li><a class="dropdown-trigger white-text" href="#" data-target="dropdown1" data-beloworigin="true">Employees</a></li>
          <ul id='dropdown1' class='dropdown-content'>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Employee</a></li>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Employee List</a></li>
          </ul>
        <li><a class="dropdown-trigger white-text" href="#!" data-target="dropdown2">Customer</a></li>
          <ul id='dropdown2' class='dropdown-content'>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Customer</a></li>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Customer List</a></li>
          </ul>
        <li><a class="dropdown-trigger white-text" href="#!" data-target="dropdown3">Category</a></li>
          <ul id='dropdown3' class='dropdown-content'>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">person_add</i>Add Category</a></li>
            <li><a href="#!" class="teal-text text-darken-3"><i class="material-icons" style="color:#00695c;">list</i>Category List</a></li>
          </ul>
        <li><a href="#" style="color:white">Notification</a></li>
        <li><a href="./logout.php" style="color:white">Logout</a></li>
      </ul>
      <a href="#" data-target="nav-mobile" class="sidenav-trigger"><i class="material-icons">menu</i></a>
      </div>
      </nav>

