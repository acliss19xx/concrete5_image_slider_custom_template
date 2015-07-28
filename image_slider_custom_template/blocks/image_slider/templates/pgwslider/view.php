<?php defined('C5_EXECUTE') or die("Access Denied.");
$navigationTypeText = ($navigationType == 0) ? 'arrows' : 'pages';
$c = Page::getCurrentPage();
if ($c->isEditMode()) { ?>
    <div class="ccm-edit-mode-disabled-item" style="width: <?php echo $width; ?>; height: <?php echo $height; ?>">
        <div style="padding: 40px 0px 40px 0px"><?php echo t('Image Slider disabled in edit mode.')?></div>
    </div>
<?php  } else { ?>
<script>
$(document).ready(function(){
	$('.pgwSlider').pgwSlider();
});
</script>

<div class="ccm-image-slider-container ccm-block-image-slider-<?php echo $navigationTypeText?>" >
    <div class="ccm-image-slider">
        <div class="ccm-image-slider-inner">

        <?php if(count($rows) > 0) { ?>
        <ul class="pgwSlider" id="ccm-image-slider-<?php echo $bID ?>">
            <?php foreach($rows as $row) { ?>
                <li>
                <?php
                $f = File::getByID($row['fID'])
                ?>
                <?php if(is_object($f)) { ?>
					<img src="<?php echo $f->getRelativePath() ?>" alt="<?php echo h($row['title']) ?>" data-description="<?php echo strip_tags($row['description']) ?>" />
                <?php } ?>
                </li>
            <?php } ?>
        </ul>
        <?php } else { ?>
        <div class="ccm-image-slider-placeholder">
            <p><?php echo t('No Slides Entered.'); ?></p>
        </div>
        <?php } ?>
        </div>

    </div>
</div>
<?php } ?>
