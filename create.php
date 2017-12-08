<?php
    try {
        $dbh = new PDO('mysql:host=localhost;dbname=some', 'root', '');
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
    error_reporting(0);
    if(isset($_POST['content'])) {
        $dbh->query("INSERT INTO ceva(content) VALUES ('". addslashes($_POST['content']) . "')");
    }
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Create</title>
    <link rel="stylesheet" href="./semantic.min.css">
    <script src="jquery.min.js"></script>
    <script src="semantic.min.js"></script>
</head>
<body>
    <div class="ui secondary pointing menu">
        <a class="item" href="index.php">
            Home
        </a>
        <a class="item active">
            Create
        </a>
        <a class="item" href="show.php">
            Show
        </a>
        <div class="right menu">
            <!-- <a class="ui item">
            Logout
            </a> -->
        </div>
    </div>
    <div class="ui container">
        <form action="" method="POST" class="ui form">
            <div class="field">
                <label> Content </label>
                <textarea name="content" placeholder="Yout content here"></textarea>
            </div>
            <div class="field">
                <input type="submit" class="ui button right floated" value="Create">
            </div>
        </form>
    </div>
</body>
</html>
