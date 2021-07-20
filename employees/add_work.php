<!-- header -->
<?php
    include("./designs/header.php");
    $cid = $_REQUEST['cid']; 
?>
<!-- main -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1" style="color:#00695c;">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Add Work</strong></span>            
                </div>
                <div class="input-field col s6 l4 offset-l8 ">
                    <i class="material-icons prefix" style="color:#00695c;">search</i>
                    <input type="text" id="customer_list">
                    <label>Search</label>  
                </div> 
            <div class="card-content">
                <!-- table -->
            <form id="work_add" onsubmit="return false">
            <table class="responsive-table">
                <thead>
                <tr>
                <th>Select Category</th>
                <th>Charge</th>
                <th>Paid Amount</th>
                <th>Comment</th>
                <th></th>
                </tr>
                </thead>
                <tbody>
                <tr>
                <td>
                <select id="work_list" name="cat">
                </select>
                </td>
                <td>
                <input placeholder="Enter Total Amount" id="total_amount" name="total_amount" type="text" class="validate" style="color:#00695c;">
                </td>
                <td>
                <input placeholder="Enter Paid Amount" id="paid_amount" name="paid_amount" type="text" class="validate" style="color:#00695c;">
                </td>
                <td>
                <input type="hidden" name="cid" value="<?=$cid?>">
                <input placeholder="Enter Comment" id="comment" name="comment" type="text" style="color:#00695c;">
                </td>
                <td>
                <button class="waves-effect waves-light btn-small" style="background-color : #00695c;" onclick="addwork()" name="action">Submit</button>
                </td>
                </tr>
                </tbody>
            </table>
            </form>
            </div>

    <!-- card close -->
    </div>
    </div>
<!-- Body Close -->
</div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>