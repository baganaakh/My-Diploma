<div class="col-md-4">
<?php 


?>

                <!-- Blog Search Well -->
                <div class="well">
               
                
                    <h4>Таг хайлт</h4>
                    <form action="search.php" method="post">
                    <div class="input-group">
                        <input name="search" type="text" class="form-control">
                        <span class="input-group-btn">
                            <button name="submit" class="btn btn-default" type="submit">
                                <span class="glyphicon glyphicon-search"></span>
                        </button>
                        </span>
                    </div>
                    </form>  <!--search form -->
                    <!-- /.input-group -->
                </div>
               <div class="well"> 
                    <h4>Login</h4>
                    <form action="includes/login.php" method="post">
                    <div class="form-group">
                        <input name="username" placeholder="Enter Username" type="text" class="form-control">
                    </div>
                    

                    <div class="input-group">
                       <input type="password" name="password" placeholder="Enter Password" class="form-control">
                       <span class="input-group-btn">
                       <button class="btn btn-primary" name="login" type="submit">Submit</button>
                       </span>
                    </div>
                    </form>  <!--search form -->
                    <!-- /.input-group -->
                </div>
                <!-- Blog Categories Well -->
                <div class="well">

                <?php
                $query = "SELECT * FROM categories LIMIT 3";
                $select_all_categories_query = mysqli_query($connection, $query);
                ?>
                    <h4>Site Categories</h4>
                    <div class="row">
                        <div class="col-lg-12">
                            <ul class="list-unstyled">
                                <?php 
                                while ($row = mysqli_fetch_assoc($select_all_categories_query)) {
                                        $cat_title = $row['cat_title'];
                                        $cat_id = $row['cat_id'];
                                        echo "<li><a href='category.php?category=$cat_id'>{$cat_title}</a><?li>";
                                    } 
                                    ?>
                               
                            </ul>
                        </div>
                        
                    </div>
                    <!-- /.row -->
                </div>






                <!-- Side Widget Well -->
                <?php require "widget.php" ?>

            </div>