<!-- header -->
<?php
    include("./designs/header.php");
    $cid = $_REQUEST['cid1'];
    $id = $_SESSION['UserID'];
    ?>
<script src="../js/status.js"></script>
<script>
    $("#status_table").ready(fetchstatus);
    $("#employee_table").ready(fetpending);
    $("#com_table").ready(fetchcompelete); 
</script>
<script>
    var count=0;
        $("#pen").dblclick(function(){
            count++;    
                $(this).text(count);
                    alert(count);
                         });
</script>
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
                        <li class="active">
                        <div class="collapsible-header"><i class="material-icons">assignment</i>All Work</div>
                        <div class="collapsible-body">
                        <table class="highlight responsive-table" id="status_table">
                            <thead>
                            <tr>
                                <th>Date</th>
                                <th>Category</th>
                                <th>Charge</th>
                                <th>Paid Amount</th>
                                <th>Due Amount</th>
                                <th>Employee Name</th>
                                <th>Current Stauts</th>
                                <th>Action</th>
                                </tr>
                            </thead>

                            <tbody id="disp_list">
                            <tr>
                                <td>[[WorkTakenOn]]</td>
                                <td>[[CategoryName]]</td>
                                <td>[[TotalCharges]]</td>
                                <td>[[PaidAmount]]</td>
                                <td>[[DueAmount]]</td>
                                <td>[[FullName]]</td>
                                <td>[[WorkStatus]]</td>
                                <!-- Action Button -->
                                <td class="of">
                                    <input type="hidden" id="cid1" value="<?=$cid?>"> 
                                    <input type="hidden" id="id1"  value="<?=$id?>" >                                
                                    [[Button]]
                                </td>
                            </tr>

                            </tbody>
                        </table>
                        </div>
                        </li>
                        <li>
                        <div class="collapsible-header"><i class="material-icons">assignment_late</i>Pending</div>
                        <div class="collapsible-body">
                        <form onsubmit="return false" id="employee_table">
                        <table class="highlight responsive-table" id="employee_table">
                            <thead>
                            <tr>
                            <th>Date</th>
                            <th>Category</th>
                            <th>Charge</th>
                            <th>Paid Amount</th>
                            <th>Due Amount</th>
                            <th>Current Status</th>
                            <th>Action</th>
                            </tr>
                            </thead>

                            <tbody id="p_list">
                            <tr>
                            <td>[[WorkTakenOn]] </td>
                            <td>[[CategoryName]]</td>
                            <td>[[TotalCharges]]</td>
                            <td>[[PaidAmount]]  </td>
                            <td>[[DueAmount]]   </td>
                            <td>[[WorkStatus]]  </td>
                            <!-- Action Button -->
                            <td>
                            <input type="hidden" name="id" id="cid" value="<?=$cid?>">
                            [[ButtonPending]]
                            </td>
                            </tr>
                            </tbody>
                        </table>
                        </form>
                        </div>
                        </li>
                        <li>
                        <div class="collapsible-header"><i class="material-icons">assignment_turned_in</i>Complete</div>
                            <div class="collapsible-body">
                                <form id="com_table" onsubmit="return false">
                                    <table class="highlight responsive-table" id="com_table">
                                        <thead>
                                            <tr>
                                                <th>Date</th>
                                                <th>Category</th>
                                                <th>Charge</th>
                                                <th>Paid Amount</th>
                                                <th>Due Amount</th>
                                                <th>Employee Name</th>
                                                <th>Current Status</th>
                                            </tr>
                                        </thead>
                                        <tbody id="s_list">
                                            <tr>
                                                <td> [[WorkTakenOn]] </td>
                                                <td> [[CategoryName]] </td>
                                                <td> [[TotalCharges]] </td>
                                                <td> [[PaidAmount]] </td>
                                                <td> [[DueAmount]] </td>
                                                <td> [[FullName]] </td>
                                                <td> [[WorkStatus]] </td>
                                            </tr>   
                                            <input type="hidden" name="id" id="cid" value="<?=$cid?>">
                                            <input type="hidden" id="id1"  value="<?=$id?>">  
                                        </tbody>
                                    </table>
                                </form>
                            </div>
                        </li>
                    </ul>
                </div>
    <!-- card close -->
            </div>
        </div>
<!-- Body Close -->
</div>
<div class="row"></div>
<div class="row"></div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>