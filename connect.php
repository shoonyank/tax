<?php 
session_start();
//connect.php
$server	    = 'localhost';
$username	= 'root';
$password	= '';
$database	= 'SHANTI_INDUSTRIES';
$cxn=new mysqli($server,$username,$password,$database);
if($cxn->connect_error)
{
 	echo "Error: could not establish database connection";
}
function safe($value){
	$server	    = 'localhost';
	$username	= 'root';
	$password	= '';
	$database	= 'SHANTI_INDUSTRIES';
	$cxn=new mysqli($server,$username,$password,$database);
   return $cxn->real_escape_string($value);
}
?>