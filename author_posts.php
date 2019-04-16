<?php require_once "includes/header.php" ?>
<?php require "includes/db.php" ?>
<!-- Navigation -->
<?php require "includes/navigation.php" ?>
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-md-8">
            <?php
            if (isset($_GET['p_id'])) {
                $the_post_id = $_GET['p_id'];
                $the_post_author = $_GET['author'];

                $query = "SELECT * FROM posts WHERE post_author ='{$the_post_author}' ";
                $select_all_posts_query = mysqli_query($connection, $query);
                while ($row = mysqli_fetch_assoc($select_all_posts_query)) {
                    $post_id = $row['post_id'];
                    $post_title = $row['post_title'];
                    $post_author = $row['post_author'];
                    $post_date = $row['post_date'];
                    $post_image = $row['post_image'];
                    $post_content = substr($row['post_content'], 0, 200);
                    ?>

                    <h1 class="page-header">
                        Page Heads
                        <small>Secondary Text</small>
                    </h1>

                    <!-- First Blog Post -->
                    <h2>
                        <a href="post.php?p_id=<?php echo $post_id; ?>"><?php echo $post_title ?></a>
                    </h2>
                    <p class="lead">
                        by <a href="index.php"><?php echo $post_author ?></a>
                    </p>
                    <p><span class="glyphicon glyphicon-time"></span> <?php echo $post_date ?></p>
                    <hr>
                    <img class="img-responsive" src="images/<?php echo $post_image ?>" alt="">
                    <hr>
                    <p><?php echo $post_content ?></p>

                    <hr>
                <?php
            }
        } ?>
            <!-- Blog Comments -->
            <?php

            if (isset($_POST['create_comment'])) {

                $the_post_id = $_GET['p_id'];
                $comment_author = $_POST['comment_author'];
                $comment_email = $_POST['comment_email'];
                $comment_content = $_POST['comment_content'];
                if (!empty($comment_author) && !empty($comment_email) && !empty($comment_content)) {


                    $query = "INSERT INTO `comments` (`comment_id`, `comment_post_id`, `comment_author`, `comment_email`, `comment_content`, `comment_status`, `comment_date`) ";
                    $query .= "VALUES (NULL, '$the_post_id', '{$comment_author}', '{$comment_email}', '{$comment_content}', 'unapproved', now())";
                    //$query .= "VALUES ($the_post_id, '{$comment_author}','{$comment_email}','{$comment_content}','unapproved',now()) ";
                    $create_comment_query = mysqli_query($connection, $query);
                    if (!$create_comment_query) {
                        die('querry failed' . mysqli_error($connection));
                    }
                    $query = "UPDATE posts set post_comment_count = post_comment_count + 1 ";
                    $query .= "WHERE post_id = $the_post_id";
                    $update_comment_count = mysqli_query($connection, $query);
                } else {
                    echo "<script>
                alert('Талбарууд хоосон байж болохгүй')
                </script>";
                }
            }
            ?>
            <!-- Comments Form -->

            <hr>

            <!-- Posted Comments -->

            <!-- Comment -->
        </div>

        <!-- Blog Sidebar Widgets Column -->
        <?php require "includes/sidebar.php" ?>

    </div>
    <!-- /.row -->

    <hr>
    <?php require_once "includes/footer.php" ?>