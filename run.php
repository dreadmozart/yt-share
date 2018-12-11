<?php
/**
 * Created by PhpStorm
 * User: donztobs
 * Date: 10/27/17
 * Time: 10:55 PM
 */


// set parameters here
$videoId = "V_qHRAJzEVs";
$email = "npogurova@gmail.com";
$password = "Cektatech1488!";
$share_emails = "gusarovarseniy@gmail.com, dreadmozart@gmail.com";
$notify_users = true;


// include logic file
include "functions.php";


// 1st load page
$page = loadPage($videoId);

// login and share
if(!isLoggedin()) signIn($email, $password);
share($videoId, $share_emails, $notify_users);

