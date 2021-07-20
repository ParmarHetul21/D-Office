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
        <div class="col l6 offset-l3 m6 offset-m3 s8 offset-s2">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Employee Profile</strong></span>            
                </div>
            <div class="card-content">
                <form onsubmit="return false" id="employee-profile">
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input id="" name="fullname" type="text" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input id="" name="email" type="text" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input id="" name="mobile" type="text" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input type="text" name="date" class="datepicker" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <p>
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" value="Male"/>
                                    <span>Male</span>
                                </label>
                                &nbsp;&nbsp;
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" value="Female"/>
                                    <span>Female</span>
                                </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>Education Qualification</td>
                            <td><input id="" name="qua" type="text" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Work Experience</td>
                            <td><input id="" name="exp" type="text" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea id="textarea1" name="address" class="materialize-textarea" style="color:#00695c;"></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input id="" type="text" name="city" class="validate" style="color:#00695c;"></td>
                        </tr>
                        <tr>
                            <td>Join Date</td>
                            <td><label id="joindate" >20-04-2019</label></td>
                        </tr>
                    </tbody>
                </table>

                <br><button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="empprofile()" >Update</button>
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