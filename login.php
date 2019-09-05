<?php
    require_once("php/db_connect.php");
    session_start();

    if(ISSET($_POST)){
        $loginData = $_POST;
        $logAddress = htmlspecialchars($loginData["email"]);
        $logAPassword = htmlspecialchars($loginData["password"]);

        $result = $db->query("SELECT * FROM acountData WHERE address='{$logAddress}'");



        // if($result){
        //     // $_mines = json_encode($userdata["mines"]);
        //     // echo $_mines ;
        //     // exit ;
        // }else{
        //     print json_encode([
        //         "state"=>"error",
        //         "message"=>"sql query error",
        //         "param"=>"SELECT * FROM acountData WHERE address='{$logAddress}'"
        //     ]);
        //     exit;
        // }      

        //ログイン
        if($result){
            if($result -> rowCount()){
                foreach($result as $row){
                    $_password = $row["password"];
                    $_SESSION["name"] = $row["name"];
                    $_SESSION["class"] = $row["class"];
                }
                if($_password == $logAPassword){

                    print "ログインしました。";
                    header("Location: home.php");
                }else{
                    print "ログイン失敗しました。";
                }
            }
        }
    }
?>