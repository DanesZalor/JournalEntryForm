<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Document</title>
    <?php require_once 'includeCSS.php' ?>
</head>
<body>
    <?php
        //echo var_dump($_SERVER);
        echo $_SERVER['SERVER_NAME'];
    ?>
    <div id="root"></div>
    
    <script src="index.js" type="module"></script>
    
</body>
</html>