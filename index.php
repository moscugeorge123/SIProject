<?php
    // $dbh = new PDO('mysql:host=localhost;dbname=test', $user, $pass);
    error_reporting(0);
    @session_start();
    session_start();
    $_SESSION['logged'] = 1;
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <link rel="stylesheet" href="./semantic.min.css">
    <script src="jquery.min.js"></script>
    <script src="semantic.min.js"></script>
</head>
<body>
    <div class="ui secondary pointing menu">
        <a class="item active">
            Home
        </a>
        <a class="item"  href="create.php">
            Create
        </a>
        <a class="item"  href="show.php">
            Show
        </a>
        <div class="right menu">
            <!-- <a class="ui item">
            Logout
            </a> -->
        </div>
    </div>
    <div class="ui container">
        <form action="" class="ui form">
            <p class="header">Logged: <?php echo $_SESSION['logged']? 'YES':'NO';?></p>
        </form>
    </div>  
</body>
</html>