<?php
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    $id = $_POST['id'];
    $firstname = $_POST['firstname'];
    $lastname = $_POST['lastname'];
    $course = $_POST['course'];

    // Save format
    $student = "ID: $id | First Name: $firstname | Last Name: $lastname | Course: $course";
    file_put_contents("students.txt", $student . PHP_EOL, FILE_APPEND);
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Saved</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<div class="container">
    <h2>✅ Student Registered Successfully!</h2>
    <a href="index.php"><button class="btn-animate">Back to Registration</button></a>
    <form action="display.php" method="get" style="margin-top:10px;">
        <button type="submit" name="show" class="btn-animate">Show Student Records</button>
    </form>
</div>
</body>
</html>