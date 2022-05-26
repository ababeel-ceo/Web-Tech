
<html>
<head>

<title>String Functions</title>
<style>
input
{
height:40px;
width:100px;
font-family:Verdana, Arial, Helvetica, sans-serif;
}
</style>

</head>
<body>
<h1><center>String Functions</center></h1>
<h2>
<form method="post" action="">
Enter the String:<input type="text" name="str"/>
<br/><br/><br/>
<input type="submit" value="Length" name="length" />
<input type="submit" value="Lower" name="lower" />
<input type="submit" value="Upper" name="upper" />
<input type="submit" value="Reverse" name="reverse" />
<input type="submit" value="Upper First" name="first" />
<input type="submit" value="Upper Words" name="words" />
<input type="submit" value="Repeatation" name="repeat" />
<input type="submit" value="Words Count" name="word" />
<input type="submit" value="Trim" name="trim" />
<br/><br/><br/>
</form>
<?php
if(isset($_POST['length']))
{

$str=$_POST['str'];
echo"Length of $str is ".strlen($str);
}
if(isset($_POST['lower']))
{
$str=$_POST['str'];
echo"Lower Case of $str is ".strtolower($str);
}
if(isset($_POST['upper']))
{
$str=$_POST['str'];
echo"Upper case of $str is ".strtoupper($str);
}
if(isset($_POST['reverse']))
{
$str=$_POST['str'];
echo"Reverse of $str is ".strrev($str);
}
if(isset($_POST['first']))
{
$str=$_POST['str'];

echo"Upper Case for the First letter of $str is ".ucfirst($str);
}
if(isset($_POST['words']))
{
$str=$_POST['str'];
echo"Upper Case for the First letter of every word $str is
".ucwords($str);
}
if(isset($_POST['repeat']))
{
$str=$_POST['str'];
echo"Repeatation of $str is ".str_repeat($str,3);
}
if(isset($_POST['word']))
{
$str=$_POST['str'];
echo"WordCount of $str is ".str_word_count($str);
}
if(isset($_POST['trim']))
{
$str=$_POST['str'];

echo"Repeatation of $str is ".trim($str);
}
?>
</body>
</html>