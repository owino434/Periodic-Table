<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "periodtable";
// Create connection
$conn = new mysqli($servername, $username, $password, $dbname);
// Check connection
if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}
/* @var $fname type */

$sql = "SELECT Atomicno,RAM,Symbol FROM element WHERE Atomicno='11'";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
	echo "<table>";
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "<tr>     <td>".$row["Atomicno"]."</td>
	               <td> </td>
				   <td>".$row["RAM"]."</td>
	     </tr>
	
	     <tr> <td></td>
		      <td>".$row["Symbol"]." </td>
			  <td></td>
		</tr>";
	
    }
	echo "</table>";
}else {
     echo "0 results";
}
$conn->close();

?>
