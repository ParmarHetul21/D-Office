    <!-- header -->
<?php
    include("./designs/header.php");  
?>
<script src="../js/emplist.js"></script>        
<script>
    $("#l_table").ready(employees);
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
                    <span class="card-title"><strong>Employee List</strong></span>            
                </div>
                <div class="input-field col s6 l4 offset-l8 ">
                    <i class="material-icons prefix" style="color:#00695c;">search</i>
                    <input type="text" id="employee_search">
                    <label>Search</label> 
                </div> 
            <div class="card-content">
                <!-- table -->
            <table class="highlight responsive-table" id="l_table">
                <thead>
                <tr>
                <th>Join Date</th>
                <th>Post</th>
                <th>Name</th>
                <th>Mobile</th>
                <th>Works</th>
                </tr>
                </thead>

                <tbody id="pp_list">
                <tr>
                <td>[[JoinDate]]</td>
                <td>[[Qualification]]</td>
                <td>[[FullName]]</td>
                <td>[[MobileNo]]</td>
                <td>[[WorkCount]]</td>
                </tr>
                <input type="hidden" name="eid" id="eid" value="`[[EmployeeID]]`">
                </tbody>
            </table>
            </div>

    <!-- card close -->
    </div>
    </div>
<!-- Body Close -->
<div class="row"></div>
</div>
</div>
<div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>