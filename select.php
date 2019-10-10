<?php
$conn=mysqli_connect("localhost", "root", "");

$db_conn= mysqli_select_db($conn, "learn");


if(isset ($_POST["save"])){
    $department = $_POST["department"];
    $year = $_POST["year"];
    
    $eid = uniqid();
    
    $sql = "insert into depart_info(year, eid, department) values('$year', '$eid', '$department')";
    $query = mysqli_query($conn, $sql);
    if($query){
    echo "inserted successfully";
    header("Location:mcq.php");
    }
    else{
    echo "error !";
    }
    }

?>



<form method="post">
<select name="department">
<option value="cse">Computer Science</option>
<option value="it">Information Technology</option>
<option value="ece">Electronics and communication</option>
<option value="ee">Electrical Engineering</option>
</select>

<select name="year">
<option value="1">1st</option>
<option value="2">2nd</option>
<option value="3">3rd</option>
<option value="4">4th</option>
</select>
<br><br>
<input type="checkbox"  value="mcq">Mcq
<input type="checkbox"  value="coding">Coding
<input type="checkbox"  value="questions">Questions
<input type="checkbox"  value="graph">Graph<br><br>
<input type="submit" value="submit" name="save">
</form>
