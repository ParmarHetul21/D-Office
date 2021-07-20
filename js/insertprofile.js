function insertprofile() {
    $.ajax({
        url: "./profile_insert.php",
        type: "POST",
        data: $('#profile-register').serialize(),
        success: function(result){
            if(result.success == true){
                M.toast({html: "<p style='color: green'>Profile Insert</p>"})     
            }
            else{
                M.toast({html: "<p style='color: teal darken3'>Not Insert</p>"})     
                // window.location.href('./index.php');                
            }
        },
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });

}

function getprofile() 
{
    $.ajax({
        url: "./fetch_profile.php",
        type: "POST",
        success: function(result){
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

function updateprofile() {
    $.ajax({
        url: "./update_profile.php",
        type: "POST",
        data: $('#update-register').serialize(),
        success: function(result){
            if(result.success == true){
                M.toast({html: "<p style='color: teal darken3'>Updated</p>"})     
            }
            else{
                M.toast({html: "<p style='color: teal darken3'>Not updated</p>"})     
            }
        },
        error: function(a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}