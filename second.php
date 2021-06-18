<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Feedback</title>
</head>
<body>
<?php
   if(isset($_POST['insert']))
  {
  $con = mysqli_connect("localhost","root","");
  if($con)
 {
//echo "Mysql connection ok..!<br>";
mysqli_select_db($con,"feedback");
$name = strval($_POST['name']);
$phone = intval($_POST['phone']);
$email = strval($_POST['email']); 
$feed = strval($_POST['feed']);
$insert = "insert into feedback values('$name','$phone','$email','$feed')";
if(mysqli_query($con,$insert))
{
echo "Your Feedback was submitted!<br>";

}
else
{
	echo "Data not inserted..!<br>".mysqli_error($con);
}
mysqli_close($con);
}
}
?>
   
</body>
</html>