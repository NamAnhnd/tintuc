<?php 
	class LogoutController {
		public function index(){
			//hủy các giá trị
		unset($_SESSION["email"]);
		//quay trở về trang index.php?area=backend
		header("location:index.php?area=backend");
		}
	}
 ?>