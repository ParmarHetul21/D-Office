<!-- header -->
<?php
    include("./designs/header.php");                                     
?>

<!-- main -->
<div class="main-container teal lighten-5">
<div class="row"></div>
<div class="row"></div>
    <!-- card -->
    <div class="row">
        <div class="col l8 offset-l2 m8 offset-m2 s8 offset-s2">
            <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
                <div class="card-content teal darken-3 white-text">
                    <span class="card-title"><strong>Category List</strong></span>            
                </div>
                <div class="input-field col s6 l4 offset-l8 ">
                    <i class="material-icons prefix" style="color:#00695c;">search</i>
                    <input type="text" id="category_search" >
                    <label>Search</label>  
                </div>  
            <div class="card-content">
            <!-- table -->
            <table id="category_table" class="highlight responsive-table centered">
                <thead>
                    <tr>
                        <th>ID</th>
                        <th>Category-Name</th>
                    </tr>
                </thead>
                <tbody id="show_list">
                    <tr>
                        <td>[[WorkCategoryID]]</td>
                        <td>[[CategoryName]]</td>
                    </tr>     
                </tbody>
            </table>
            </div>

    <!-- card close -->
    </div>
    </div>
<!-- Body Close -->
<div class="row"></div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>