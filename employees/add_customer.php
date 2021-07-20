<!-- header -->
<?php
    include("./designs/header.php");
?>
<script src="../js/chk_email.js"></script>
<!-- main -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l6 offset-l3 m6 offset-m3 s8 offset-s2">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Insert-Profile</strong></span>            
                </div>
            <div class="card-content">
                <form id="customer_e" onsubmit="return false">
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input id="full_name" type="text" class="validate" style="color:#00695c;" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input id="email" type="text" class="validate" style="color:#00695c;" onblur="checkemail()" name="email"></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input id="password" type="password" class="validate" style="color:#00695c;" name="password"></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input id="" type="text" class="validate" style="color:#00695c;" name="mobile"></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input type="text" class="datepicker" style="color:#00695c;" name="dob"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <p>
                                <label style="color:#00695c;">
                                    <input type="radio" name="gender" value="Male"/>
                                    <span>Male</span>
                                </label>
                                &nbsp;&nbsp;
                                <label style="color:#00695c;">
                                    <input type="radio" name="gender" value="female"/>
                                    <span>Female</span>
                                </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>PAN Card Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="pannumber"></td>
                        </tr>
                        <tr>
                            <td>Aadhar Card Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="adharnumber"></td>
                        </tr>
                        <tr>
                            <td>GST Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="gstnumber"></td>
                        </tr>
                        <tr>
                                <td>City</td>
                                <td><input type="text" class="validate" style="color:#00695c;" name="city"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea id="textarea1" class="materialize-textarea" style="color:#00695c;" name="address"></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                    <button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="add_customer_e()"> Insert</button>
                </form>
            </div>

    <!-- card close -->
    </div>
</div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>