// function ck_tb()
// {
//     var formdata = new FormData();
//     formdata.append("cid", $("#id").val());
//     $.ajax({
//         url: "./ck_tb.php",
//         type: "POST",
//         data: formdata,
//         processData: false,
//         contentType: false,
//         success: function (result) 
//         {
//             $("#ck_tb").mirandajs(result);
//         },
//         error: function (a, b, c) {
//             console.log(a);
//             console.log(b);
//             console.log(c);
//         }
//     });
// }