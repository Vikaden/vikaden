<?php
session_start();

if (isset($_POST['password']) && $_POST['password'] == 'yourpassword') {
    $_SESSION['logged_in'] = true;
    header('Location: downloads.php');
    exit();
}

if (isset($_GET['logout'])) {
    session_destroy();
    header('Location: index.php');
    exit();
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Login</title>
</head>
<body>
  <h1>Please Enter Password</h1>
  <form method="POST">
    <input type="password" name="password" required>
    <button type="submit">Login</button>
  </form>
</body>
</html>
