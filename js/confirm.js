$(()=>{
 
    var name = $(".nName");
    var scYear = $(".scYear");
    var mail = $(".nMail");
    var password = $(".nPassword");
    var conPassword = $(".nConPassword");
    var register = $(".register");

 register.on("click",(event)=>{
    // 入力チェック
    if(name.val() == ""){
        event.preventDefault();
        alert("お名前が未入力です。");
        return false ;
    }

    if(password.val() == ""){
        alert("パスワードが未入力です。");
        return false ;
    }

    if(scYear.val() == ""){
        alert("クラスが未選択です。")
        return false ;
    }

    if(mail.val() == ""){
        alert("メールアドレスが未入力です。");
        return false ;
    }

    if(password.val() !== conPassword.val()){// パスワードの確認
        event.preventDefault();
        alert("確認パスワードが一致しません。");
    }else{
        alert("登録できました。");
    }
  });


});