<?php require("partials/head.php");?>
    <h1>My Tasks</h1>
    <?php foreach($tasks as $task): ?>
        <?php if($task-> completed) : ?>
            <strike><li><?= $task->description;?></li></strike>
        <?php else: ?>
        
            <li><?= $task->description;?></li>
            
        <?php endif; ?>
    <?php endforeach?>
<?php require('partials/footer.php');?>