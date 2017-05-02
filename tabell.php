<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "folkomrostning";

$conn = new mysqli($servername, $username, $password, $dbname);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
} 
?>

<!DOCTYPE html>
<html>
<head>
</head>
<body>
    <table class="table table-strpied">
        <tr>
        <th><div>Id</div></th>
        <th><div>Förnamn</div></th>
        <th><div>Efternamn</div></th>
        </tr>
        <?php

$sql = "SELECT id, firstname, lastname FROM omrostning_namnlista";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    while($row = $result->fetch_assoc()) {
        echo "id: " . $row["id"]. " - Name: " . $row["firstname"]. " " . $row["lastname"]. "<br>";
    }
} else {
    echo "0 results";
}
$conn->close();
?>
        <tr>
        <td><?php echo $row['id'];?></td>
        <td><?php echo $row['firstnamn'];?></td>
        <td><?php echo $row['lastname'];?></td>
        </tr>

    </table>
</body>
</html>


