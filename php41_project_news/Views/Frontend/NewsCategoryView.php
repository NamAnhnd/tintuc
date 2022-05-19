<?php 
	$this->fileLayout="Views/Frontend/Layout.php";
 ?>
 <div class="marked-title">
                        <h3>Category</h3>
                    </div>
                    <div class="row">
                    	<?php foreach($data as $rows): ?>
                        <!-- list news -->
                        <article>
							<div class="cat-post-desc">
								<h3><a href="index.php?controller=NewsDetail&id=<?php echo $rows->id ?>"><?php echo $rows->name ?></a></h3>
								<p><a href="index.php?controller=NewsDetail&id=<?php echo $rows->id ?>"><img class="img_category" style="width:25%" src="Assets/upload/news/<?php echo $rows->img ?>" alt=""></a><?php echo $rows->description; ?></p>
							</div>
							<div class="clear"></div>
							<div class="line_category"></div>
						</article>                       
                        <!-- end list news -->
                    <?php endforeach; ?>
                       </div>