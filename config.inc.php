<?php
$db_username        = 'root'; //MySql database username
$db_password        = 'root'; //MySql dataabse password
$db_name            = 'lrs'; //MySql database name
$db_host            = '52.86.217.182:5432'; //MySql hostname or IP

$currency			= '&#8377; '; //currency symbol
$shipping_cost		= 1.50; //shipping cost
$taxes				= array( //List your Taxes percent here.
							'VAT' => 12, 
							'Service Tax' => 5,
							'Other Tax' => 10
							);

$mysqli_conn = new mysqli($db_host, $db_username, $db_password,$db_name); //connect to MySql
if ($mysqli_conn->connect_error) {//Output any connection error
    die('Error : ('. $mysqli_conn->connect_errno .') '. $mysqli_conn->connect_error);
}
