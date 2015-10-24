<?php foreach ($items as $item): ?>
<?php
    echo '</br>';
    echo '</br>';   ?>

<h1><?php echo $item['title']; ?></h1>
<div><?php echo $item['text']; ?></div>
<?php endforeach; ?>