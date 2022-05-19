<?php 
	trait LoginModel{
		//lấy một bản ghi
		public function modelFetch(){
			$email = $_POST["email"];
			$password = $_POST["password"];
			//mã hóa password
			$password = md5($password);
			//----
			// lấy biến kết nối csdl
			$conn = connection::getInstance();
			//chuẩn bị truy vấn
			$query = $conn->prepare("select email,name from tbl_user where email=:mail and password=:pass");
			//thực hiện truy vẫn có truyền danh sách biến
			$query->execute(array("mail"=>$email,"pass"=>$password));
			//lấy một bản ghi
			$result = $query->fetch();
			return $result;	
		}
	}
 ?>