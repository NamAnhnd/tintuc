<?php 
	trait NewsModel{
		//lấy danh sách các bản ghi: từ bẩn ghi nào đến bản ghi nào
		public function fetchAll($from, $pageSize){
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select * from tbl_news order by id desc limit $from, $pageSize");
			//lấy tất cả kết quả trả về
			return $query->fetchAll();

		}
		//tính tổng số lượng bản ghi
		public function totalRecord(){
			$conn = Connection::getInstance();
			//thực hiện truy vấn
			$query = $conn->query("select id from tbl_news");
			//lấy tất cả kết quả trả về
			return $query->rowCount();
		}
		//lấy một bản ghi
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
		public function Update($id){
			$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hotnews = isset($_POST["hotnews"]) ? 1:0;
			//lay doi tuong ket noi
			$conn = Connection::getInstance();
			//update ban ghi
			$query = $conn->prepare("update tbl_news set name=:name,category_id=:category_id,description=:description,content=:content,hotnews=:hotnews where id=:id");
			//thực hiện truy vấn
			$query->execute(array("name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews,"id"=>$id));
			
		//neu user upload anh
			if($_FILES["img"]["name"] != ""){
				//---
				//lay anh cu de xoa
				$query = $conn->prepare("select img from tbl_news where id=:id");
				$query->execute(array("id"=>$id));
				//lay mot ban ghi
				$old_img = $query->fetch();
				if(isset($old_img->img)&&$old_img->img!=""&&file_exists("Assets/upload/news/".$old_img->img))
					unlink("Assets/upload/news/".$old_img->img);
				//---
				$img = time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/upload/news/$img");
				//update field img
				$query = $conn->prepare("update tbl_news set img=:img where id=:id");
				$query->execute(array("img"=>$img,"id"=>$id));
			}			

		}
			public function Insert(){
				$name = $_POST["name"];
			$category_id = $_POST["category_id"];
			$description = $_POST["description"];
			$content = $_POST["content"];
			$hotnews = isset($_POST["hotnews"]) ? 1:0;
			$img = "";
			//neu user upload anh
			if($_FILES["img"]["name"] != ""){
				$img = time().$_FILES["img"]["name"];
				//upload anh
				move_uploaded_file($_FILES["img"]["tmp_name"], "Assets/upload/news/$img");				
			}
			//lay doi tuong ket noi
			$conn = Connection::getInstance();
			//update ban ghi
			$query = $conn->prepare("Insert into tbl_news set name=:name,category_id=:category_id,description=:description,content=:content,hotnews=:hotnews,img=:img");
			//thực hiện truy vấn
			$query->execute(array("name"=>$name,"category_id"=>$category_id,"description"=>$description,"content"=>$content,"hotnews"=>$hotnews,"img"=>$img));
			

		}
		public function deleteNews($id){
			//lấy biến kết nối csdl
			$conn = Connection::getInstance();
			//chuản bị truy vấn
			$query = $conn->prepare("delete from tbl_news where id=:id ");
			//thực hiện truy vấn
			$query->execute(array("id"=>$id));
		}
		public function getCategory($category_id){
			$conn = Connection::getInstance();
			//thuc hien truy van
			$query = $conn->query("select * from tbl_category where id=$category_id");
			//tra ve 1 ban ghi
			return $query->fetch();
		}
	}
 ?>