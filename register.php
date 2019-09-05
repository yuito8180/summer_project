<?php 
    require_once("php/db_connect.php");

    if(ISSET($_POST)){ 
        $newUserData = $_POST;
        $_name = htmlspecialchars($newUserData["name"]);
        $_scYear = htmlspecialchars($newUserData["scYear"]);
        $_address = htmlspecialchars($newUserData["email"]);
        $_password = htmlspecialchars($newUserData["password"]);
        $_password = htmlspecialchars($newUserData["con_password"]);

        $db->query("INSERT INTO acountData(name, class, address, password) VALUES ('{$_name}','{$_scYear}','{$_address}','{$_password}');");
        header("Location: index.html");
    }

?>