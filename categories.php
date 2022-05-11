<?php include "includes/admin_header.php"; ?>

    <div id="wrapper">

        <!-- Navigation -->
        <?php include "includes/admin_navigation.php"; ?>

        <div id="page-wrapper">
            <div class="container-fluid">

                <!-- Page Heading -->
                <div class="row">
                    <div class="col-lg-12">
                        <h1 class="page-header">
                            Welcome to Admin
                            <small>Author</small>
                        </h1>

                        <div class="col-xs-6">

                        <!-- insert -->
                        <?php insert_categories(); ?>
                            <form action="" method="post">
                                <div class="form-group">
                                    <label for="cat-title">Add category</label>
                                    <input type="text" class="form-control" name="cat_title" placeholder="dad">
                                </div>
                                <div class="form-group">
                                    <input class="btn btn-primary" type="submit" name="submit" value="Add category">
                            </form>
///////////////////////////////////////////////////////////////////////
                             <?php
                              // include update
                             if(isset($_GET['edit'])) {

                                $cat_id = $_GET['edit'];

                                include "includes/kut.php";
                             }

                             ?>
-----------------------------------------------------------------------------                             
                           </div>


                        </div>
                    </div>
                </div>
                <!-- /.row -->
            </div>
            <!-- /.container-fluid -->
            <table class="table table-bordered table-hover">
                           <thead>
                               <tr>
                                   <th>Id</th>
                                    <th>Category Title</th>
                               </tr>
                            </thead>
                            <tbody>

                            <!-- vind alle categorieën -->
                            <?php findAllCategories(); ?>

                            <!-- Delete -->

                            <?php delete_categories(); ?>

                            </tbody
                        </table>
        </div>
        <!-- /#page-wrapper -->

<?php include "includes/admin_footer.php"; ?>
