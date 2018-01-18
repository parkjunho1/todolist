<?
    include $_SERVER["DOCUMENT_ROOT"] . "/include/session.php";  //세션 설정
    include $_SERVER["DOCUMENT_ROOT"] . "/include/function.php"; //함수 설정
    include $_SERVER["DOCUMENT_ROOT"] . "/layout/head.php";      //layout head 부분
?>

<?
    if(IsLogin() == true) {
    } else {
?>
    <div class="row">
        <div class="col-md-4 col-sm-4"></div>
        <div class="col-md-4 col-sm-4" style="border: 1px solid;padding-left: 30px;padding-right: 30px; padding-top: 20px;padding-bottom: 20px;">
            <form id="form01" name="form01">
                <div class="panel-body">
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-sm-8">이름:</div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="name" name="name">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-sm-8">아이디:</div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" id="id" name="id">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <div class="row">
                            <div class="col-md-3 col-sm-8">패스워드:</div>
                            <div class="col-md-7">
                                <input type="password" class="form-control" id="password" name="password">
                            </div>
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary" onclick="create()" id="create" name="create">등록</button>
                    <button type="button" class="btn btn-primary" onclick="reset()" id="reset" name="reset">리셋</button>
                </div>
            </form>
        </div>
    </div>


    </body>
</html>
<?
    }
?>



<? include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";?>




