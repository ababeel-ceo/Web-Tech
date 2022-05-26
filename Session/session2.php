<html>
<head>
<title> Session</title>
</head>
<?php
session_start();
?>
<body>
<h2>Session Name</h2>
<?php
echo"User is:".$_SESSION["user"];
?>
<br/><br/>
<a href="sessioncounter.php">Session Counter</a>
</body>
</html>
