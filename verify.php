<?php
    error_reporting(0);
    @session_start();
    $set = array('logged' => isset($_SESSION['logged']));
    echo json_encode($set);