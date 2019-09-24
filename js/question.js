$(()=>{

    //投稿ボタン
    var questionButton = $(".submit");
    // 質問内容BOXをセット
    var noneBox = $(".qWarraperNone");
    console.log(noneBox);

    questionButton.on("click",()=>{
        noneBox.css("display","block");

        // 質問データセット
        var questionText = $("#formInput__text");
        var questionTextArea = $("#formInput__textArea");
        $("#uText").text(questionText.val());
        $("#uTextArea").text(questionTextArea.val());
        
    });

});

// document.getElementById("bb").onclick = function() {
//     document.getElementById("aa").style.opacity = "1";
    
//     document.getElementById("aa").style.transform = "scale(1)";
    
// }