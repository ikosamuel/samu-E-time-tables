<?php
require "./connection.php";
if(isset($_POST['save'])){
    $userid = $_POST['user_id'];
    $courseid= $_POST['course_id'];
    $classid = $_POST['class_id'];
    $periodid = $_POST['period_id'];

    $sql = "INSERT INTO time_table(`course_id`, `user_id`, `periods_id`, `class_id`) 
    VALUES ('$courseid','$periodid','$classid','$userid')";
    
    if(mysqli_query($db, $sql)){
        echo "<script> alert('New timetable created successfully!');</script>";
        header('location:../pages/time_table.php'); 
    } else {
        echo "Error: " . mysqli_error($db);
    }
}
?>