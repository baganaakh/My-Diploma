<table class="table table-bordered table-hover">
    <thead>
        <tr>
            <th>ID</th>
            <th>Author</th>
            <th>Comment</th>
            <th>Email</th>
            <th>Status</th>
            <th>In Response to</th>
            <th>Date</th>
            <th>Approve</th>
            <th>Unapprove</th>
            <th>Delete</th>
        </tr>
    </thead>
    <tbody>
        <?php 
        $query = "SELECT * FROM posts ";
        $select_posts = mysqli_query($connection, $query);
        while ($row = mysqli_fetch_assoc($select_posts)) {
            $comment_id = $row['comment_id'];
            $comment_author = $row['comment_author'];
            $comment_title = $row['comment_title'];
            $comment_category_id = $row['comment_category_id'];
            $comment_status = $row['comment_status'];
            $comment_image = $row['comment_image'];
            $comment_tags = $row['comment_tags'];
            $comment_comment_count = $row['comment_comment_count'];
            $comment_date = $row['comment_date'];
            echo "<tr>";
            echo "<td>$post_id</td>";
            echo "<td>$post_author</td>";
            echo "<td>$post_title</td>";

            $query = "SELECT * FROM categories WHERE cat_id = {$post_category_id} ";
            $select_categories_id = mysqli_query($connection, $query);
            while ($row = mysqli_fetch_assoc($select_categories_id)) {
                $cat_id = $row['cat_id'];
                $cat_title = $row['cat_title'];
                echo "<td>{$cat_title}</td>";
            }
                echo "<td>$post_status</td>";
                echo "<td><img width='150' src='../images/$post_image'></td>";
                echo "<td>$post_tags</td>";
                echo "<td>$post_comment_count</td>";
                echo "<td>$post_date</td>";
                echo "<td><a href='posts.php?source=edit_post&p_id={$post_id}'>Edit</a></td>";
                echo "<td><a href='posts.php?delete={$post_id}'>Delete</a></td>";
                echo "</tr>";
            }

            ?>
    </tbody>
</table>
<?php
if (isset($_GET['delete'])) {
    $query = "DELETE FROM posts WHERE post_id={$post_id}";
    $delete_query = mysqli_query($connection, $query);
}
?> 