<?php
/*
Author: Javed Ur Rehman
Website: http://www.allphptricks.com/
*/

include("auth.php"); //include auth.php file on all secure pages ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <title>Welcome Home</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/css/bootstrap.min.css">
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.1/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="css/style.css">
</head>
<body>
<div class="form">
    <p style="float: left">Welcome <?php echo $_SESSION['username']; ?>!</p>
    <p><a href="dashboard.php">Dashboard</a></p>
    <a href="logout.php">Logout</a>
</div>
</body>
</html>
