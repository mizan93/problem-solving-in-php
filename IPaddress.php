<?php
//whether ip is from share internet
if (!empty($_SERVER['HTTP_CLIENT_IP'])) {
    # code...
    $ip_address=$_SERVER['HTTP_CLIENT_IP'];
}
//whether ip is from proxy
elseif (!empty($_SERVER['HTTP_X_FORWARDED_FOR'])) {
    # code...
     $ip_address = $_SERVER['HTTP_X_FORWARDED_FOR'];

}
//whether ip is from remote address
else{
$ip_address=$_SERVER['REMOTE_ADDR'];
}
echo "Your User Agent is :" . $_SERVER ['HTTP_USER_AGENT'];

echo $ip_address;

?>