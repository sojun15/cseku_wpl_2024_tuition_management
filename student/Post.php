<?php
include 'connection-db.php';
if (isset($_POST['signUp'])) {
    $student_name = $_POST['student-name'];
    $student_id = $_POST['student-id'];
    $prefered_subject = $_POST['prefered-subject'];
    $maximum_budget = $_POST['maximum-budget'];
    $learning_goal = $_POST['learning-goal'];
    $contact_details = $_POST['contact-details'];
    $teaching_style = $_POST['teaching-style'];
    $availability = $_POST['availability'];
    $additional = $_POST['additional'];
    $location = $_POST['location'];

    $innerQuery = "INSERT INTO student(Student_id,Student_name,Prefered_subject,Availability,Learning_goal,Maximum_budget,Contact_details,Additional,Teaching_style,Location) VALUES ('$student_id','$student_name','$prefered_subject','$availability','$learning_goal','$maximum_budget','$contact_details','$additional','$teaching_style','$location')";

    if ($conn->query($innerQuery) == True) {
        header("location: Student.php");
    } else {
        echo "Error" . $conn->error;
    }
}
