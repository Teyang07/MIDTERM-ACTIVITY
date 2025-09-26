<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Registration</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
    <div class="container fade-in">
        <h2>Student Registration Form</h2>
        <form action="save.php" method="post" class="slide-up">
            <label>ID Number:</label>
            <input type="text" name="id" required><br>

            <label>First Name:</label>
            <input type="text" name="firstname" required><br>

            <label>Last Name:</label>
            <input type="text" name="lastname" required><br>

            <label>Course:</label>
            <input type="text" name="course" required><br>

            <button type="submit" class="btn-animate">Register</button>
        </form>
        <br>
        <a href="display.php"><button class="btn-animate">Show Student Records</button></a>
    </div>

    <script>
        // Add small animation when form loads
        document.addEventListener("DOMContentLoaded", () => {
            document.querySelector(".slide-up").classList.add("show");
        });
    </script>
</body>
</html>