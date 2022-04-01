<!DOCTYPE html>
<!-- View for index page -->
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <style>
        header{
            background: #e3e3e3;
            padding: 2em;
            text-align:center;

        }
    </style>
</head>
<body>

        <h1>Task for the day</h1>
        <ul>
            <li><strong>Name: </strong> <?= $task['title']; ?></li>
            <li><strong>Due Date: </strong> <?= $task['due']; ?></li>
            <li><strong>Person Responsible: </strong> <?= $task['assigned_to']; ?></li>
            <li>    
                <strong>Status: </strong> 
                <!-- Shorthand if/else, '!' for 'not' -->
                <?php if($task['completed']): ?>
                    <span class='icon'>&#9989;</span>
                <?php else : ?>
                    <span class='icon'>Incomplete</span>
                <?php endif; ?>


                <?php 
                // if ($task['completed']) {
                //     echo '<span class="icon">&#9989</span>';
                // }
                // else {
                //     echo 'incomplete';
                // }
                ?>
            </li>
            

        </ul>

</body>
</html>