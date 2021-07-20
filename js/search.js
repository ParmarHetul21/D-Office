// function search()
// {
//     var formdata = new FormData();
//     formdata.append("searchbox", $("#searchbox").text());
//     $.ajax({
//         url: "../employees/search.php",
//         type: "POST",
//         data: formdata,
//         processData: false,
//         contentType: false,
//         success: function (result) {
//             $("#result").mirandajs(result);

//         },
//         error: function (a, b, c) {
//             console.log(a);
//             console.log(b);
//             console.log(c);
//         }
//     });
// }