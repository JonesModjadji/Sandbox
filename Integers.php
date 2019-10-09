<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<title>Integers</title>
</head>
<body>
<?php 
$var1 =3;
$var2 =4;
?>
Basic Math:<?php echo((1+2+$var1)*$var2)/2-5;?>
<br/>
Absolute value:<?php echo abs(0-300);?>
<br/>
Exponential:<?php echo pow(2,8);?>
<br/>
Square Root:<?php echo sqrt(100);?>
<br/>
Moduler:<?php echo fmod(20,7);?>
<br/>
Random:<?php echo rand();?>
<br/>
Random(min,max):<?php echo rand(1,10);?>
<br/><br/>
+=:<?php $var2+=4; echo $var2?>
<br/>
-=:<?php $var2-=4; echo $var2?>
<br/>
*=:<?php $var2*=3; echo $var2?>
<br/>
/=:<?php $var2/=4; echo $var2?>
<br/><br/>
Increment: <?php $var2 += 1; echo $var2?>
<br/>
Increment2: <?php $var2 ++; echo $var2?>
<br/>
Decrement: <?php $var2 -= 1; echo $var2?>
<br/>
Decrement2: <?php $var2 --; echo $var2?>
<br/>
</body>
</html>