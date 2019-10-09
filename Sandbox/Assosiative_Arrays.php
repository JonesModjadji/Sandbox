<!DOCTYPE html PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN"
"http://www.w3.org/TR/html4/loose.dtd">

<html lang="en">
<head>
<title>Assosiative_Arrays</title>
</head>
<body>
<?php $associative = array("first_name" =>"Kevin","last_name"=>"Modjadji");?>
<br/>
<?php echo $associative["first_name"];?>
<br/>
<?php echo $associative["first_name"]." ".$associative["last_name"];?>
<br/><br/>
<?php $associative["first_name"] = "Larry";?>
<?php echo $associative["first_name"]." ".$associative["last_name"];?>
</body>
</html>