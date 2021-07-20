<!-- header -->
<?php
    require("./designs/header.php");
?>
<?php
    function connection(){
        $dsn = 'mysql:host=localhost;dbname=doffice';
        $username = 'root';
        $password = '';
        return new PDO($dsn, $username, $password);
    }
        
    $id = $_SESSION['UserID'];
    function get_profile_id($id) {
        $dbh = connection();
        $sql = "SELECT ProfileID FROM profiles WHERE Userid = ?";
        $stmt = $dbh->prepare($sql);
        $parameters = array($id);
        $stmt->execute($parameters);
        if($stmt->rowCount() != 0) {
            $result = $stmt->fetch()[0];
            $dbh = NULL;
            return $result; } 
            else { 
                $dbh = NULL; 
                return false; } 
    }
    $pid = get_profile_id($id);
?>
<script src="./js/jquery.js"></script>
<script>
    $(document).ready(function(){
        $( "#update-regsiter" ).ready(getprofile());
    });
</script>
<?php 
if(!$pid)
{
?>
<!-- If Part Main Content -->
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
                <form id="profile-register" onsubmit="return false" >
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input id="full_name" type="text" class="validate" style="color:#00695c;" name="name" required></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input id="" type="text" class="validate" style="color:#00695c;" name="mobile" required></td>
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
                                    <input type="radio" name="gender" value="Male" required/>
                                    <span>Male</span>
                                </label>
                                &nbsp;&nbsp;
                                <label style="color:#00695c;">
                                    <input type="radio" name="gender" value="female" required/>
                                    <span>Female</span>
                                </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>PAN Card Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="pannumber"  required></td>
                        </tr>
                        <tr>
                            <td>Aadhar Card Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="adharnumber"  required></td>
                        </tr>
                        <tr>
                            <td>GST Number</td>
                            <td><input type="text" class="validate" style="color:#00695c;" name="gstnumber" required></td>
                        </tr>
                        <tr>
                                <td>City</td>
                                <td><input type="text" class="validate" style="color:#00695c;" name="city" required></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea id="textarea1" class="materialize-textarea" style="color:#00695c;" name="address" required></textarea></td>
                        </tr>
                    </tbody>
                </table>
                <br>
                <button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="insertprofile()"> Insert</button>
                </form>
            </div>

    <!-- card close -->
    </div>
</div>
</div>
<?php
}
else 
{
?>
<!-- ELse Parttt -->
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
                <form id="update-register" onsubmit="return false">
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>Name</td>
                            <td><input id="full_name1" type="text" class="validate" style="color:#00695c;" name="name" required></td>
                        </tr>
                        <tr>
                            <td>Email</td>
                            <td><input id="Email" type="text" class="validate" style="color:#00695c;" name="email" required></td>
                        </tr>
                        <tr>
                            <td>Mobile Number</td>
                            <td><input  id="mobile" type="text" class="validate" style="color:#00695c;" name="mobile" required></td>
                        </tr>
                        <tr>
                            <td>Date of Birth</td>
                            <td><input id="Birth" type="text" class="datepicker" style="color:#00695c;" name="dob" required></td>
                        </tr>
                        <tr>
                            <td>Gender</td>
                            <td>
                                <p>
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" id="male" value="Male" required/>
                                    <span>Male</span>
                                </label>
                                &nbsp;&nbsp;
                                <label style="color:#00695c;">
                                    <input name="gender" type="radio" id="female" value="Female" required/>
                                    <span>Female</span>
                                </label>
                                </p>
                            </td>
                        </tr>
                        <tr>
                            <td>PAN Card Number</td>
                            <td><input id="pan" type="text" class="validate" style="color:#00695c;" name="pannumber" required></td>
                        </tr>
                        <tr>
                            <td>Aadhar Card Number</td>
                            <td><input id="adhar" type="text" class="validate" style="color:#00695c;" name="adharnumber" required></td>
                        </tr>
                        <tr>
                            <td>GST Number</td>
                            <td><input id="gst" type="text" class="validate" style="color:#00695c;" name="gstnumber" required></td>
                        </tr>
                        <tr>
                            <td>Address</td>
                            <td><textarea id="textarea1" class="materialize-textarea" style="color:#00695c;" name="address" required></textarea></td>
                        </tr>
                        <tr>
                            <td>City</td>
                            <td><input type="text" class="validate" style="color:#00695c;" id="city" name="city" required></td>
                        </tr>
                        <tr>
                            <td>File Number</td>
                            <td><label id="fnumber"></label></td>
                        </tr>
                        <tr>
                            <td>Join Date</td>
                            <td><label id="joindate"></label></td>
                        </tr>
                    </tbody>
                </table>
                <br><button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="updateprofile();">Update</button>
                </form>
            </div>

    <!-- card close -->
    </div>
</div>
</div>
<?php
}
?>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>