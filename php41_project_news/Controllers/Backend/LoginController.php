<?php 
//include file Model
	include "Models/Backend/LoginModel.php";
	class LoginController extends Controller{
					//sử dụng class LoginModel
		use LoginModel;
		public function index(){
			$this->renderHTML("Views/Backend/LoginView.php");
		
	}
	//khi ấn nút submit
		public function doLogin(){
			//gọi hàm lấy 1 bản ghi từ class model
			$record = $this->modelFetch();
			if(isset($record->email)){
			//gán session email
				$_SESSION["email"] = $record->email;
			}
			//quay trờ lại trnag index.php?controller=Backend
			header("location:index.php?area=Backend");
		}
	}
 ?>