<?php

require __DIR__ . ("/data.php");?>

<h3> Cities to play fotball in:<h3>
    

<?php foreach ($teams as $team):?>

<li>

<?= $team['city'];?> <br>

</li>

<?php endforeach;?>