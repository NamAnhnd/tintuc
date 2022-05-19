<?php 
	//load file layout vao day
	$this->fileLayout = "Views/Frontend/Layout.php";

 ?>
 <?php 
 	$category = $this->fetchAllCategory();
 	foreach($category as $rows_category):
  ?>
   <!-- ========================================= -->
                    <!-- list category tin tuc -->
                    <div class="row-fluid">
                        <div class="marked-title">
                            <h3><a href="index.php?controller=NewsCategory&id=<?php echo $rows_category->id; ?>" style="color:white"><?php echo $rows_category->name; ?></a></h3>
                        </div>
                    </div>                    
                    <div class="row-fluid">
                        <div class="span2">
                           <!-- first news -->
                           <?php 
                           	$first_news = $this->fetchFirstNews($rows_category->id);
                            ?>
                            <article>
					    <div class="post-thumb">
					        <a href="index.php?controller=NewsDetail&id=<?php echo $first_news->id; ?>"><img src="Assets/upload/news/<?php echo $first_news->img; ?>" alt=""></a>
					    </div>
					    <div class="cat-post-desc">
					        <h3><a href="index.php?controller=NewsDetail&id=<?php echo $first_news->id; ?>"><?php echo $first_news->name; ?></a></h3>
					        <p><?php echo $first_news->description; ?></p>
					    </div>
					</article>
                            <!-- end first news -->
                        </div>
                        <div class="span2">
                        	<?php 
                        		$news = $this->fetchAllOtherNews($rows_category->id);
                        		foreach($news as $rows):
                        	 ?>
                           <!-- list news -->
                            <article class="twoboxes">
                                <div class="right-desc">
                                    <h3><a href="index.php?controller=NewsDetail&id=<?php echo $rows->id; ?>"><img src="Assets/upload/news/<?php echo $rows->img; ?>" alt=""></a><a href="index.php?controller=NewsDetail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>  
                                    <div class="clear"></div>    
                                </div>
                                <div class="clear"></div>
                            </article>
                            <!-- end list news -->
                        <?php endforeach; ?>
                        </div>
                    </div>
                    <div class="clear"></div>
                    <!-- end list category tin tuc -->
                    <?php endforeach; ?>
                    