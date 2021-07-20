<!-- header -->
<?php
    include("./designs/header.php");
    include("./pdo_helpers.php");

  $date =  date("d-m-Y");

  $res1 =  d_n_cus($date);
  $res2 =  d_n_work($date);
  $res3 =  d_n_work_p($date);
  $res4 =  d_n_work_c($date);
  $rs5  =  d_compelete();
  $rs6  =  d_pending();
  $rs7  =  d_t_work();
  $rs8  =  payemnt();
  $rs9  =  payment_d();
  $rs12 =  payment_t();

  if(@$rs13 > 0)
  {
    $rs13 = current_payment($date);
  }
  else
  {
    $rs13 = 0;
  }
  if(@$rs14 > 0)
  {
    $rs14 = due_amount($date);
  }
  else
  {
    $rs14 = 0;
  }

?>
<script src="../js/chk_email.js"></script>
<script>
  $('#Count').ready(get_cus);
  $('#tb').ready(get_emp);
  $('#cat').ready(get_cat);
</script>
<!-- main -->
<div class="main-container teal lighten-5">

<div class="row"></div>
<div class="row"></div>
<!--Today Card -->
<div class="row" style="background-color:#ffffff; margin:2%; padding:0%;">
<div class="card teal darken-3" id="card-hover">
<span class="card-title white-text" style="padding:2%;"><strong>Today</strong></span>
</div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>New Customers</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong>
          <?=
          $res1
          ?>
          </strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./customer_list.php" style="font-size:18px; color:#ffffff;"><u>Customer List</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>New Work</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $res2 ?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Work Pending</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $res3 ?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>
   
    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Work Completed</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $res4?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Received Amount</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong>
          <?=$rs13?>
          </strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Due Amount</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong>
            <?=$rs14?>
          </strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
<!-- Today Class Close -->
</div> 
</div>
<div class="row"></div>
<!--Overall Card -->

<div class="row" style="background-color:#ffffff; margin:2%; padding:0%;">
    <div class="card teal darken-3" id="card-hover">
    <span class="card-title white-text" style="padding:2%;"><strong>Overall</strong></span>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Available Customers</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;" id="Count-Table">
          <strong id="Count">

          </strong>
          </p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./customer_list.php" style="font-size:18px; color:#ffffff;"><u>Customer List</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Total Employees</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;" id="count-tb">
            <strong id="tb">
            <!--  -->
            </strong>
          </p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View Employees</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Total Category</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;" id="cat-tb" >
            <strong id="cat">
            </strong>
          </p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./category_list.php" style="font-size:18px; color:#ffffff;"><u>View Category</u></a>
        </div>
      </div>
    </div>
   
    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Received Payment</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;">
          <strong>
          <?= $rs8 ?>
          </strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="./work_history.php" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>  
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Due Payment</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $rs9 ?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Total Payment</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $rs12?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Completed Work</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $rs5 ?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Pending Work</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $rs6 ?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>
    </div>

    <div class="col l4 s12 m6">
      <div class="card teal darken-3" id="card-hover">
        <div class="card-content white-text">
          <span class="card-title"><strong>Total Work</strong></span>
        </div>
        <div class="card-action white center-align" style="margin:0%; padding:3%;">
          <p  style="font-size:48px; margin:0%; padding:1%;"><strong><?= $rs7?></strong></p>
        </div>
        <div class="card teal darken-3 center-align">
          <a href="#" style="font-size:18px; color:#ffffff;"><u>View History</u></a>
        </div>
      </div>

      
<!-- Overall Class Close -->
</div> 
<!-- Body Close -->
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>
