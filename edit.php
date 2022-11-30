<?php include 'header.php'; ?>

<div id="main-content">
    <h2>Update Record</h2>
    <?php
    include 'config.php';

    $stu_id = $_GET['id'];

    $sql = "SELECT * FROM student WHERE sid = {$stu_id}";
    $result = mysqli_query($conn, $sql) or die("Query Unsuccessful.");

    if(mysqli_num_rows($result) > 0)  {
      while($row = mysqli_fetch_assoc($result)){
    ?>
    <form class="post-form" action="updatedata.php" method="post">
      <div class="form-group">
          <label>Name</label>
          <input type="hidden" name="sid" value="<?php echo $row['sid']; ?>"/>
          <input type="text" name="name" required value="<?php echo $row['name']; ?>"/>
      </div>
      <div class="form-group">
          <label>Date of Birth</label>
          <input type="date" name="DoB" required value="<?php echo $row['dob']; ?>"/>
      </div>
      <div class="form-group">
          <label for="gender">Choose gender:</label>
            <select name="gender" required>
                <option value="" selected disabled><?php echo $row['gender']; ?></option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
      </div>
      <div class="form-group">
          <label>Note</label>
          <input type="text" name="note" value="<?php echo $row['note']; ?>"/>
      </div>
      <input class="submit" type="submit" value="Update"/>
    </form>
    <?php
      }
    }
    ?>
</div>
</div>
</body>
</html>
