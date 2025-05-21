<?php
session_start();
?>
<?php
$con = mysqli_connect('localhost','root','','hbwebsite');
if(isset($_POST['login'])){
    $Usertype=$_POST['usertype'];
    $email=$_POST['email'];
     $password=$_POST['password'];
     if($Usertype=='Client'){
        $query = "SELECT * FROM clients_details WHERE email = '$email'";
    $results = $con->query($query);
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{
        if ($results->num_rows > 0 ){
            $row = $results->fetch_assoc();
            if ($row['Pass'] == $password && $row['email']==$email){
                $_SESSION['email']=$row['email'];
                header("Location: booknow.php");
            }
            else{
                echo("wrong pass");
            }
        }
        else{
            echo("unregistered");
        }
     }
    
    }elseif($Usertype=="Admin"){
        $Query="SELECT * FROM admin_cred WHERE email='$email'";
        $results = $con->query($Query);
    if (!$results){
        echo("Error is " . mysqli_error($con));
    }
    else{
        if ($results->num_rows > 0 ){
            $row = $results->fetch_assoc();
            if ($row["admin_pass"] == $password && $row["email"]==$email){
                header("Location: admin/ManageRooms.php");
            }
            else{
                echo("wrong pass");
            }
        }
        else{
            echo("unregistered");
        }
    }
}
}