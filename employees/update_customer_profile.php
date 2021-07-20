<!-- header -->
<?php
    require("./designs/header.php");
?>
<script src="../js/chk_email.js"></script>        
<script>
    $('#update_customer').ready(cus_getprofile);
</script>
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l6 offset-l3 m6 offset-m3 s8 offset-s2">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Upadte-Profile</strong></span>            
                </div>
            <div class="card-content">
                <form id="update_customer" onsubmit="return false">
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input id="full_name1" type="text" class="validate" style="color:#00695c;" name="name"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input id="Email" type="text" class="validate" style="color:#00695c;" name="email"></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input  id="mobile" type="text" class="validate" style="color:#00695c;" name="mobile"></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input id="Birth" type="text" class="datepicker" style="color:#00695c;" name="dob"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <p>
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" id="male" value="Male"/>
                                    <span>Male</span>
                                </label>
                                &nbsp;&nbsp;
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" id="female" value="Female"/>
                                    <span>Female</span>
                                </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>PAN Card Number</td>
                            <td><input id="pan" type="text" class="validate" style="color:#00695c;" name="pannumber"></td>
                        </tr>
                        <tr>
                            <td>Aadhar Card Number</td>
                            <td><input id="adhar" type="text" class="validate" style="color:#00695c;" name="adharnumber"></td>
                        </tr>
                        <tr>
                            <td>GST Number</td>
                            <td><input id="gst" type="text" class="validate" style="color:#00695c;" name="gstnumber"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea id="textarea1" class="materialize-textarea" style="color:#00695c;" name="address"></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" class="validate" style="color:#00695c;" id="city" name="city"></td>
                        </tr>
                        <tr>
                            <td>File Number</td>
                            <td><label id="fnumber"></label></td>
                        </tr>
                        <tr>
                            <td>Join Date</td>
                            <td><label id="joindate"></label></td>
                            <input type="hidden" id="cid" name="cid" value="<?= $_REQUEST['cid4'] ?>">
                        </tr>
                    </tbody>
                </table>
                    <br><button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="up_cus_e();">Update</button>
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