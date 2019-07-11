<?php
/* ===================  get total number of notifications   ==================== */

include_once('connection.php');

$sql = "SELECT * FROM notify";
$result = $conn->query($sql);
$num_row= $result->num_rows;

if($num_row>0)
{  
    
    echo $num_row;
}

?>