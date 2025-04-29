<?php

require "../../db/dbcon.php";

if(isset($_POST["delete_btn"])) {

    $patientID = mysqli_real_escape_string($con, $_POST['delete_btn']);
    $query = "DELETE FROM patients WHERE patientID='$patientID'";    
    $query_run= mysqli_query($con,$query);
    if ($query_run) {
        header("Location: managepatient.php");
        exit();
    } else {
        echo "Error deleting record: " . mysqli_error($con);
    }    
}

if (isset($_POST['submit_btn'])) {

    $firstName = mysqli_real_escape_string($con, $_POST['first_name']);
    $middleName = mysqli_real_escape_string($con, $_POST['middle_name']);
    $lastName = mysqli_real_escape_string($con, $_POST['last_name']);
    $birthday = mysqli_real_escape_string($con, $_POST['birthday']);
    $age = mysqli_real_escape_string($con, $_POST['age']);
    $gender = mysqli_real_escape_string($con, $_POST['gender']);
    $nationality = mysqli_real_escape_string($con, $_POST['nationality']);
    

    if($firstName!=""||$middleName!= ""||$lastName!=""||$birthday!=""||$age!=""||$gender!=""||$nationality!="") {
    $query = "INSERT INTO patients (first_name, middle_name, last_name, birthday, age, gender, nationality) 
              VALUES ('$firstName', '$middleName', '$lastName', '$birthday', '$age', '$gender', '$nationality')";
    
    $query_run = mysqli_query($con, $query);
    }

    if($query_run){
        header("location:../../index.php");
    }
}



