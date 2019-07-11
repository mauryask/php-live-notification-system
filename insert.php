<?php
include_once('connection.php');
session_start();
$query='';
if(isset($_POST['topic']) && isset($_POST['msg']))
{
      $topic = $_POST['topic'];
      $msg = $_POST['msg'];

      if(empty($topic) || empty($msg))
      {
         echo 'all fields are required';
      }
      else
      {
        $query = "insert into notify (topic, msg) values ('$topic','$msg')";
        
        if(mysqli_query($conn, $query))
        {
            echo 'Notification sent Successfully';
        }
        else
        {
            echo 'Unable to send notification';
        }
      }

}
    else
    {
      header('location:index.php');
    }

?>