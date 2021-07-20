<!-- header -->
<?php
    require_once("./pdo_helpers.php");
    include("./designs/header.php");
    $id = $_SESSION['UserID'];
    

    function get_customer_id($id)  {
        $dbh  = connection();
        $sql  = "SELECT CustomerID FROM customers WHERE UserID=?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id);
        $stmt->execute($parameters);
        $res = $stmt->rowCount();
        if($res > 0) {
            $result = $stmt->fetch()[0];
            return $result;
        } 
    }

    
    // All Work to add
    $cid = get_customer_id($id);
    
    $result = get_cus($cid);

    // All Work to Pending
    $cid = get_customer_id($id);
    $result1 = get_cus_pending($cid);
    //All Work Compeleted 
    $cid = get_customer_id($id);
    $result2 = get_cus_compelete($cid);
    

?>
<!-- main -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Work History</strong></span>            
                </div> 
                <div class="row"></div>
                <div class="card-content" style="color : #00695c;">
                    <!-- Work History Content Will be Here -->
                    <ul class="collapsible">
                        <li>
                            <div class="collapsible-header"><i class="material-icons">assignment</i>All Work</div>
                            <div class="collapsible-body">
                                <table class="highlight responsive-table" id="ck_tb">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>Charge</th>
                                            <th>Paid Amount</th>
                                            <th>Due Amount</th>
                                            <th>Status</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                        <?php foreach ($result as $row) { ?>
                                            <?php
                                                $status = "Processing";
                                                if ($row["WorkStatus"] == 1)
                                                    $status = "Pending";
                                                elseif ($row["WorkStatus"] == 2)
                                                    $status = "Complete";
                                            ?>
                                            <tr>
                                                <td><?= $row["WorkTakenOn"] ?></td>
                                                <td><?= $row["CategoryName"] ?></td>
                                                <td><?= $row["TotalCharges"] ?></td>
                                                <td><?= $row["PaidAmount"] ?></td>
                                                <td><?= $row["DueAmount"] ?></td>
                                                <td><?= $status ?></td>
                                            </tr>
                                        <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <!-- 2nd <LI> Starts -->
                        <li>
                            <div class="collapsible-header"><i class="material-icons">assignment_late</i>Pending</div>
                            <div class="collapsible-body">
                                <table class="highlight responsive-table" id="employee_table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>Charge</th>
                                            <th>Paid Amount</th>
                                            <th>Due Amount</th>
                                            <th>Amount</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php try{
                                     foreach ($result1 as $row1) 
                                     { ?>
                                    <?php
                                        $status = "Processing";
                                        if ($row1["WorkStatus"] == 1)
                                            $status = "Pending";
                                        elseif ($row1["WorkStatus"] == 2)
                                            $status = "Complete";
                                    ?>
                                        <tr>
                                            <td> <?= $row1["WorkTakenOn"]?>  </td>
                                            <td> <?= $row1["CategoryName"]?> </td>
                                            <td> <?= $row1["TotalCharges"]?> </td>
                                            <td> <?= $row1["PaidAmount"]?>   </td>
                                            <td> <?= $row1["DueAmount"]?>    </td>
                                            <td> <?= $status ?>              </td>
                                        </tr>              
                                    <?php }
                                    }
                                    catch(exception $e){
                                    } ?>          
                                    </tbody>
                                </table>
                            </div>
                        </li>
                        <!-- 3rd li starts -->
                        <li>
                            <div class="collapsible-header"><i class="material-icons">assignment_turned_in</i>Complete</div>
                            <div class="collapsible-body">
                                <table class="highlight responsive-table" id="employee_table">
                                    <thead>
                                        <tr>
                                            <th>Date</th>
                                            <th>Category</th>
                                            <th>Charge</th>
                                            <th>Paid Amount</th>
                                            <th>Due Amount</th>
                                            <th>Status</th>
                                            <th>Employee Name</th>
                                        </tr>
                                    </thead>
                                    <tbody>
                                    <?php 
                                    foreach ($result2 as $row2) { ?>
                                        <?php
                                        $status = "Processing";
                                        if ($row2["WorkStatus"] == 1)
                                            $status = "Pending";
                                        elseif ($row2["WorkStatus"] == 2)
                                            $status = "Complete";
                                    ?>
                                        <tr>
                                        <td>  <?= $row2["WorkTakenOn"]?>  </td>
                                        <td>  <?= $row2["CategoryName"]?> </td>
                                        <td>  <?= $row2["TotalCharges"]?> </td>
                                        <td>  <?= $row2["PaidAmount"]?>   </td>
                                        <td>  <?= $row2["DueAmount"]?>    </td>
                                        <td>  <?= $status ?>              </td>
                                        <td>  <?= $row2["FullName"]?>     </td>
                                        </tr>                            
                                    <?php } ?>
                                    </tbody>
                                </table>
                            </div>
                        </li>
                    </ul>            
                </div>
    <!-- card close -->
            </div>
        </div>
    </div>
<!-- Body Close -->
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>