<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Patient's List</title>
    <link rel="stylesheet" href="../../Asset/css/viewpatient.css">
    <script>
        function confirmDelete(event) {
            if (!confirm("Are you sure you want to delete this patient?")) {
                event.preventDefault();
            }
        }
    </script>
</head>
<body>
    <div class="container">
    <h2> Patient's List </h2>
    <table>
    <button onclick="window.location.href='../../index.php' " class="back-btn">Back</button>
        <thead>
            <tr>
                <th>Patient ID</th>
                <th>First Name</th>
                <th>Middle Name</th>
                <th>Last Name</th>
                <th>Birthday</th>
                <th>Age</th>
                <th>Gender</th>
                <th>Nationality</th>
                <th>Action</th>
            </tr>
        </thead>

        <tbody>
        <?php   
            require "../../db/dbcon.php";
                $query = "SELECT * FROM patients";
                $query_run = mysqli_query($con, $query);

                if (mysqli_num_rows($query_run) > 0){

                    foreach ($query_run as $patients) {

                ?>
                <tr>
                    <td><?= $patients['patientID'] ?></td>
                    <td><?= $patients['first_name'] ?></td>
                    <td><?= $patients['middle_name'] ?></td>
                    <td><?= $patients['last_name'] ?></td>
                    <td><?= $patients['birthday'] ?></td>
                    <td><?= $patients['age'] ?></td>
                    <td><?= $patients['gender'] ?></td>
                    <td><?= $patients['nationality'] ?></td>
                    
                    <td>
                    <a href="editdata.php?patientID=<?= $patients['patientID']; ?>" class="btn_edit">Edit</a>              
                    <form action="backend.php" method="POST" style="display:inline;">
                        <button type="submit" name="delete_btn" value="<?= $patients['patientID']; ?>" class="delete_btn" onclick="confirmDelete(event);">Delete</button>
                    </form>

                </td>
                </tr>
                    <?php
                    }
                }
                ?>
        </tbody>
    </table>
    </div>
</body>
</html>