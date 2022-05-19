<?php 
	//kết nối csdl
	class Connection{
		//hàm kết nối csdl, trả về biến kết nối
		public static function getInstance(){
			//Kết nối CSDL, trả về biến kết nối
			$conn= new PDO("mysql:host=localhost;dbname=php41_project_news","root","");
			//set charset để lấy dữ liệu theo kiểu unicode
			$conn->exec("set names 'utf8'");
			//đặt chế độ lấy dữ liệu mặc định, object hoặc array or assoc
			$conn->setAttribute(PDO::ATTR_DEFAULT_FETCH_MODE,PDO::FETCH_OBJ);
			return $conn;
		}
	}
	 // Connection::getInstance();

 ?>