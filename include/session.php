<?
    error_reporting(E_ALL ^ E_NOTICE);         //오류메시지 보여주기
    ini_set("display_errors", 1);              //에러 표시여부
    ini_set("session_cache_expire", 60);       //세션 캐쉬 보관시간(분) 기본
    ini_set("session.gc_maxlifetime", 60);     //움직이 없을경우 세션을 죽인다. 이게 expire보다 우선임 12시간
    ini_set("session.gc_probability", 1);     //세션을 지울 확률을 설정 session.gc_divisor(100)과 연계 %확률로 세션지워줌,테스트시 100 권장
    ini_set("session.gc_divisor", 100);
    ini_set("session.cookie_lifetime",0);      //0일떄는 브라우저를 닫으면 쿠키가 사라짐 10이면 10이면 닫고나서도 10초후에도 쿠키가 살아있음

    session_cache_limiter("private_no_expire");//만료 페이지 에러방지코드 폼값을 유지할때 사용. ssion_start가 있는 페이지일 경우엔 바로위에사용
    //no-cache 페이지 저장하지않음

    session_start();

    //header 서버에서 클라이언트로 http header 를 보낸다.
	header("Content-Type: text/html; charset=UTF-8");
	header('Expires: 0');                                          //  (컨텐츠의 유효기간) 0으로하면 현재날짜로
	header('Last-Modified: ' . $gmnow);//클라이언트가 변경된 컨텐츠를 요청한 경우 HTTP 헤더에 이 시간을 표시하여 캐시서버나 클라이언트에게 알린다.
	header('Cache-Control: no-store, no-cache, must-revalidate'); //캐쉬를 브라우저에서 얼마나 보관하는지 지정해주는요소
    // no-store(전송후에 정보를 삭제) , must-revalidate(캐시재검증) HTTP1.1전송규약에서 캐시에 저장되지 않도록 설정
	header('Cache-Control: pre-check=0, post-check=0, max-age=0'); // HTTP/1.1
	header('Pragma: no-cache'); // HTTP/1.0

    //$session_id = $_SESSION[]

?>
