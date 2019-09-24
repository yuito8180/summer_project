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
    <link rel="apple-touch-icon" type="image/png" href="images/apple-touch-icon-180x180.png">
    <link rel="icon" type="image/png" href="images/icon-192x192.png">
    <link href="https://fonts.googleapis.com/css?family=Livvic|Noto+Sans+JP&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="css/home.css">
    <title>Home - puzzle</title>
</head>
<body>
    <header class="header">
        <div class="headerM">
            <div class="headerM__icon">
                <p><img src="images/hedderIcon.svg" alt="puzzle"></p>
                <p class="logoText">p<span>u</span>zzle</p>
            </div>
            <div class="headerM__nav">
                <form action="" method="GET">
                    <input type="text" class="searchData" placeholder="検索" name="keyword" value="">
                    <button type="submit" class="searchBtn"><img src="images/header-searchIcon.svg" alt="検索"></button>
                </form>
            </div>
        </div>
    </header>
    <main>
        <!-- 質問投稿 -->
        <div class="question">
            <div class="question__form">
                <p><img src="images/userIconSampleQ.svg" alt=""></p>
                <form action="">
                    <ul class="formInput">
                        <li class="formInput"><input type="text" id="formInput__text" value="" name="heading" placeholder="見出し"></li>
                        <li><textarea name="text" value="" id="formInput__textArea" placeholder="質問内容"></textarea></li>
                    </ul>
                    <ul class="formButton">
                        <li><button class="tags">＋</button></li>
                        <li><button class="submit" type="button">送信</button><li>
                    </ul>
                </form>
            </div>
            <!-- 質問表示 -->
            <div class="qWarraperNone">
                <div class="questionContentBox">
                    <div class="question__content">
                        <p><img src="images/userIconSampleQ.svg" alt=""></p>
                        <div class="question__content__text">
                            <p class="uText" id="uText">HTMLがわかりません！</p>
                            <p class="uTextArea" id="uTextArea">HTMLのdivタグの使い方がいまいちつかめません。<br>教えてください。</p>
                        </div>
                    </div>
                    <div class="contentQBox">
                        <div class="question__content__button">
                            <button class="contactButton"><img src="images/contactIcon.svg" alt=""></button>
                            <button class="questionButton"><img src="images/quetionIcon.svg" alt=""></button>
                            <button class="tagButton"><img src="images/markIcon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 質問表示2 -->
            <div class="qWarraper">
                <div class="questionContentBox">
                    <div class="question__content">
                        <p><img src="images/userIconSampleQ.svg" alt=""></p>
                        <div class="question__content__text">
                            <p class="uText">PHPわかりません！</p>
                            <p class="uTextArea">phpをつかったデータベースアクセスができません。<br>教えてください。</p>
                        </div>
                    </div>
                    <div class="contentQBox">
                        <div class="question__content__button">
                            <button class="contactButton"><img src="images/contactIcon.svg" alt=""></button>
                            <button class="questionButton"><img src="images/quetionIcon.svg" alt=""></button>
                            <button class="tagButton"><img src="images/markIcon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 質問表示3 -->
            <div class="qWarraper">
                <div class="questionContentBox">
                    <div class="question__content">
                        <p><img src="images/userIconSampleQ.svg" alt=""></p>
                        <div class="question__content__text">
                            <p class="uText">HTMLがわかりません！</p>
                            <p class="uTextArea">HTMLのdivタグの使い方がいまいちつかめません。<br>教えてください。</p>
                        </div>
                    </div>
                    <div class="contentQBox">
                        <div class="question__content__button">
                            <button class="contactButton"><img src="images/contactIcon.svg" alt=""></button>
                            <button class="questionButton"><img src="images/quetionIcon.svg" alt=""></button>
                            <button class="tagButton"><img src="images/markIcon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
            <!-- 質問表示4 -->
            <div class="qWarraper">
                <div class="questionContentBox">
                    <div class="question__content">
                        <p><img src="images/userIconSampleQ.svg" alt=""></p>
                        <div class="question__content__text">
                            <p class="uText">CSSを使ったアニメーションができません。</p>
                            <p class="uTextArea">cssを使ってアニメーションをつくりたいのですが、<br>なかなかうまくいきません。<br>先輩方教えてください！</p>
                        </div>
                    </div>
                    <div class="contentQBox">
                        <div class="question__content__button">
                            <button class="contactButton"><img src="images/contactIcon.svg" alt=""></button>
                            <button class="questionButton"><img src="images/quetionIcon.svg" alt=""></button>
                            <button class="tagButton"><img src="images/markIcon.svg" alt=""></button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="questionNav">
            <div class="questionNav__userData">
                <p><img src="images/userIconSample.svg" alt=""></p>
                <p class="questionNav__userData__cName"><span class="uClass"><?=$uClass?></span><br><span class="uName"><?=$uName?></span></p>
            </div>
            <div class="questionNav__menu">
                <p class="questionNav__menu__alert"><a href="">通知</a></p>
                <p class="questionNav__menu__dm"><a href="">DM</a></p>
                <p class="questionNav__menu__mark"><a href="">ブックマーク</a></p>
                <p class="questionNav__menu__config"><a href="">設定</a></p>
                <p class="questionNav__menu__help"><a href="">ヘルプ</a></p>
            </div>
        </div>
    </main>
    <footer class="footer">
        <ul class="footer__nav">
            <li>利用規約</li>
            <li>よくある質問</li>
            <li>お問い合わせ</li>
        </ul>
        <small>&copy; 2019 Puzzle.</small>
    </footer>
    <!-- <div id="aa" class="aaa"></div>
    <div id="bb" class="bbb"></div> -->
    <script src="js/jquery-3.3.1.min.js"></script>
    <script src="js/question.js"></script>
</body>
</html>