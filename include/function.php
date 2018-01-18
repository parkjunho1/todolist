<?
////////// 로그인 검증 //////////
function IsLogin() {
    $isLogin = false;
    if ($_SESSION['Login_Status'] == "success"){
        $isLogin = true;
    } else {
    }

    return $isLogin;
}

?>
