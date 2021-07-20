<!-- header -->
<?php
    include("./designs/header.php");
?>
<!-- main -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l6 offset-l3 m8 offset-m2 s10 offset-s1">
        <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
            <div class="card-content teal darken-3 white-text">
            <span class="card-title"><strong>Add Employee</strong></span>            
            </div>
            <div class="card-content">
            <!-- form -->
                <div class="row">
                <form class="col s12" onsubmit="return false" id="employee-registeration">
                
                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color : #00695c;">local_post_office</i>
                    <input id="email" type="email" class="validate" name="email" required>
                    <label for="email" style="color : #00695c;">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix" style="color : #00695c;">lock_open</i>
                        <input id="password" type="password" class="validate" name="password" required>
                        <label for="password" style="color : #00695c;">Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix" style="color : #00695c;">lock</i>
                        <input id="confirm_password" type="password" class="validate" name="cpassword" required>
                        <label for="confirm_password" style="color : #00695c;">Confirm Password</label>
                    </div>
                </div>

                <div class="row">
                       <div class="input-field col s12 l6 offset-l3">
                         <input type="hidden" id="usselect" name="usselect" value="Employees">
                       </div>
                </div>
                
                <div class="row">
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m6 s6">
                        <button class="btn btn-flat teal darken-3 white-text waves-effect waves-dark" onclick="addEmployees()">
                            Add-Emplpyees
                          </button>
                    </div>
                </div>

                </form>
                </div>

            </div>

    <!-- card close -->
        </div>
    </div>
<!-- Body Close -->
<div class="row"></div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>