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
            <span class="card-title"><strong>Add Customer</strong></span>            
            </div>
            <div class="card-content">
            <!-- form -->
                <div class="row">
                <form class="col s12">
                <div class="row">
                    <div class="input-field col s6">
                    <i class="material-icons prefix" style="color : #00695c;">account_circle</i>
                    <input id="icon_prefix" type="text" class="validate">
                    <label for="icon_prefix" style="color : #00695c;">First Name</label>
                    </div>
                    <div class="input-field col s6">
                    <i class="material-icons prefix" style="color : #00695c;">account_circle</i>
                    <input id="icon_telephone" type="tel" class="validate">
                    <label for="icon_telephone" style="color : #00695c;">Last Name</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color : #00695c;">local_post_office</i>
                    <input id="email" type="email" class="validate">
                    <label for="email" style="color : #00695c;">Email</label>
                    <span class="helper-text" data-error="wrong" data-success="right"></span>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                    <i class="material-icons prefix" style="color : #00695c;">phone</i>
                    <input id="email" type="email" class="validate">
                    <label for="email" style="color : #00695c;">Mobile Number</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix" style="color : #00695c;">lock_open</i>
                        <input id="password" type="password" class="validate">
                        <label for="password" style="color : #00695c;">Password</label>
                    </div>
                </div>

                <div class="row">
                    <div class="input-field col s12">
                        <i class="material-icons prefix" style="color : #00695c;">lock</i>
                        <input id="confirm_password" type="password" class="validate">
                        <label for="confirm_password" style="color : #00695c;">Confirm Password</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m6 s6">
                        <a class="waves-effect waves-light btn" style="background-color : #00695c;">Add Customer</a>
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