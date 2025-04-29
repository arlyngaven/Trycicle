<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <title>Add Patient</title>
    <link rel="stylesheet" href="../../Asset/css/addpatient.css">
</head>
<body>
    <div class="form-container">
    <div>
    <button onclick="window.location.href='../../index.php' " class="back-btn" name="back_btn">Back</button>
</div>
        <h2 style="text-align: center; margin-bottom: 15px;">Add Patient</h2>
        <form action="backend.php" method="POST">
            <div class="form-group">
                <label for="first_name">First Name:</label>
                <input type="text" id="first_name" name="first_name" required>
            </div>

            <div class="form-group">
                <label for="middle_name">Middle Name:</label>
                <input type="text" id="middle_name" name="middle_name">
            </div>

            <div class="form-group">
                <label for="last_name">Last Name:</label>
                <input type="text" id="last_name" name="last_name" required>
            </div>

            <div class="form-group">
                <label for="birthday">Birthday:</label>
                <input type="date" id="birthday" name="birthday" required>
            </div>

            <div class="form-group">
                <label for="age">Age:</label>
                <input type="number" id="age" name="age" required>
            </div>

            <div class="form-group">
            <label for="gender">Gender:</label>
            <input type="text" id="gender" name="gender" required>
            </div>

            <div class="form-group">
                <label for="nationality">Nationality:</label>
                <input type="text" id="nationality" name="nationality" required>
            </div>

            <div>
            <button type="submit" class="btn" name="submit_btn">Submit</button><br>  
            </div>

            
        </form>
    </div>
</body>
</html>
