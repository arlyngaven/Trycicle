<!DOCTYPE html>
<html lang="en">
    <?php require "../../db/dbcon.php" ?>
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Edit data</title>
    <link rel="stylesheet" href="../../Asset/css/addpatient.css">
</head>
<body>
    <div class="form-container">

    <?php
   if (isset($_GET['patientID'])) {
    $patientID = mysqli_real_escape_string($con, $_GET['patientID']);
    $query = "SELECT * FROM patients WHERE patientID='$patientID'";
    $query_run = mysqli_query($con, $query);

    if (mysqli_num_rows($query_run) > 0) {
        $user = mysqli_fetch_array($query_run);
    } else {
        echo "<p>No record found.</p>";
        exit();
    }
} else {
    echo "<p>Invalid request.</p>";
    exit();
}

    ?>

    <div>
    <button onclick="window.location.href='viewpatient.php' " class="back-btn" name="back_btn">Back</button>
</div>
        <h2 style="text-align: center; margin-bottom: 15px;">Edit Data</h2>
        <form action="editbackend.php" method="POST">
        <input type="hidden" name="patientID" value="<?= $user['patientID'] ?>">

            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name"  value="<?= $user['first_name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name"  value="<?= $user['middle_name'] ?>">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name"  value="<?= $user['last_name'] ?>" required>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday"  value="<?= $user['birthday'] ?>" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age"  value="<?= $user['age'] ?>" required>
            </div>

            <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender"  value="<?= $user['gender'] ?>" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality"  value="<?= $user['nationality'] ?>" required>
            </div>

            <div>
            <button type="submit" name="update_btn" class="update_btn">Update User Data</button>
            </div>
            
        </form>
    </div>
</body>
</html>