

<?php require "includes/adminheader.php" ?>
    <div id="wrapper">
        <!-- Navigation -->
      <?php require "includes/adminnavigation.php" ?>

      <div id="page-wrapper">

<div class="container-fluid">

    <!-- Page Heading -->
    <div class="row">
        <div class="col-lg-12">
            <h1 class="page-header">
                Blank Page
                <small>Subheading</small>
            </h1>
            <div class="col-xs-6">
            <form action="">
                <div class="form-group">
<label for="cat-title">Add Category</label>
                <input type="text" class="form-control" name="cat_title">
                </div>
                <div class="form-group">

                <input type="submit" class="btn btn-primary" name="submit" value="Add Category">
                </div>
            </form>
            </div>
            <div class="col-xs-6">
                <table class="table table-bordered table-hover">
                    <thead>
                        <tr>
                            <th>Id</th>
                            <th>Category title</th>
                        </tr>
                    </thead>
                    <tbody>
                        <tr>
                            <td>basketball category</td>
                            <td>soccer category</td>
                        </tr>
                    </tbody>
                </table>

            </div>
  
            
        </div>
    </div>
    <!-- /.row -->

</div>
<!-- /.container-fluid -->

</div>
<!-- /#page-wrapper -->

</div>

    <?php require "includes/adminfooter.php" ?>s