<?php

$userArr=array("aaa","bbb","ccc","ddd");
$username=$_REQUEST["user"];

if(in_array($username,$userArr)){
	 echo true;
}else{
	echo  false;
}




?>