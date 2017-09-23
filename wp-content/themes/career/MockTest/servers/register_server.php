<?php
/**
 * Created by PhpStorm.
 * User: LordRahl
 * Date: 2/23/17
 * Time: 2:50 PM
 */

include("../vendor/autoload.php");

$phone=$_POST['phone'];

use GuzzleHttp\Client;
$client=new Client();

///mobichurch/user/
//$url="localhost:8200/api/mobichurch/user";
$url="http://campaign.atp-sevas.com/MobiChurch/public/index.php/api/mobichurch/user";

$response=$client->post($url,['json'=>['name'=>'new user','phone_number'=>$phone]]);
$json=$response->getBody()->getContents();

$data=json_decode($json,true);

if($data['status']!=='success'){
    echo json_encode(['status'=>'error','desc'=>$data['description']]);
    exit;
}
$message=$data['message'];
$_SESSION['user_id']=$message['user_id'];

echo json_encode(['status'=>'success','user_id'=>$_SESSION['user_id']]);
exit;