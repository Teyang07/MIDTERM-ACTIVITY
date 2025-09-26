<?php
$file = "students.txt";
$cleared = false;

if (isset($_POST['clear'])) {
    file_put_contents($file, "");
    $cleared = true;
}

$students = file_exists($file) ? file($file, FILE_IGNORE_NEW_LINES) : [];
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Records</title>
    <link rel="stylesheet" href="style.css">
</head>
<body>
<?php if ($cleared): ?>
    <!-- Show only cleared message -->
    <div class="container">
        <h2>✅ All records have been cleared.</h2>
        <form action="display.php" method="get">
            <button class="btn-animate">OK</button>
        </form>
    </div>
<?php else: ?>
    <div class="container">
        <h2>Student Records</h2>
        <?php if (!empty($students)): ?>
            <ul class="records-list">
                <?php foreach ($students as $student): ?>
                    <li class="record-item"><?= htmlspecialchars($student) ?></li>
                <?php endforeach; ?>
            </ul>
        <?php else: ?>
            <p class="no-data">No student information added yet.</p>
        <?php endif; ?>

        <form method="post">
            <button type="submit" name="clear" class="btn-animate danger">Clear All Records</button>
        </form>
        <br>
        <a href="index.php"><button class="btn-animate">Back to Registration</button></a>
    </div>
<?php endif; ?>
</body>
</html>