<!-- start slider -->
        <div class="cn_wrapper">
            <div id="cn_preview" class="cn_preview">
                <?php $n = 0; ?>
                <?php foreach($data as $rows): ?>
                <?php $n++; ?>
               <!-- first hot news -->
                <div class="cn_content" style="<?php if($n ==1):; ?> top:0px; <?php endif; ?> background: url('Assets/upload/news/<?php echo $rows->img; ?>') no-repeat center #ffffff; background-size:100%;">
                    <div class="caption">
                        <h3><a href="index.php?controller=NewsDetail&id=<?php echo $rows->id; ?>"><?php echo $rows->name; ?></a></h3>
                        <p><?php echo $rows->description; ?></p>
                        <div class="date">
                            <h3>Hot<br><span>News</span></h3>
                        </div>
                    </div>
                </div>
                <!-- end first hot news -->
                <?php endforeach; ?>
                
                
            </div>
            <div id="cn_list" class="cn_list">
                <div class="cn_page" style="display:block;">
                    <?php foreach($data as $rows): ?>
                    <!-- list hot news -->
                    <div class="cn_item">
                        <div class="left-box">
                            <img src="Assets/upload/news/<?php echo $rows->img; ?>" alt="">
                        </div>
                        <div class="right-box">
                            <h4><?php echo $rows->name; ?></h4>
                        </div>
                        <div class="clear"></div>
                    </div>
                    <!-- end list hot news -->
                   <?php endforeach; ?> 
                </div>
                
                
            </div>
        </div>
        <!-- end slider -->