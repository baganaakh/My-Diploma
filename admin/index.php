
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
                        Welcome to admin    
                        <small><?php echo $_SESSION['username']; ?></small>
                            
                        </h1>
                        
                    </div>
                </div>
                <!-- /.row -->

            </div>
            <!-- /.container-fluid -->

        </div>
        <!-- /#page-wrapper -->

    </div>

    <?php require "includes/adminfooter.php" ?>s