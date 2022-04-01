<!DOCTYPE html>
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

    <header>
        <!--<h1>
            <?php 
            
                // $name = $_GET['name']; # Using super globals

                // echo "Hello, $name"; #/?name=Ahsan
            
            ?>
             close php using ?> 
        </h1>-->

        <h1>
            <?="Hello, ". htmlspecialchars($_GET['name']);?>
            <!--Shorthand for echo, htmlspecialchars is a function that sanitizes input-->
        </h1>

    </header>

</body>
</html>