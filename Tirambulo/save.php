<?php
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $name = $_POST['name'];
    $age = $_POST['age'];
    $course = $_POST['course'];

    $data = "Name: $name | Age: $age | Course: $course\n";

    file_put_contents("students.txt", $data, FILE_APPEND);

    echo "<p>✅ Student registered successfully!</p>";
    echo "<a href='index.html'>Go Back</a>";
}
?>
