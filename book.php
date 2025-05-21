<?php
session_start();
?>
<?php
$con = mysqli_connect('localhost','root','','hbwebsite');
if(isset($_POST['StandardRoom'])){
    $Status="standard";
    $newState="Booked";
    $email=$_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$Status' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms where RoomType='$Status'";

$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];

$zero=0;
if($quantity==$zero){
    $qry="UPDATE rooms set statuses='$newState' where RoomType='$Status'";
    mysqli_query($con,$qry);
    echo"All Standard Rooms are Booked Check other Rooms";
}else{
    $num=1;
$Quantity=$quantity-$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
    $rez=mysqli_query($con,$qury);
    echo"successfully booked";
}

}
elseif(isset($_POST['cancel'])){
    $Status="standard";
    $state="No Rooms Booked";
    $stat="UnBooked";
    $email = $_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$state' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms";
$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];
$num=1;
$Quantity=$quantity+$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
if($rez=mysqli_query($con,$qury)){
    echo"successfully cancelled";
}
if($row['quantity']>0){
    $qry="UPDATE rooms set statuses='$stat' where RoomType='$Status'";
    mysqli_query($con,$qry);
}


}
      

if(isset($_POST['VIP'])){
    $Status="vip";
    $stat="UnBooked";
    $newState="Booked";
    $email = $_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$Status' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms where RoomType='$Status'";
$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];

$zero=0;
if($quantity==$zero){
    $qry="UPDATE rooms set statuses='$newState'where RoomType='$Status'";
    mysqli_query($con,$qry);
    echo"All VIP Rooms are Booked Check other Rooms";
}else{
    $num=1;
$Quantity=$quantity-$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
    $rez=mysqli_query($con,$qury);
    echo"successfully booked";
}

}
elseif(isset($_POST['cancelVIP'])){
    $Status="vip";
    $stat="Unbooked";
    $state="No Rooms Booked";
    $email = $_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$state' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms WHERE RoomType='$Status' ";
$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];
$num=1;
$Quantity=$quantity+$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
if($rez=mysqli_query($con,$qury)){
    echo"successfully cancelled";
}
if($row['quantity']>0){
    $qry="UPDATE rooms set statuses='$stat' where RoomType='$Status'";
    mysqli_query($con,$qry);
}

}
      



if(isset($_POST['ConferenceRoom'])){
    $Status="conference";
    $newState="Booked";
    $email = $_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$Status' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms where RoomType='$Status'";
$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];

$zero=0;
if($quantity==$zero){
    $qury="UPDATE rooms set statuses='$newState'where RoomType='$Status'";
mysqli_query($con,$qury);
    echo"All Conference Rooms are Booked Check other Rooms";
}else{
    $num=1;
$Quantity=$quantity-$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
    $rez=mysqli_query($con,$qury);
    echo"successfully booked";
}

}
elseif(isset($_POST['CancelConference'])){
    $Status="conference";
    $stat="UnBooked";
    $state="No Rooms Booked";
    $email = $_SESSION['email'];
    $query="UPDATE clients_details set RoomBooked = '$state' WHERE email='$email'";
    $result=mysqli_query($con,$query);

$qery="SELECT * From rooms WHERE RoomType='$Status' ";
$res=mysqli_query($con,$qery);

$row=mysqli_fetch_assoc($res);
$quantity=$row['quantity'];
$num=1;
$Quantity=$quantity+$num;
$qury="UPDATE rooms set quantity='$Quantity' where RoomType='$Status'";
if($rez=mysqli_query($con,$qury)){
    echo"successfully cancelled";
}

if($row['quantity']>0){
    $qry="UPDATE rooms set statuses='$stat' where RoomType='$Status'";
    mysqli_query($con,$qry);
}

}
      
if(isset($_POST['logout'])){
    session_unset();
    session_destroy();
    header("location : index.php");
    exit;

}





?>