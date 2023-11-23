<?php
$name = $_POST['uname'];
$phone = $_POST['pno'];
$email = $_POST['em'];

$con = mysqli_connect("localhost","root","");
mysqli_select_db($con,"mydb");
// if($con)
// echo "connected";
// else
// echo "not connected";
$query = "INSERT INTO signup_info VALUES('$name','$phone','$email')";

mysqli_query($con,$query);

$query = "SELECT * FROM signup_info";
$result = mysqli_query($con,$query);

echo "<table border='2' bgcolor='skyblue'>
<tr>
<th>Name</th><th>Phone</th><th>Email</th>
</tr>
";
while($rows = mysqli_fetch_array($result))
{
    echo "
    <tr>
    <td>$rows[0]</td>
    <td>$rows[1]</td>
    <td>$rows[2]</td>
    </tr>
    ";
}
echo "</table>";
?>