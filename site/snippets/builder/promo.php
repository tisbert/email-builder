<section>
	<h2><?= $data->bgColor() ?></h2>
	<h2><?= $data->header() ?></h2>
	<?= $data->description() ?><br>
	<strong>Link:</strong> <?= $data->url() ?><br>
	<strong>Button Text:</strong><?= $data->btnText() ?>
	<img src="<?= $data->emailImage() ?>">
</section>
