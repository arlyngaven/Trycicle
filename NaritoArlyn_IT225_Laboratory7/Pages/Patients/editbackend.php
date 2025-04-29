<?php
require "../../db/dbcon.php";

if (isset($_POST['update_btn'])) {
    $patientID = mysqli_real_escape_string($con, $_POST['patientID']);
    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $middleName = mysqli_real_escape_string($con, $_POST['middle_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);

    $query = "UPDATE patients SET first_name='$firstName', middle_name='$middleName', last_name='$lastName',
     birthday='$birthday', age='$age', gender='$gender', nationality='$nationality' WHERE patientID='$patientID'";
     $query_run= mysqli_query($con,$query);
     if ($query_run) {
      header("Location: ../../index.php");
     }
}  