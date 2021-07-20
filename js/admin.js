function adminlogin() {
    
    $.ajax({
        url: "../admin/admin_process.php",
        type: "POST",
        data: $('#admin-login').serialize(),
        success: function(result) 
        {
           if(result.success == true && result.usertype == 'Admin') {
                M.toast({html: "<p style='color: green'>Admin Logged</p>"})
                window.location = '../admin/index.php';
           }
           else {
                M.toast({html: "<p style='color: red'>Not Sucess</p>"});
            }
        },
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}