<html>
<head>
<title> Cookies</title>
</head>
<?php
$cookie_name="user";
$cookie_value="Abdulla";
setcookie($cookie_name,$cookie_value,time()+(86400*30),"/");
?>
<body>
<h2><font face="Verdana">Cookies in PHP<br/><br/></h2>
<?php
if (!isset($_COOKIE[$cookie_name]))
{
echo "Cookie named ".$cookie_name." is not set!<br/><br/>";
}
else
{
echo "Cookie named ".$cookie_name." is set!<br/><br/>";
echo "Value is:".$_COOKIE[$cookie_name];
}
?><br/><br/>
<p><strong>Note:</strong>You might have to reload the page to the
value of the cookie</p>
</font>
</body></html>