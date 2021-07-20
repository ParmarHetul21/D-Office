function addCategories() {
    
    $.ajax({
             url: "../admin/Categoryprocess.php",
             type: "POST",
             data: $('#add-categories').serialize(),
             success: function(result){
                 if(result.success == true) {
                        M.toast({html: 'Category Added'});
                    }
                 else {
                        M.toast({html: 'Not Added'});
                 }
             },
             error: function(a,b,c){
                 console.log(a);
                console.log(b);
                console.log(c);
             }
    });
}

function fetchCategories(){
    $.ajax({
        url: "../admin/fetch_categories.php",
        type: "POST",
        success: function(result){
            $("#show_list").mirandajs(result);
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    });
}

$(document).ready(function(){
    $( "#category_table" ).ready(fetchCategories());
});


function getcategory() {
    $.ajax({
        url: "../employees/fetch_category.php",
        type: "POST",
        success: function(result){
            var work_list = document.getElementById("work_list");
            if (work_list != null)
            {
                result.forEach(element => {
                    work_list.innerHTML += "<option value='"+ element.WorkCategoryID +"' >" + element.CategoryName + "</option>";
                });
            }
     		$('select').formSelect();
        },
        error: function(a,b,c){
            console.log(a);
            console.log(b);
            console.log(c);
        }
    }); 
}
$(document).ready(function(){
    getcategory();
});