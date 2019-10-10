<?php
$conn=mysqli_connect("localhost", "root", "");

$db_conn= mysqli_select_db($conn, "learn");

if(isset ($_POST['save'])){

$question = $_POST['question'];
$qid = uniqid();


$sql = "insert into mcq(eid,question,qid) values('$eid', '$question','$qid')";
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

<p>Enter question:<input type='text' name='question'/></p>
<p><input type='submit' name='save' value='Save'/></p>

</form>