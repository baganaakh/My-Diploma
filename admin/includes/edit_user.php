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


    // $user_image = $_FILES['image']['name'];
    // $user_image_temp = $_FILES['image']['tmp_name'];
  //  UPDATE `users` SET `user_email` = 'Check@fsdf.com' WHERE `users`.`user_id` = 13;

$query="UPDATE `users` SET `username` = '{$username}', `user_role` = '{$user_role}', `password` = '{$user_password}', `user_firstname` = '{$user_firstname}', `user_lastname` = '{$user_lastname}', `user_email` = '{$user_email}' WHERE `users`.`user_id` = '{$the_user_id}'";

    // move_uploaded_file($post_image_temp, "../images/$post_image");
    // $query=" UPDATE `users` SET ";
    // $query .="user_firstname = '{$user_firstname}', ";
    // $query .="user_lastname = '{$user_lastname}', ";
    // $query .="username = '{$username}', ";
    // $query .="user_role = '{$user_role}', ";
    // $query .="user_email = '{$user_email}', ";
    // $query .="user_password = '{$user_password}'";
    // $query .="WHERE `users`.`user_id` = '{$the_user_id}' ";
       $edit_user_query=mysqli_query($connection,$query);
       comfirm($edit_user_query);
}
?>
<form action="" method="post" enctype="multipart/form-data">
    <div class="form-group">
        <label for="user_firstname">Firstname</label>
        <input type="text" class="form-control" value="<?php echo $user_firstname; ?>" name="user_firstname">
    </div>
    <div class="form-group">
        <label for="post_status">Lastname</label>
        <input type="text" value="<?php echo $user_lastname; ?>"  class="form-control" name="user_lastname">
    </div>
    <div class="form-group">
        <select name="user_role">
            <option value="subscriber"><?php echo $user_role; ?></option>
            <?php
            if($user_role == 'subscriber'){
                echo "<option value='admin'>Admin</option>";
            }else{
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
        <input type="text" value="<?php echo $username; ?>"  class="form-control" name="username">
    </div>

    <div class="form-group">
        <label for="post_content">Email</label>
        <input type="email" value="<?php echo $user_email; ?>"  name="user_email" class="form-control">
    </div>
    <div class="form-group">
        <label for="post_content">Password</label>
        <input type="password" value="<?php echo $user_password; ?>"  name="user_password" class="form-control">
    </div>
    <div class="form-group">
        <input type="submit" class="btn btn-primary" name="edit_user" value="Add User">
    </div>
</form>