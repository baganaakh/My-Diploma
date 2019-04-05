<?php include "includes/adminheader.php" ?>
<?php 

if (isset($_SESSION['username'])) {
   $username=$_SESSION['username'];
//$query="SELECT * FROM `users` WHERE username ='{$username}' ";
$query ="SELECT * FROM `users` WHERE username = '{$username}'";
$select_user_profile=mysqli_query($connection,$query);

while($row=mysqli_fetch_array($select_user_profile)){
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
}
}

?>
<?php
if(isset($_GET['edit_user'])){
    $the_user_id =$_GET['edit_user'];
     $query = "SELECT * FROM users WHERE user_id=$the_user_id";
        $select_users = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_users)) {
            $user_id = $row['user_id'];
            $username = $row['username'];
            $user_password = $row['password'];
            $user_firstname = $row['user_firstname'];
            $user_lastname = $row['user_lastname'];
            $user_email = $row['user_email'];
            $user_image = $row['user_image'];
            $user_role = $row['user_role'];
        }
}
if (isset($_POST['edit_user'])) {
    $user_firstname = $_POST['user_firstname'];
    $user_lastname = $_POST['user_lastname'];
    $user_role = $_POST['user_role'];
    $username = $_POST['username'];
    $user_password = $_POST['user_password'];
    $user_email = $_POST['user_email'];



$query="UPDATE `users` SET `username` = '{$username}', `user_role` = '{$user_role}', `password` = '{$user_password}', `user_firstname` = '{$user_firstname}', `user_lastname` = '{$user_lastname}', `user_email` = '{$user_email}' WHERE `users`.`username` = '{$username}'";

  ;
       $edit_user_query=mysqli_query($connection,$query);
       comfirm($edit_user_query);
}
?>
<
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
                    <form action="" method="post" enctype="multipart/form-data">
                        <div class="form-group">
                            <label for="user_firstname">Firstname</label>
                            <input type="text" class="form-control" value="<?php echo $user_firstname; ?>" name="user_firstname">
                        </div>
                        <div class="form-group">
                            <label for="post_status">Lastname</label>
                            <input type="text" value="<?php echo $user_lastname; ?>" class="form-control" name="user_lastname">
                        </div>
                        <div class="form-group">
                            <select name="user_role">
                                <option value="subscriber"><?php echo $user_role; ?></option>
                                <?php
                                if ($user_role == 'subscriber') {
                                    echo "<option value='admin'>Admin</option>";
                                } else {
                                    echo "<option value='subscriber'>Subscriber</option>";
                                }
                                ?>



                            </select>
                        </div>
                        <!-- <div class="form-group">
        <label for="post_image"></label>
        <input type="file" name="image">
    </div> -->
                        <div class="form-group">
                            <label for="username">Username</label>
                            <input type="text" value="<?php echo $username; ?>" class="form-control" name="username">
                        </div>

                        <div class="form-group">
                            <label for="post_content">Email</label>
                            <input type="email" value="<?php echo $user_email; ?>" name="user_email" class="form-control">
                        </div>
                        <div class="form-group">
                            <label for="post_content">Password</label>
                            <input type="password" value="<?php echo $user_password; ?>" name="user_password" class="form-control">
                        </div>
                        <div class="form-group">
                            <input type="submit" class="btn btn-primary" name="edit_user" value="Update Profile">
                        </div>
                    </form>
                </div>

            </div>
            <!-- /.row -->

        </div>
        <!-- /.container-fluid -->

    </div>
    <!-- /#page-wrapper -->

</div>

<?php require "includes/adminfooter.php" ?>s 