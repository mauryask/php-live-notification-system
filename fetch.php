<?php
include_once('connection.php');

$sql = "SELECT * FROM notify";
$result = $conn->query($sql);
$num_row= $result->num_rows;

if($num_row>0)
{  
    
    echo $num_row;
}

/*
if (num_rows > 0) {
    // output data of each row
    while($row = $result->fetch_assoc()) {
    echo "id: " . $row["id"]. "  Notification: " . $row["topic"]."<br>";      
    }
} else {
    echo "0 results";
}*/

?>