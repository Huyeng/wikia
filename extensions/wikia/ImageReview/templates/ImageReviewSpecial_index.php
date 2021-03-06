<header>
	<div style="float: right; text-align: left">
<?php if ( $accessQuestionable ) { ?>
		<div class="tally">
			<a href="<?= $fullUrl ?>/questionable"><em><?= $imageCount['questionable']?></em> <span>questionable<br>images</span></a>
		</div>
<?php } ?>
<?php if ( $accessRejected ) { ?>

		<div class="tally" style="float: none">
			<a href="<?= $fullUrl ?>/rejected"><em><?= $imageCount['rejected']?></em> <span>rejected<br>images</span></a>
		</div>
<?php } ?>
	</div>
	<p>Click on images to mark them for deletion or as questionable (for staff review). When you're done with the batch, click "Review" below to get the next batch.</p>
	<? if($action == 'questionable') { ?>
		<a href="<?= $baseUrl ?>">< Back to <?= $toolName ?></a>
	<? } ?>

<?php if ( $accessControls ) { ?>

<form action="<?php echo $submitUrl ?>" method="get" id="ImageReviewControls">
	Sort order: <?php
		$sortSelect = new XmlSelect( 'sort', 'sort', intval( $order ) );

		$sortSelect->addOptions( ImageReviewHelper::$sortOptions );

		echo $sortSelect->getHTML();
	?>

	<input type="submit" class="wikia-button secondary" value="Change sort order" />
</form>

<a href="<?= $fullUrl ?>/stats" class="wikia-button secondary">View stats</a>

<?php } ?>

</header>

<?php
	#var_dump($imageList);
?>

<h2 style="clear: both"><?= wfMsg( "imagereview-header{$modeMsgSuffix}" ) ?></h2>

<form action="<?= $submitUrl ?>" method="post" id="ImageReviewForm" class="<?= $action ?>">


	<ul class="image-review-list">
<?php
if ( is_array($imageList) && count($imageList) > 0) {
	$cells = 20;
	$perRow = 5;

	?>
	<ul class="image-review-list">
	<?php

	foreach($imageList as $n => $image) {
		$id = "img-{$image['wikiId']}-{$image['pageId']}";
		$stateId = intval($image['state']);
?>

			<li class="state-<?= $stateId ?> <?= $action ?>">
				<div class="img-container">
					<img id="<?php echo $id ?>" src="<?= htmlspecialchars($image['src']) ?>">
				</div>
				<a href="<?= htmlspecialchars($image['url']) ?>" target="_blank" class="internal sprite details magnify" title="Go to image page"></a>
				<?php if ( $image['flags'] & ImageReviewHelper::FLAG_SUSPICOUS_USER ) { ?>
					<a href="<?= htmlspecialchars($image['user_page']) ?>" target="_blank" class="internal sprite details magnify" title="Flagged: Susicious user. Click to go to uploader's profile" style="clear: both"></a>
				<?php } ?>
				<?php if ( $image['flags'] & ImageReviewHelper::FLAG_SUSPICOUS_WIKI ) { ?>
					<a href="<?= htmlspecialchars($image['wiki_url']) ?>" target="_blank" class="internal sprite details magnify" title="Flagged: Suspicious wiki. Click to go to wiki" style="clear: both"></a>
				<?php } ?>
                                <?php if ( $image['flags'] & ImageReviewHelper::FLAG_SKIN_DETECTED ) { ?>
                                        <span class="internal sprite details magnify" title="Flagged: Skin detected." style="clear: both"></span>
                                <?php } ?>

				<label title="Mark as OK"><input type="radio" name="<?= $id ?>" value="<?= ImageReviewStatuses::STATE_APPROVED ?>"<?= ($stateId == ImageReviewStatuses::STATE_APPROVED || $stateId == ImageReviewStatuses::STATE_IN_REVIEW || $stateId == ImageReviewStatuses::STATE_UNREVIEWED ? ' checked' :'') ?>>OK</label>
				<label title="Delete"><input type="radio" name="<?= $id ?>" value="<?= ( $action == 'rejected' ) ? ImageReviewStatuses::STATE_DELETED : ImageReviewStatuses::STATE_REJECTED ?>"<?= ($stateId == ImageReviewStatuses::STATE_REJECTED ? ' checked' :'') ?>>Del</label>
				<label title="Questionable"><input type="radio" name="<?= $id ?>" value="<?= ImageReviewStatuses::STATE_QUESTIONABLE ?>"<?= ( ( $stateId == ImageReviewStatuses::STATE_QUESTIONABLE_IN_REVIEW || $stateId == ImageReviewStatuses::STATE_QUESTIONABLE ) ? ' checked' : '' ) ?>>Q</label>
			</li>
<?php
/*
		if ($n % $perRow == $perRow - 1) {
			echo "\t\t</tr><tr>\n";
		}
*/
	}

	?>
	</ul>

<footer>
	<a href="javascript:history.back()" class="wikia-button secondary">Back to previous batch</a>
	<input id="nextButton"  type="submit" class="wikia-button" value="Review & get next batch" />
</footer>
	<?php
} else {
	echo wfMsg( 'imagereview-noresults' );
	echo Xml::element( 'a', array( 'href' => $fullUrl, 'class' => 'wikia-button', 'style' => 'float: none' ), 'Refresh page' );
}
?>

</form>
