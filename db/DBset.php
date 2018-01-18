<?

    var $server   = "112.175.184.89"; //서버
    var $user     = "wiwi1111";         //로그인이름
    var $pass     = "sksms1004";     //패스워드
    var $database = "wiwi1111";          //데이터베이스 이름


    $connect = mysqli_connect($server,$user,$pass,$database);

    if(!$connect) die('Not connected : ' . mysqli_error());

    mysqli_close($connect);

?>


