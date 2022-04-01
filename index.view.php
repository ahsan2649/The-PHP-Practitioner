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

    <ul>
        <!-- foreach, echo, endforeach -->
        <?php foreach ($names as $name) : ?> 
            <li><?= $name; ?></li>
        <?php endforeach; ?> 

        <!-- echo insie foreach -->
        <?php
            foreach ($names as $name) {
                echo "<li>$name</li>";
            }
        ?>
    </ul>

</body>
</html>