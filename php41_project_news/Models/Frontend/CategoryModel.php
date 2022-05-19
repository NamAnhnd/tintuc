<?php 
	trait CategoryModel{
		//lấy danh sách các bản ghi
		public function fetchAll(){
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from tbl_category order by id desc");
			//lấy tất cả kết quả trả về
			return $query->fetchAll();

		}
	}
 ?>