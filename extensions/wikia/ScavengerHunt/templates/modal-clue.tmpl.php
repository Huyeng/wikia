<div class="scavenger-clue-text">
	<?= $text ?>
</div>
<?php if (!empty($buttonTarget)) { ?>
<div class="scavenger-clue-button">
	<a class="button" href="<?= $buttonTarget ?>"><?= $buttonText ?></a>
</div>
<?php }
if (!empty($shareUrl)) {
?>
<div class="scavenger-share-button">
	<fb:share-button href="<?= $shareUrl ?>" type="button_count"></fb:share-button>
</div>
<?php } ?>
<img class="scavenger-clue-image" src="<?= $imageSrc ?>" style="top:<?= $imageOffset['top'] ?>px; left:<?= $imageOffset['left'] ?>px">