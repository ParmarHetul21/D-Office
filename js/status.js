function changestatus(wid) {
    var formdata = new FormData();
    formdata.append("wid", wid);
    $.ajax({
        url: "../employees/statusprocess.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (result) {
            if (result.success == true) {
                M.toast({ html: "<p style='color:teal darken-3'>Pending</p>" });
                location.reload();
            }
            else {
                M.toast({ html: "<p style='color: teal darken-3'>Not-Work</p>" });
            }
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}


function fetchstatus() 
{
    var formdata = new FormData();
    formdata.append("cid",$("#cid1").val());
    formdata.append("id2",$("#id1").val());
    console.log("cid="+$("#cid1").val()+"&id2="+$("#id1").val()+"");
    $.ajax({
        url: "../employees/fetch_Work.php",
        type: "POST",
        data: "cid="+$("#cid1").val()+"&id2="+$("#id1").val()+"",
        success: function (result) {
            console.log(result);
            result.forEach(element => {
                var status = element.WorkStatus;
                if(status == 0)
                {
                    element.WorkStatus = "Pending";
                    element.Button = '<button class="waves-effect waves-light btn-small" style="background-color : #00695c;" id="pen" onclick="changestatus(' + element.WorkID + ');" name="action">Pending</button>';
                }
                else if(status == 1)
                {
                    element.WorkStatus = "Processing";
                    element.Button = '<button class="waves-effect waves-light btn-small" style="background-color : #00695c;" id="pen" onclick="compelete(' + element.WorkID + ');" name="action">Complete</button>';
                }
                else if (status == 2)
                {
                    element.WorkStatus = "Completed";
                    element.Button = '<button class="waves-effect waves-light btn-small" style="background-color : #00695c;" id="pen" name="action" disabled>Completed!</button>';
                }
            });
            $("#disp_list").mirandajs(result);
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function fetpending() 
{
    var formdata = new FormData();
    formdata.append("cid", $("#cid").val());
    $.ajax(
    {
        url: "../employees/services.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (result) {
            result.forEach(element => {
                var status = element.WorkStatus;
                if (status == 0)
                {
                    element.WorkStatus = "Pending";
                    element.ButtonPending = '<button class="waves-effect waves-light btn-small" style="background-color : #00695c;" id="pen" onclick="compelete(' + element.WorkID + ');" name="action">Pending</button>';
                }
                else if (status == 1)
                {
                    element.WorkStatus = "Proceesing";
                    element.ButtonPending = '<button class="waves-effect waves-light btn-small" style="background-color : #00695c;" id="pen" onclick="compelete(' + element.WorkID + '); upadte_com(' + element.WorkID + ');" name="action">Complete</button>';
                }
            });
            $("#p_list").mirandajs(result);
            
        },
        error: function (a, b, c)
        {
            console.log(a);
        }
    });
}


function upadte_com(wid)
{
    var formdata = new FormData();
    formdata.append("wid", wid);
    $.ajax({
        url: "../employees/comp_click.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (result) {
            if (result.success == true) {
                M.toast({ html: "<p style='color:teal darken-3'></p>" });
            }
            else {
                M.toast({ html: "<p style='color: teal darken-3'>Not-Work</p>" });
            }
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function fetchcompelete() {
    var formdata = new FormData();
    formdata.append("cid", $("#cid").val());
    formdata.append("id2",$("#id1").val());
    console.log("cid="+$("#cid1").val()+"&id2="+$("#id1").val()+"");
    $.ajax({
        url: "../employees/stcompelete.php",
        type: "POST",
        data: "cid="+$("#cid1").val()+"&id2="+$("#id1").val()+"",
        success: function (result) {
            result.forEach(element => {
                var status = element.WorkStatus;
                if (status == 2)
                {
                    element.WorkStatus = "Completed";
                }
            }); 
            $("#s_list").mirandajs(result);
            
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

function compelete(wid1) {
    var formdata = new FormData();
    formdata.append("wid1", wid1);
    $.ajax({
        url: "../employees/compelete.php",
        type: "POST",
        data: formdata,
        processData: false,
        contentType: false,
        success: function (result) {
            if (result.success == true) {
                M.toast({ html: "<p style='color: green'>Compelete</p>" })
                location.reload();
            }
            else {
                M.toast({ html: "<p style='color: red'>Not-compelete</p>" })
            }
        },
        error: function (a, b, c) {
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}