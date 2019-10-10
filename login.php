<?php
session_start();
$conn=mysqli_connect("localhost", "root", "");

$db_conn= mysqli_select_db($conn, "learn");
if(isset($_POST['login']))
{
    $email=$_POST['email'];
    $password=$_POST['password'];
    $sql="select email, password from info where email='$email' and  password='$password'";
    $query = mysqli_query($conn,$sql);
    echo mysqli_num_rows($query);
    if(mysqli_num_rows($query)>=1)
    {
        $_SESSION['email']=$email;
        header("Location:select.php");
    }
    else{
        echo"email password do not match";
    }

}
?>
<form action="" method="post">
    <input type="text" name="email" placeholder="Enter your username" required>
    <input type="password" name="password" placeholder="Enter your password" required>
    <input type="submit" value="Submit" name="login">
</form>
