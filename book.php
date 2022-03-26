<?php
$user = 'root';
$pass = '';
$db = 'backend';


$link = mysqli_connect('localhost', $user, $pass, $db) or die("Unable to connect");

echo "great work";

$name = mysqli_real_escape_string($link, $_REQUEST['name']);
$city = mysqli_real_escape_string($link, $_REQUEST['city']);
$state = mysqli_real_escape_string($link, $_REQUEST['state']);
$phone = mysqli_real_escape_string($link, $_REQUEST['phone']);
$price = mysqli_real_escape_string($link, $_REQUEST['price']);
$email = mysqli_real_escape_string($link, $_REQUEST['email']);


$sql = "INSERT INTO `book` (`name`, `city`, `state`, `phone`, `price`, `email`, `dt`) VALUES ('$name', '$city', '$state', '$phone', '$price', '$email', current_timestamp())";

$result = mysqli_query($link, $sql);

if($result)
{
    echo "    Data inserted";
}
else
 echo " Error" .mysqli_error($link);
  

mysqli_close($link);
 



?>