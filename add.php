<?php include 'header.php'; ?>
<div id="main-content">
    <h2>Add New Record</h2>
    <form class="post-form" action="savedata.php" method="post">
        <div class="form-group">
            <label>Name</label>
            <input type="text" name="name" required/>
        </div>
        <div class="form-group">
            <label>Date of Birth</label>
            <input type="date" name="DoB" required/>
        </div>
        <div class="form-group">
            <label for="gender">Choose gender:</label>
            <select name="gender" required>
                <option value="" selected disabled>Select Gender</option>
                <option value="Male">Male</option>
                <option value="Female">Female</option>
                <option value="Others">Others</option>
            </select>
        </div>
        <div class="form-group">
            <label>Note</label>
            <input type="text" name="note" />
        </div>
        <input class="submit" type="submit" value="Save"  />
    </form>
</div>
</div>
</body>
</html>
