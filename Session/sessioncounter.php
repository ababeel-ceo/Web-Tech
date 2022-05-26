<html>
<head>
<title> Session</title>
</head>
<body>
<h2>Session Counter</h2>
<font face="Verdana">
<?php
session_start();
if(!isset($_SESSION['counter']))
{
$_SESSION['counter']=1;
}
else
{
$_SESSION['counter']++;
}
echo"Page Views:".$_SESSION['counter'];
echo"<br/><br/>";
?>
<?php
echo"User is:".$_SESSION["user"];
?>
<a href="session1.php">Go Front Page</a><br/><br/><br/>
<a href="destroy.php">Destory Session</a>
</body>
</html>