<?php



$con = mysqli_connect('localhost','root');

if($con){
    echo "Booking Confirmed";
}else{
    echo "No Connection";
}
mysqli_select_db($con, 'dp');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$vehicle = $_POST['vehicle'];
$date = $_POST['date'];
$hour = $_POST['hour'];
$min = $_POST['min'];
$ap = $_POST['ap'];

$query = " insert into userinfodata (name, email, phone, vehicle, date, hour, min, ap)
values ('$name', '$email', '$phone', '$vehicle', '$date', '$hour', '$min', '$ap') ";
?>
<script>
                location.replace("page7.html");

            </script>


<?php
echo "$query";

mysqli_query($con,$query);




?>