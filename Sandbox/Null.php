<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<title>Null</title>
</head>
<body>
<?php 
$var1=null;
$var2="";
?>
Var1 null?:<?php echo is_null($var1);?>
<br/>
Var2 null?:<?php echo is_null($var2);?>
<br/><br/>
Var1 is set?:<?php echo isset($var1);?>
<br/>
Var2 is set?:<?php echo isset($var2);?>
<br/><br/>
Var1 is empty?:<?php echo empty($var1);?>
<br/>
Var2 is empty?:<?php echo empty($var2);?>
<br/>
</body>
</html>