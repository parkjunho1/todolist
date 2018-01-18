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
        <div class="col-md-4"></div>
        <div class="col-md-4 " style="border: 1px solid;padding-top: 10px;padding-bottom: 10px;">
            <form id="form01" name="form01">
                <div class="panel-body">
                    <div class="form-group" id="weight2" name="weight2">
                        <div class="row">
                            <div class="col-md-2">이름 :</div>
                            <div class="col-md-7">
                                <input type="text" class="form-control" placeholder="무게" id="weight" name="weight">
                            </div>
                        </div>
                    </div>
                    <div class="form-group">
                        <label class="col-md-5 control-label">금액 :</label>
                        <div class="col-md-7">
                            <input type="text" class="form-control" placeholder="금액" id="money01" name="money01">
                        </div>
                    </div>
                    <button type="button" class="btn btn-primary pull-right" onclick="foodins()" id="ok" name="ok">등록</button>
                </div>
            </form>
        </div>
    </div>


    </body>
</html>
<?
    }
?>

<div class="modal fade" id="firefoxModal" tabindex="-1" role="dialog" aria-labelledby="firefoxModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <ol>
                    <li>Ensure you're using Firefox.</li>
                    <li>Open a new tab and then switch back to this tab.</li>
                    <li>Click into this input: <input type="text" id="ff-bug-input"></li>
                    <li>Switch to the other tab and then back to this tab.</li>
                </ol>
                <p>Test result: <strong id="ff-bug-test-result"></strong></p>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">닫기</button>
                <button type="button" class="btn btn-primary">가입</button>
            </div>
        </div>
    </div>
</div>


<? include $_SERVER["DOCUMENT_ROOT"] . "/layout/footer.php";?>




