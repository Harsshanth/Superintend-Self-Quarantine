<?php
// include database connection file


include_once("connection.php");

// Get id from URL to delete that user
$rollno = $_POST['aadhar_exit'];

// Delete user row from table based on given id
$sql = "DELETE FROM patient_login WHERE USERNAME = '$rollno' ";

if (mysqli_query($con, $sql)) {
  header("Location:index.html");
} else {
  echo "Error deleting record: " . mysqli_error($con);
}

mysqli_close($con);
?>