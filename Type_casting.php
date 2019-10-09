<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<title>Type casting</title>
</head>
<body>
Type juggling
<br/><br/>
<?php 
$count = "2";
?>
Type1:<?php echo gettype ($count);?>
<br/>
<?php $count += 3;?>
Type2:<?php echo gettype ($count);?>
<br/>
<?php $cats = "I have ".$count."cats.";?>
Type3:<?php echo gettype ($cats);?>
<br/><br/>
Type casting
<br/><br/>
<?php settype($count,"Integer");?>
Count:<?php echo gettype($count);?>
<br/>
<?php $count2 =(string)$count;?>
Count1.2:<?php echo gettype($count);?>
<br/>
Count2:<?php echo gettype($count2);?>
<br/><br/>
<?php $test1 = 3;?>
<?php $test2 = 3;?>
<?php settype($test1,"string");?>
<?php(string)$test2;?>
Test1:<?php echo gettype($test1);?>
<br/>
Test2:<?php echo gettype($test2);?>
</body>
</html>