<?
    include $_SERVER["DOCUMENT_ROOT"] . "/include/session.php";  //세션 설정
    include $_SERVER["DOCUMENT_ROOT"] . "/include/function.php"; //함수 설정
    include $_SERVER["DOCUMENT_ROOT"] . "/layout/head.php";      //layout head 부분
?>


    <div class="container">
        <div class="row">
            <div class="col-md-3"></div>
            <div class="col-md-6">
                <form class="form-signin">
                    <h2 class="form-signin-heading" style="text-align:center;">로그인</h2>
                    <div>
                        <input class="form-control" id="id" autofocus="" required="" type="text" placeholder="id">
                    </div>
                    <div style="padding-bottom: 20px;">
                        <input class="form-control" id="inputPassword" required="" type="password" placeholder="Password">
                    </div>
                    <button class="btn btn-lg btn-primary btn-block" type="submit">로그인</button>
                </form>
            </div>
        </div>
    </div>
