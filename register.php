<?php 
    require_once("php/db_connect.php");

    if(ISSET($_POST)){ 
        $newUserData = $_POST;
        $_name = htmlspecialchars($newUserData["name"]);
        $_address = htmlspecialchars($newUserData["email"]);
        $_password = htmlspecialchars($newUserData["password"]);

        $db->query("INSERT INTO acountData(name, address, password) VALUES ('{$_name}','[$_address]','{$_password}');");
        header('Location: test.php');
    }

?>