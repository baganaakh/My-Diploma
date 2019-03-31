<?php include "includes/adminheader.php" ?>
<div id="wrapper">
    <!-- Navigation -->
    <?php include "includes/adminnavigation.php" ?>

    <div id="page-wrapper">

        <div class="container-fluid">

            <!-- Page Heading -->
            <div class="row">
                <div class="col-lg-12">
                    <h1 class="page-header">
                        Blank Page
                        <small>Subhding</small>
                    </h1>
                    <?php
                    if (isset($_GET['source'])) {
                      $source = $_GET['source'];
                    } else {
                      $source = '';
                    }
                    switch ($source) {
                      case 'add_user':
                        include "includes/add_user.php";
                        break;
                      case 'edit_user':
                        include "includes/edit_user.php";
                        break;
                      case '77':
                        echo "NICE 77";
                        break;
                      default:
                        include "includes/view_all_users.php";
                        break;
                    }
                    ?>
                </div>
            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

<?php require "includes/adminfooter.php" ?>s 