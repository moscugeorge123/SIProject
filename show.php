<?php
     error_reporting(0);
    //  @session_start();
   try {
        $dbh = new PDO('mysql:host=localhost;dbname=some', 'root', '');
    } catch (PDOException $e) {
        print "Error!: " . $e->getMessage() . "<br/>";
        die();
    }
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
    <script src="script.js"></script>

</head>
<body>
    <div class="ui secondary pointing menu">
        <a class="item"  href="index.php">
            Home
        </a>
        <a class="item"  href="create.php">
            Create
        </a>
        <a class="item active" >
            Show
        </a>
        <div class="right menu">
            <!-- <a class="ui item">
            Logout
            </a> -->
        </div>
    </div>
    <div class="ui container">
        <div class="ui cards">
        <?php foreach($dbh->query('SELECT * from ceva') as $row) { ?>
            <div class="card">
                <div class="content">
                    <?php echo $row['content']; ?>
                </div>
            </div>
        <?php } ?>
            
        </div>
        <div class="ui modal">
            <!-- <i class="close icon"></i> -->
            <div class="header">
                Login session has expired. Please login
            </div>
            <div class="content">
                <form class="ui form ten column wide">
                    <div class="field">
                        <label>Username</label>
                        <input type="text" name="username" id="username" placeholder="Username">
                    </div>
                    <div class="field">
                        <label>Password</label>
                        <input type="password" name="password" id="password" placeholder="Password">
                    </div>
                </form>
            </div>
            <div class="actions">
                <div class="ui positive right labeled icon button" id="login">
                Login
                <i class="checkmark icon"></i>
                </div>
            </div>
        </div>
    </div>  
</body>
</html>