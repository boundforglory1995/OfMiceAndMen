<?php
include('includes/db.php');
include('views/head.php');
include('views/nav.php');
include('views/body.php');
$action = isset($_GET['action']) ? $_GET['action'] : "home";

switch($action){

case "pictures":
include('logic/getPictures.php');
include('views/pictures.php');
break;

case "home":
include('views/homeInformation.php');
break;

case "merch":
include('logic/getMerch.php');
include('views/merch.php');
break;

}