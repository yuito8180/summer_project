$(()=>{
 
    var name = $(".nName");
    var scYear = $(".scYear");
    var mail = $(".nMail");
    var password = $(".nPassword");
    var conPassword = $(".nConPassword");
    var register = $(".register");
    var check_address = new RegExp(/^(\w+\.\w+)|\w+\@\w+\.\w+/);

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
    }else{
        if(check_address.test(mail.val())==false){
            event.preventDefault();
            alert("メールアドレスの入力形式が違います。")
            return false ;
        }
    }

    var passwordCount = password.val();
    passwordCount = passwordCount.length;

    if( passwordCount < 6 ){
        event.preventDefault();
        alert("パスワードは6文字以上入力してください。");
        return false ;
    }else{
        if(password.val() !== conPassword.val()){// パスワードの確認
            event.preventDefault();
            alert("確認パスワードが一致しません。");
        }else{
            alert("登録できました。");
        }
    }


  });


});