<!DOCTYPE html>
<html>
<head>
<title>Dealer Order</title>
<style>
table {
border-collapse: collapse;
width: 100%;
color: #588c7e;
font-family: monospace;
font-size: 25px;
text-align: left;
}
th {
background-color: #588c7e;
color: white;
}
tr:nth-child(even) {background-color: #f2f2f2}
</style>
</head>
<body>
<table>
<tr>
<th>quantity</th>
<th>uname</th>
<th>address</th>
<th>action</th>
</tr>
<?php
$conn = mysqli_connect("localhost", "root", "hari", "dealer");
// Check connection
if ($conn->connect_error) {
die("Connection failed: " . $conn->connect_error);
}
$sql = "SELECT  quantity, uname, address FROM d_bio";
$result = $conn->query($sql);
if ($result->num_rows > 0) {
// output data of each row
while($row = $result->fetch_assoc()) {
echo "<tr><td>" . $row["quantity"]. "</td><td>" . $row["uname"] . "</td><td>"
. $row["address"].  "</td><td>" ."<a href='delete.php?quantity=$row[quantity]'>delete</a>"."</td></tr>";

}
echo "</table>";
} else { echo "0 results"; }
$conn->close();
?>
</table>
</body>
</html>