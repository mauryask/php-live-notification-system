<?php
/* ===================  get notifications   ==================== */
include_once('connection.php');

$sql = "SELECT * FROM notify";
$result = $conn->query($sql);
$num_row= $result->num_rows;

    if($num_row>0)
    {
        while($row = $result->fetch_assoc()) 
        {
        echo "<div class='notx' >".'<span>'.$row['topic'].'</span>' ."<br>". $row["msg"].        
         "</div>";      
        }
    } 
    else 
    {
        echo "0 results";
    }
?>