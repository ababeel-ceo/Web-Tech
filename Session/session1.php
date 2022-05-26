<html>
<head>
<title> Session</title>
</head>
<?php
session_start();
?>
<body>
<h2>Session Creation</h2>
<?php
$_SESSION["user"]="Abdulla";
echo"Session Information Created Successfully";
?>
<a href="session2.php">Visit the Next Page</a>
</body>
</html>
