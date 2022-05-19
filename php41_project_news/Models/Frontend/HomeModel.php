<?php 
	trait HomeModel{
		//lay danh sach cac ban ghi
		public function fetchAllCategory(){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_category where id in (select category_id from tbl_news where tbl_category.id=tbl_news.category_id) order by id desc");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay danh sach cac ban ghi
		public function fetchAllOtherNews($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_news where category_id = $category_id order by id desc limit 1,3");
			//lay tat ca ket qua tra ve
			return $query->fetchAll();
		}
		//lay danh sach cac ban ghi
		public function fetchFirstNews($category_id){
			//lay bien ket noi csdl
			$conn = Connection::getInstance();
			//thuc thi truy van
			$query = $conn->query("select * from tbl_news where category_id = $category_id order by id desc limit 0,1");
			//lay mot ket qua tra ve
			return $query->fetch();
		}
	}
 ?>