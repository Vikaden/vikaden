<?php
session_start();

if (!isset($_SESSION['logged_in'])) {
    header('Location: login.php');
    exit();
}
?>

<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Download Page</title>
</head>
<body>
  <h1>Welcome to the Download Page</h1>
  <ul>
    <li><a href="files/file1.pdf" download>File 1</a></li>
    <li><a href="files/file2.pdf" download>File 2</a></li>
    <li><a href="files/file3.pdf" download>File 3</a></li>
  </ul>
  <a href="login.php?logout=true">Logout</a>
</body>
</html>
