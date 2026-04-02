
<link rel="stylesheet" href="styles/style.css">
<?php
include './inc/functions.inc.php';
include './inc/images.inc.php';
?>
<?php include './views/header.php';?>
<div class="gallery-grid">

<?php foreach($imageTitles as $src => $title):?>
    <div class="gallery-item">
    <a href="image.php?<?php echo http_build_query(['image'=>$src]);?>" class="link-style">
    <h3><?php echo e($title); ?></h3>
   <img src="./images/<?php echo rawurlencode($src); ?>" alt="<?php echo e($title);?>" width="200"/>
</a>
</div>
    <?php endforeach;?>
</div>

<?php include './views/footer.php';?>