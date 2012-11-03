<?php include "plugins/markdown.php"; ?>
<div id='body' style='padding:10px'>
	<!-- <h1><?php echo $title ?></h1> -->

	<?php if (isset($notes)) { ?>
		<ul>
			<?php foreach($notes as $note) { ?>
				<li><a <?php echo "href=note/view/$note"?>><?php echo $note ?></li>
			<?php } ?>
		</ul>
	<?php } ?>
	<?php
	if(isset($filename)) {
		$html = Markdown($note_body);
		echo $html;
	}
	?>
</div>