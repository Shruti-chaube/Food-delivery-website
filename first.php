<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Now</title>
    <link rel ="stylesheet"href="style/first.css">
</head>
<body>
 <?php
   if(isset($_POST['insert']))
  {
  $con = mysqli_connect("localhost","root","");
  if($con)
 {
//echo "Mysql connection ok..!<br>";
mysqli_select_db($con,"website");
$name = strval($_POST['name']);
$phone = intval($_POST['phone']);
$email = strval($_POST['email']); 
$choice = strval($_POST['choice']);
$qua = intval($_POST['qua']);
$add = strval($_POST['add']);
$insert = "insert into website(Name,PhoneNo,Email,Choice,Quantity,Address) VALUES('$name','$phone','$email','$choice','$qua','$add')";
if(mysqli_query($con,$insert))
{
    
echo "Your Order has been placed!<br>";

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