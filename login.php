<?php
$username = $_POST['username'];
$pwd = $_POST['password'];
if($username == 'admin' && password == 'admin') {
	echo "Success";
}else{
	echo "Fail";
}
?>