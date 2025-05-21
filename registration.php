<?php
$name=$_POST['name'];
$email=$_POST['email'];
$phonenumber=$_POST['number'];
$picture=$_POST['picture'];
$address=$_POST['address'];
$pincode=$_POST['pincode'];
$DOB=$_POST['dob'];
$password=$_POST['password'];
$Status="No Booking";
$con = mysqli_connect('localhost','root','','hbwebsite');
if(mysqli_connect_error()){
    die("Connection to database failed".mysqli_connect_errno());
}
else {
    $results = mysqli_query($con,"INSERT INTO clients_details(Username,email,phone_number,picture,addres,pincode,DOB,Pass,RoomBooked)values('$name','$email','$phonenumber','$picture', '$address','$pincode','$DOB','$password','$Status')");
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{echo 'seccesful';}
}
?>