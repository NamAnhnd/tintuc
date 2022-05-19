<?php 
	trait NewsModel{
		//Lấy 1 bản ghi
		public function fetch($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("select * from tbl_news where id=:id");
			//thực hiện truy vấn
			$query->execute(array("id"=>$id));
			//trả về tổng số lượng bản ghi
			return $query->Fetch();
		}
		public function fetchAll($from, $pageSize){
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from tbl_news where category_id=$id order by id desc limit $from, $pageSize");
			//lấy tất cả kết quả trả về
			return $query->fetchAll();

		}
		//tính tổng số lượng bản ghi
		public function totalRecord(){
			$conn = Connection::getInstance();
			$id = isset($_GET["id"])&&is_numeric($_GET["id"])?$_GET["id"]:0;
			//thực hiện truy vấn
			$query = $conn->query("select id from tbl_news where category_id=$id");
			//lấy tất cả kết quả trả về
			return $query->rowCount();
		}
	}
 ?>