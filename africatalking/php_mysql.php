<?php
require('AfricasTalkingGateway.php');
 
$username   = "sandbox";            
$apikey     = "5c3350028b90259929735448c01796d9b12f765d3a18c5ef1b23106082872934";

$recipients = "+256787665544";

$gateway    = new AfricasTalkingGateway($username, $apikey,"sandbox");

$gateway->sendMessage($recipients, "It has worked now");  