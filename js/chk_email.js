function checkemail()
{
    var fdata = new FormData();
    fdata.append('username', $('#email').val()); 
    $.ajax({
        url:"../employees/check_email.php",
        type: "POST",
        data: fdata,
        processData: false,
        contentType: false,
        success: function(result)  {
            if(result.success) {
                M.toast({html: "<p style='color: red; font-size: 1.5em'>Customer-already-existed</p>"})
                $('#email').focus()
            }
        }
    });
}

function add_customer_e()
{
    $.ajax({
        url: "../employees/profile_insert.php",
        type: "POST",
        data: $('#customer_e').serialize(),
        success: function(result){
            if(result.success){
                M.toast({html: "<p style='color: green'>Customer-Registered</p>"})
                location.reload(true);
            }
            else {
                M.toast({html: "<p style='color: green'>Customer-Not-Registered</p>"})
                location.reload(true);
            }
        },
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function cus_getprofile() 
{
    var fdata = new FormData();
    fdata.append('cid', $('#cid').val()); 
    $.ajax({
        url: "../employees/fetch_cu_p.php",
        type: "POST",
        data: fdata,
        processData: false,
        contentType: false,
        success: function(result){
            console.log(result);
           $('#full_name1').val(result[0].FullName);    
           $('#Email').val(result[0].Email);
           $('#mobile').val(result[0].MobileNo);
           $('#Birth').val(result[0].DateOfBirth);
           if(result[0].Gender === 'Male') {
                $("#male").attr("checked",true); 
           }
            else {
                $("#female").attr("checked",true); 
            }
            $('#pan').val(result[0].PAN_Number);
            $('#adhar').val(result[0].Aadhar_Number);
            $('#gst').val(result[0].GST_Number);
            $('#textarea1').val(result[0].Address);
            $('#city').val(result[0].City);
            $('#joindate').html(result[0].JoinDate);
            $('#fnumber').html(result[0].File_Number);
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}


function up_cus_e()  {
    $.ajax({
        url: "../employees/update_customer.php",
        type: "POST",
        data: $('#update_customer').serialize(),
        success: function(result){
            if(result.success){
                M.toast({html: "<p style='color: teal darken3'>Updated</p>"})    
                location.reload(true); 
            }
            else{
                M.toast({html: "<p style='color: teal darken3'>Not updated</p>"})     
                location.reload(true);
            }
        },
        error: function(a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function get_cus()
{
    $.ajax({
        url: "../employees/count_cus.php",
        type: "POST",
        success: function (result) 
        {
            $('#Count').text(result);
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function get_emp()
{
    $.ajax({
        url: "../employees/count_emp.php",
        type: "POST",
        success: function (result) 
        {
            $('#tb').text(result);
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function get_cat()
{
    $.ajax({
        url: "../employees/count_cat.php",
        type: "POST",
        success: function (result) 
        {
            $('#cat').text(result);
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}