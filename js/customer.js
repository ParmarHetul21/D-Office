function customer_registration() {
    var name = $('#email');
    var pass = $("#password1");
    var cpass = $("#Confirmpassword");

    if(name.val() == null || name.val() == '' || pass.val() == null || pass.val() !== cpass.val())
    {
        M.toast({html: "<p style='color: red; font-size: 1.0em'>Please Enter proper Detail</p>"});
        $('#email').focus();
    }
    else
    {
        $.ajax({
            url: "./helpers/customer_registration.php",
            type: "POST",
            data: $('#customer-registration').serialize(),
            success: function(result){
                if(result.success) {
                    location.assign("./index.php");
                    M.toast({html: "<p style='color: green'>Registered-Successfully</p>"})
                }
                else {
                    M.toast({html: "<p style='color: orange'>" + result.message + "</p>"})
                }
            },
            error: function(a, b, c){
                console.log(a);
                console.log(b);
                console.log(c);
            }
        });
    }

    return false;
}

function user_login() {
    $.ajax({
        url: "./helpers/login.php",
        type: "POST",
        data: $('#customer-login').serialize(),
        success: function(result) {
           if(result.success == true && result.usertype == 'Customer') {
                location.reload();
                M.toast({html: "<p style='color: green'>Logged in Successfully</p>"})
                setTimeout(3000);
                window.location = './index.php';                                                
           }
            else {
                M.toast({html: "<p style='color: red'>Logged in  Not Sucess.</p>"});
            }
        },
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function checkUserName()
{
    var fdata = new FormData();
    fdata.append('username', $('#email').val()); 
    $.ajax({
        url:"./helpers/check_username.php",
        type: "POST",
        data: fdata,
        processData: false,
        contentType: false,
        success: function(result){
            if(result.success) {
                M.toast({html: "<p style='color: red; font-size: 1.5em'>Username already existed</p>"})
                $('#email').focus()
            }

        }
    });
}

function check_Pswd()
{
    if($('#password1').val() != $('#Confirmpassword').val())
    {
            M.toast({html: "<p style='color: red; font-size: 1.0em'>Please Enter proper Detail</p>"});
            $('#Confirmpassword').focus();   
    }
    else
    {
        $('#btn_submit').removeAttr("disabled");
    }
}