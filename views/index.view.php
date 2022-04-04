<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
</head>
<body>
    <nav>
        <li><a href="/about">About Us</a></li>
        <li><a href="/contact">Contact Us</a></li>
    </nav>
    <h1>My Tasks</h1>
    <?php foreach($tasks as $task): ?>
        <?php if($task-> completed) : ?>
            <strike><li><?= $task->description;?></li></strike>
        <?php else: ?>
        
            <li><?= $task->description;?></li>
            
        <?php endif; ?>
    <?php endforeach?>
</body>
</html>