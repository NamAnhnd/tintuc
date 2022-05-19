<?php 
	//start session
	session_start();
	//load file Connection.php -> kết nối cơ sở dũ liệu
	include "App/Connection.php";
	//load file Controller -> để điều phối view, xác thực đăng nhập...
	include"App/Controller.php";
	//load file Routing.php -> điều phối url nhằm load MVC
	include"App/Routing.php";
 ?>