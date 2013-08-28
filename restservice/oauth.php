<?php

// Include the auto loading hooks for RESTling and our own classes
include('include/RESTling/contrib/Restling.auto.php');
include('include/PowerTLA/PowerTLA.auto.php');

require_once("include/ilServiceInit.php");     // the LMS functions
require_once("include/class.AuthService.php"); // The service logic

$plugins = array("oauth" => array("UIComponent", "uiroa", "OAuthREST"));

// TODO: wrapper that decides which LMS initialization has to be used. 
$VLEAPI = new IliasServiceInit($plugins); 
$service = new AuthService($VLEAPI);

$service->run();

?>