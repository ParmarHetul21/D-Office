<?php
    include("./designs/header.php");
?>
<script src="../js/empprofile_a.js"></script>
<script>
    $("#custtable").ready(fetchemp1);
</script> 
<div class="main-container teal lighten-5">
    <div class="row"></div>
    <div class="row"></div>
    <div class="row"></div>

        <!-- card -->
        <div class="row">

            <div class="col l10 offset-l1 m10 offset-m1 s10 offset-s1">

                <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                    <div class="card-content teal darken-3 white-text">
                        <span class="card-title"><strong>Customer List</strong></span>            
                    </div>
                    <div class="input-field col s6 l4 offset-l8 ">
                        <i class="material-icons prefix" style="color:#00695c;">search</i>
                        <input type="text" id="customer_list">
                        <label>Search</label>  
                    </div>
                    <div class="card-content">
                        <table id="custtable" class="highlight responsive-table">
                            <thead>
                                <tr>
                                    <th>Join Date</th>
                                    <th>File Number</th>
                                    <th>Full Name</th>
                                    <th>Mobile Number</th>
                                    <th>pan Number</th>
                                </tr>
                            </thead>

                            <tbody id="custlist">
                            </tbody>
                        </table>
                    </div>
                </div>    
            </div>
        </div>    
</div>
<?php
include("./designs/footer.php");
?>