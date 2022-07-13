<?php include 'header.php'; ?>


<div id="main-content">
    <h2>Delete Record</h2>
    <form class="post-form" action="" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="deletebtn" value="Delete" />
    </form>
    <?php
    if(isset($_POST['deletebtn'])){
        $variable=$_POST['sid'];
        $connection=mysqli_connect("localhost","root","","php _and_mysql");
        $command="DELETE FROM table1 WHERE id='$variable'";
        $main=mysqli_query($connection,$command);
        header("Location: http://localhost/CRUD_HTML/crud_html/index.php");
    }
    ?>
</div>
</div>
</body>
</html>
