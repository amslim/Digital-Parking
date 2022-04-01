<?php



$con = mysqli_connect('localhost','root');

if($con){
    ?>
     <script>
         alert("Connection is fine")
</script>
<?php
}else{
    ?>
    <script>
         alert("Connection is not fine")
</script>
<?php
}


if($con){
    echo "Sign Up Confirmed";
}else{
    echo "Can't sign up";
}
mysqli_select_db($con, 'signup');

$name = $_POST['name'];
$email = $_POST['email'];
$phone = $_POST['phone'];
$password = $_POST['password'];

$pass = password_hash($password, PASSWORD_BCRYPT);

$emailquery = " select * from registration where email='$email' ";
$query = mysqli_query($con,$emailquery);

$emailcount = mysqli_num_rows($query);
if($emailquery>0){
     echo "Email already exists";
}else{
    $insertquery = " insert into registration (name, email, phone, password)
    values ('$name', '$email', '$phone', '$password') ";

}




mysqli_query($con,$insertquery);




?>