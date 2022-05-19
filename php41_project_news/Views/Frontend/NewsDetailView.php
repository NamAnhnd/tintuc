<?php 
    $this->fileLayout = "Views/Frontend/Layout.php";
 ?>
<article>
    <div class="title-box">
        <h1><?php echo $record->name; ?></h1>
    </div>
    <div class="post-thumb">
        <img src="Assets/upload/news/<?php echo $record->img; ?>" alt="">
    </div>
    <div class="post-content" style="margin-top: 10px;">
         <?php echo $record->description; ?>
         <?php echo $record->content; ?>        
</article>