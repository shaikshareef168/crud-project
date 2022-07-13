<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    $global=$_GET['id'];
    $connection=mysqli_connect("localhost","root","","php _and_mysql");
    $command="SELECT * FROM table1 WHERE id=$global";
    $main=mysqli_query($connection,$command);
    if(mysqli_num_rows($main)>0){
        while($data= mysqli_fetch_array($main)){ 
    ?>        
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="text" name="sid" value="<?php echo $data['id']?>"/>
          <input type="text" name="sname" value="<?php echo $data['name']?>"/>
      </div>
      <div class="form-group">
          <label>Address</label>
          <input type="text" name="saddress" value="<?php echo $data['address']?>"/>
      </div>
      <div class="form-group">
          <label>Class</label>
          <?php
          $command1="SELECT * FROM table2 ";
          $main1=mysqli_query($connection,$command1);
          if(mysqli_num_rows($main1)>0){
            echo "<select name='sclass'>"; 
            while($row=mysqli_fetch_assoc($main1)){
                if($data['class']==$row['cid']){
                    $select="selected";
                }else{
                    $select="";
                }
                echo  "<option {$select} value='{$row['cid']}'>{$row['cname']}</option>";
            }
            echo  "</select>";
        }
            ?>
          
          
          
          

          
              
         
          
              
                
             
              
          </select>
           

      </div>
      <div class="form-group">
          <label>Phone</label>
          <input type="text" name="sphone" value="<?php echo $data['phone']?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
        }
    }?>  
</div>
</div>
</body>
</html>
