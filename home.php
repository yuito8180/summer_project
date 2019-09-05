<?php
    session_start();

    $uClass = $_SESSION["class"];
    $uName = $_SESSION["name"];

?>
<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <title>Home - puzzle</title>
</head>
<body>
    <header class="header">
        <div class="headerM">
            <div class="headerM__icon">
                <p><img src="images/hedderIcon.svg" alt="puzzle"></p>
                <p>p<span>u</span>zzle</p>
            </div>
            <div class="headerM__nav">
                <form action="">
                    <p><input type="text" name="serch" value=""></p>
                    <button><img src="images/navSample.svg" alt=""></button>
                    <button><img src="images/navSample.svg" alt=""></button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <div class="question">
            <div class="question__form">
                <p><img src="images/userIconSampleQ.svg" alt=""></p>
                <form action="">
                    <input type="text" value="" name="heading" placeholder="見出し">
                    <textarea name="text" value="" placeholder="質問内容"></textarea>
                    <button class="tags">＋</button>
                    <button class="submit" type="submit">送信</button>
                </form>
            </div>
            <div class="question__content">
                <p><img src="images/userIconSampleQ.svg" alt=""></p>
                <div>
                    <p>見出しdsadadad</p>
                    <p>質問内容dadadadaaadga</p>
                    <button class="tags">＋</button>
                </div>
            </div>
        </div>
        <div class="questionNav">
            <div class="questionNav__userData">
                <p><img src="images/userIconSample.svg" alt=""></p>
                <p><span class="uClass"><?=$uClass?></span><br><span class="uName"><?=$uName?></span></p>
            </div>
            <div class="questionNav__menu">
                <p><a href="">通知</a></p>
                <p><a href="">DM</a></p>
                <p><a href="">ブックマーク</a></p>
                <p><a href="">設定</a></p>
                <p><a href="">ヘルプ</a></p>
            </div>
        </div>
    </main>
</body>
</html>