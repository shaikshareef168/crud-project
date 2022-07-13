<?php
include 'header.php';
?>
<div id="main-content">
    <h2>All Records</h2>
    <table cellpadding="7px">
        <thead>
        <th>Id</th>
        <th>Name</th>
        <th>Address</th>
        <th>Class</th>
        <th>Phone</th>
        <th>Action</th>
        </thead>
        <tbody>
            <?php 
            $connection=mysqli_connect("localhost","root","","php _and_mysql");
            $command="SELECT * FROM table1 JOIN table2 WHERE table1.class=table2.cid";
            $main=mysqli_query($connection,$command);
            
            if(mysqli_num_rows($main)>0){
                while($data = mysqli_fetch_array($main)){ 
                    ?>     
                    <tr>
                      <td><?php echo $data['id'];?></td>
                      <td><?php echo $data['name'];?></td>
                      <td><?php echo $data['address'];?></td>
                      <td><?php echo $data['cname'];?></td>
                      <td><?php echo $data['phone'];?></td>
                      <td>
                        <a href="edit.php?id=<?php echo $data['id'];?>">Edit</a>
                        <a href="delete-inline.php?id=<?php echo $data['id'];?>">Delete</a>

                    </tr>
                
            
            <?php
            }
        }
            ?>
            
        </tbody>
    </table>
    <?php 
    mysqli_close($connection);
    ?>

</div>
</div>
</body>
</html>
