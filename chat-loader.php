<?php
  $user='abhishek';
  $password='abd';
  $host="localhost";
  $db="chatbox";
 $con= mysqli_connect($host,$user,$password,$db) or die();
 
$query=" SELECT msg,sender_id,time FROM chat ORDER BY time DESC";
$query_run=mysqli_query($con,$query);

$data = array(array());
while ($row = mysqli_fetch_assoc($query_run)) {
    $data[] = array(
        'time' =>$row['time'],
        'sender_id' => $row['sender_id'],
        'msg' => $row['msg'],
    );
}
$json_data = json_encode($data);
echo $json_data;


?>