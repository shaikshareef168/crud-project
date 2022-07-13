<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Edit Record</h2>
    <form class="post-form" action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        <div class="form-group">
            <label>Id</label>
            <input type="text" name="sid" />
        </div>
        <input class="submit" type="submit" name="showbtn" value="Show" />
    </form>
    <?php
    if(isset($_POST['showbtn'])){
        $variable=$_POST['sid'];
        $connection=mysqli_connect("localhost","root","","php _and_mysql");
        $command="SELECT * FROM table1 WHERE id='$variable'";
        $main=mysqli_query($connection,$command);
        if(mysqli_num_rows($main)>0){
            while($row=mysqli_fetch_assoc($main)){
        ?>                                                                                                                                                                                                                                                                                                                                                                            
    <form class="post-form" action="updatedata.php" method="post">
        <div class="form-group">
            <label for="">Name</label>
            <input type="hidden" name="sid"  value="<?php echo $row['id'];?>" />
            <input type="text" name="sname" value="<?php echo $row['name'];?>" />
        </div>
        <div class="form-group">
            <label>Address</label>
            <input type="text" name="saddress" value="<?php echo $row['address'];?>" />
        </div>
        <div class="form-group">
        <label>Class</label>
        <?php
          $command1="SELECT * FROM table2 ";
          $main1=mysqli_query($connection,$command1);
          if(mysqli_num_rows($main1)>0){
            echo "<select name='sclass'>"; 
            while($row1=mysqli_fetch_assoc($main1)){
                if($row['class']==$row1['cid']){
                    $select="selected";
                }else{
                    $select="";
                }
                echo  "<option {$select} value='{$row1['cid']}'>{$row1['cname']}</option>";
            };
            echo  "</select>";
        };
            ?>
          
        </div>
        <div class="form-group">
            <label>Phone</label>
            <input type="text" name="sphone" value="<?php echo $row['phone'];?>" />
        </div>
    <input class="submit" type="submit" value="Update"  />
    </form>
    <?php
    };
};
    }; 
    ?>
</div>
</div>
</body>
</html>
