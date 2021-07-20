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
        <div class="col l8 offset-l2 m8 offset-m2 s10 offset-s1">
        <div class="card white" style="margin:0%; padding:1%;" id="card-hover">
            <div class="card-content teal darken-3 white-text">
            <span class="card-title"><strong>Add Category</strong></span>            
            </div>
            <div class="card-content">
            <!-- form -->
                <div class="row">
                <form class="col s12" id="add-categories" onsubmit="return false">

                <div class="row">
                    <div class="input-field col s12 l12">
                    <i class="material-icons prefix" style="color : #00695c;">list</i>
                    <input id="icon_prefix" type="text" class="validate" name="addname">
                    <label for="icon_prefix" style="color : #00695c;">Category Name</label>
                    </div>
                </div>
                
                <div class="row">
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m3 s3"></div>
                    <div class="col l4 m6 s6">
                    <button class="btn btn-flat teal darken-3 white-text waves-effect waves-dark" onclick="addCategories()">
                      Add Category
                    </button>
                    </div>
                </div>

                </form>
                </div>

            </div>

    <!-- card close -->
        </div>
    </div>
<!-- Body Close -->
</div>
</div>
<!-- footer -->
<?php
    include("./designs/footer.php");
?>