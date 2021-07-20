function employees()
{
    $.ajax({
        url: "../admin/listservice.php",
        type: "POST",
        success: function(result){
            console.log(result);
            $("#pp_list").mirandajs(result);
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}
