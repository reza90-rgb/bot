<?php

if(strpos($message, "/register")===0 or strpos($message, "!register")===0 or strpos($message, ".register")===0){
sendaction($chatId, typing); 

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
$sql = "INSERT INTO persons (userid, role, username, credits) VALUES ('$userId', 'USER', '$username', '01')";
    $err = mysqli_error($link);
if(mysqli_query($link, $sql)){
    $result = "User Created Successfully";
}else{
    $result = "You Already Registered";
}
    $response = urlencode("<b> $result</b>");
  reply_to($chatId,$message_id,$keyboard,$result);
}

?>
