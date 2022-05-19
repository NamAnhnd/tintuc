<?php 
    //kế thừa layout1.php để load vào đây
    $this->fileLayout = "Views/Backend/layout1.php";
 ?>  
                    <div class="col-md-12">  
                        <div class="panel panel-primary">
                            <div class="panel-heading">Add edit news</div>
                            <div class="panel-body">
                                 <!-- thêm thuôc tính enctype="multipart/form-data" dể upload file -->
                            <form method="post" enctype="multipart/form-data" action="<?php echo $formAction; ?>">
                                <!-- rows -->
                               
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Name</div>
                                    <div class="col-md-10">
                                        <input type="text" value="<?php echo isset($record->name)? $record->name :''; ?>" name="name" class="form-control" required>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Category</div>
                                    <div class="col-md-10">
                                        <select name="category_id" class="form-control" style="width: 300px;">
                                            <option value="0"></option>
                                            <?php 
                                            $conn = Connection::getInstance();
                                            $query = $conn->query("select * from tbl_category order by id desc");
                                            //lay tất cả kết quả trả về
                                            $category = $query->FetchAll();
                                            foreach($category as $rows): ?>
                                            <option <?php  if(isset($record->category_id)&&$record->category_id==$rows->id): ?> select <?php endif; ?> value="<?php echo $rows->id; ?>"><?php echo $rows->name; ?></option>
                                        <?php endforeach; ?>
                                        </select>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Descripition</div>
                                    <div class="col-md-10">
                                        <textarea name="description" id="x`x	x	">
                                        	<?php echo isset($record->description)? $record->description :""; ?>
                                        </textarea>
                                        <script type="text/javascript">
                                        	CKEDITOR.replace("description");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Content</div>
                                    <div class="col-md-10">
                                        <textarea name="content" id="content">
                                        	<?php echo isset($record->content)? $record->content :""; ?>
                                        </textarea>
                                        <script type="text/javascript">
                                        	CKEDITOR.replace("content");
                                        </script>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="checkbox" <?php if(isset($record->hotnews)&&$record->hotnews==1): ?> checked <?php endif; ?> name="hotnews" id="hotnews"><label for="hotnews">Hot news</label>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                  <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2">Upload image</div>
                                    <div class="col-md-10">
                                        <input type="file" name="img">
                                    </div>
                                </div>
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                    	 <?php if(isset($record->img)&&$record->img!=""&&file_exists("Assets/upload/news/".$record->img)): ?>
                    <img src="Assets/upload/news/<?php echo $record->img; ?>" style="width: 100px;">
                    <?php endif; ?>
                                    </div>
                                </div>
                                <!-- end rows -->
                                <!-- rows -->
                                <div class="row" style="margin-top:5px;">
                                    <div class="col-md-2"></div>
                                    <div class="col-md-10">
                                        <input type="submit" value="Process" class="btn btn-primary">
                                    </div>
                                </div>
                                <!-- end rows -->
                            </form>
                            </div>
                        </div>
                    </div>