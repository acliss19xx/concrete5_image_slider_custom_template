<?php defined('C5_EXECUTE') or die("Access Denied.");
?>
<div class="ccm-image-gallery-container" >
    <?php if(count($rows) > 0) { ?>
        <?php foreach($rows as $row) { ?>
			<div class="ccm-image-gallery-img">
	            <?php
	            $f = File::getByID($row['fID'])
	            ?>
	            <?php if(is_object($f)) {
					$ih = Loader::helper('image');
					$thumb = $ih->getThumbnail($f, 200, 200, false);
				?>
					<img src="<?php echo $thumb->src ?>" width="<?php echo $thumb->width ?>" height="<?php echo $thumb->height ?>" alt="" />
				<?php
/*
	                $tag = Core::make('html/image', array($f, false))->getTag();
		                if($row['title']) {
	                	$tag->alt($row['title']);
	                }else{
	                	$tag->alt("slide"); 
	                }
	                print $tag;
*/				 ?>
					<div class="ccm-image-gallery-title">
						<?php echo h($row['title'])?>
					</div>
					<div class="ccm-image-gallery-description">
						<?php echo $row['description'] ?>
					</div>
	            <?php } ?>
			</div>
		<?php } ?>
    <?php } else { ?>
    <div class="ccm-image-slider-placeholder">
        <p><?php echo t('No Slides Entered.'); ?></p>
    </div>
    <?php } ?>
</div>
