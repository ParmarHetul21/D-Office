<!-- header -->
<!DOCTYPE html>
<html lang="en">
<head>
    <title>Admin-Login</title>
    <link href="../css/font.css" rel="stylesheet">
    <link href="../css/materialize.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <link href="../css/style.css" type="text/css" rel="stylesheet" media="screen,projection"/>
    <script src="../js/jquery.js"></script>
    <script src="../js/materialize.js"></script>
    <script src="../js/admin.js"></script>
</head>
<body>
<!-- main -->
<div class="main-admin teal lighten-5">
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row center-align">
        <div class="col l4 offset-l4 m6 offset-m3 s8 offset-s2">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Admin-Login</strong></span>            
                </div>
            <div class="card-content">
                <form onsubmit="return false" id="admin-login">
                <table class="highlight" style="color:#00695c; font-weight:bold;">
                    <tbody>
                        <tr>
                            <td>User Name</td>
                            <td><input id="fullname" name="fullname" type="text" class="validate" style="color:#00695c;" required></td>
                        </tr>
                        <tr>
                            <td>Password</td>
                            <td><input id="password" name="password" type="password" class="validate" style="color:#00695c;" required></td>
                        </tr>
                            <input type="hidden" id="usselect" name="usselect" value="Admin">
                    </tbody>
                </table>

                <br><button class="waves-effect waves-light btn-small" style="background-color : #00695c;" name="action" onclick="adminlogin()">Login</button>
                </form>
            </div>

    <!-- card close -->
    </div>
   
</div>
</div>
</body>
</html>