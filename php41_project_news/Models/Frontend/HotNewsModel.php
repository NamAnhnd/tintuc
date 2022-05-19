<?php 
	trait HotNewsModel{
		//lấy một bản ghi
		public function fetchAll(){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->query("select * from tbl_news where hotnews=1 order by id desc limit 0,4");
			return $query->fetchAll();
		}
	}
 ?>