function addwork()
{
    $.ajax({
        url: "../employees/workprocess.php",
        type: "POST",
        data: $('#work_add').serialize(),
        success: function(result){
            if(result.success == true){
                M.toast({html: "<p style='color: green'>Work Added</p>"})  
                location.href = "./customer_list.php";
            }
            else{
                M.toast({html: "<p style='color: teal darken3'>Not Added</p>"})     
            }
        },
        error: function(a, b, c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}