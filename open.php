<?php
$conn=mysqli_connect("localhost", "root", "");

$db_conn= mysqli_select_db($conn, "learn");

if(isset ($_POST['save'])){
$name = $_POST['name'];
$password = $_POST['password'];
$email = $_POST['email'];
$branch = $_POST['branch'];

$sql = "insert into info(name, password, email, branch) values('$name', '$password', '$email', '$branch')";
$query = mysqli_query($conn, $sql);
if($query){
echo "inserted successfully";

}
else{
echo "error !!!!!! !";
}
}
?>

<form action='' method='post'>

<p>Enter name:<input type='text' name='name'/></p>
<p>Enter password:<input type='password' name='password'/></p>
<p>Email:<input type='text' name='email'/></p>
<p>branch:<input type='text' name='branch'/></p>

<p><input type='submit' name='save' value='Save'/></p>

</form>
