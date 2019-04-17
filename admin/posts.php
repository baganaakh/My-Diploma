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
                      case 'add_post':
                        include "includes/add_post.php";
                        break;
                      case 'edit_post':
                        include "includes/edit_post.php";
                        break;
                      case '77':
                        echo "NICE 77";
                        break;
                      default:
                        include "includes/view_all_posts.php";
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

<?php require "includes/adminfooter.php" ?>