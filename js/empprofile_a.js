function fetchemp1(){
    $.ajax({
        url: "../employees/empservice.php",
        type: "POST",
        success: function(result){
            console.log(result)
            var cust_list = document.getElementById("custlist");
            result.forEach(element => {
                cust_list.innerHTML += `
                <tr>
                        <td>`+element.JoinDate+`</td>
                        <td>`+element.File_Number+`</td>
                        <td><a href="./update_customer_profile.php?cid4=`+element.CustomerID+`" style="color: black;">`+element.FullName+`</a></td>
                        <td>`+element.MobileNo+`</td>
                        <td>`+element.PAN_Number+`</td>
                        
                    </tr>
                `;
            });
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}
