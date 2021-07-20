function fetchemp(){
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
                        <td>
                            <a href="./add_work.php?cid=`+element.CustomerID+`" class="waves-effect waves-light btn-small" style="background-color : #00695c;">Add Work</a>
                            <a href="./work_history.php?cid1=`+element.CustomerID+`" class="waves-effect waves-light btn-small" style="background-color : #00695c;">Work History</a>
                            <a href="./deleteprocess.php?cid2=`+element.CustomerID+`"+ + class="waves-effect waves-light btn-small" style="background-color : #00695c;">Delete</a>
                        </td>
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

// function delete_work() {
//     $.ajax({
//         url: "../employees/deleteprocess.php",
//         type: "POST",
//         success: function(result){
//             if(result.success == true)
//             {
//                 M.toast({html: "<p style='color: green'>Delete customer</p>"})  
//                 // location.reload();
//             }
//             else {
//                 M.toast({html: "<p style='color: red'>Not-compelete</p>"})     
//             }
//         },
//         error: function(a,b,c) {
//             console.log(a);
//             console.log(b);
//             console.log(c);
//         }
//     });   
// }
// var url = new URLSearchParams(window.location.search);
// var id = url.get('cid2');