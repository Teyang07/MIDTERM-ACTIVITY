<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <title>Student Registration Form</title>
  <style>
    body {
      font-family: Arial, sans-serif;
      background-image:url("https://img.freepik.com/premium-photo/dreamy-celestial-sky-background-image_53876-1091331.jpg?semt=ais_hybrid&w=740&q=80");
      background-repeat: no-repeat;
      background-size: cover; /*make image cover the whole page */
      display: flex;
      justify-content: center;
      align-items: flex-start;
      height: 100vh;
    }
    .container {
      background-image:url("https://s2.aptocdn.com/www.fashionchingu.com/wp-content/uploads/2025/06/BTS-Digital-Photocard-Holder-DIY6-1.jpg  ");
      background-size: cover; /*make image cover the page */
      padding: 20px 30px;
      border-radius: 12px;
      box-shadow: 0 4px 10px rgba(227, 108, 128, 0.1);
      width: 350px;
    }
    h2 {
      text-align: center;
      margin-bottom: 20px;
      color: #dfa6f2ff;
    }
    label {
      display: block;
      margin: 10px 0 5px;
      font-weight: bold;
    }
    input {
      width: 100%;
      padding: 8px;
      border: 1px solid #8dd9eaff;
      border-radius: 6px;
      margin-bottom: 15px;
    }
    button {
      width: 100%;
      padding: 10px;
      border: none;
      border-radius: 6px;
      cursor: pointer;
      font-size: 16px;
    }
    .register-btn {
      background: #87a8daff;
      color: white;
      margin-bottom: 10px;
    }
    .clear-btn {
      background: #87a8daff;
      color: white;
    }
  </style>
</head>
<body>
  <div class="container">
    <h2>Student Registration</h2>
    <form action="save.php" method="post">
      <label>Full Name:</label>
      <input type="text" name="name" required>

      <label>Age:</label>
      <input type="number" name="age" required>

      <label>Course:</label>
      <input type="text" name="course" required>

      <button type="submit" class="register-btn">Register</button>
    </form>

    <form action="clear.php" method="post">
      <button type="submit" class="clear-btn">Clear File</button>
    </form>
  </div>
</body>
</html>