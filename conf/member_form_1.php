<?php
session_start();
?>

<!DOCTYPE html>
<!--
To change this license header, choose License Headers in Project Properties.
To change this template file, choose Tools | Templates
and open the template in the editor.
-->
<html>
    <head>
        <meta charset="UTF-8">
        <title>회원등록</title>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
        <script>
            function check_id() {
                var idModal = document.getElementById("idModal");
                idModal.show();
            }
            function check_nick() {
                window.open("check_nick.php?nick="+document.member_form.nick.value, "NICKcheck", 
                "left=200, top=200, width=200, height=60, scrollbars=no, resizable=yes");
            }
            function check_input() {
                if(!document.member_form.id.value) {
                    alert("아이디를 입력하세요");
                    document.member_form.id.focus();
                    return;
                }
                if(!document.member_form.pass.value) {
                    alert("비밀번호를 입력하세요");
                    document.member_form.pass.focus();
                    return;
                }
                if(!document.member_form.pass_confirm.value) {
                    alert("비밀번호 확인을 입력하세요");
                    document.member_form.pass_confirm.focus();
                    return;
                }
                if(!document.member_form.name.value) {
                    alert("이름을 입력하세요");
                    document.member_form.name.focus();
                    return;
                }
                if(!document.member_form.nick.value) {
                    alert("닉네임을 입력하세요");
                    document.member_form.nick.focus();
                    return;
                }
                if(!document.member_form.hp2.value) {
                    alert("휴대폰 번호 입력하세요");
                    document.member_form.hp2.focus();
                    return;
                }
                if(document.member_form.pass.value !== document.member_form.pass_confirm.value) {
                    alert("비밀번호가 일치하지 않습니다\n 다시 입력해 주세요");
                    document.member_form.hp2.focus();
                    document.member_form.pass.select();
                    return;
                }
                document.member_form.submit();
            }
            function reset_form() {
                document.member_form.id.value = "";
                document.member_form.pass.value = "";
                document.member_form.pass_confirm.value = "";
                document.member_form.name.value = "";
                document.member_form.nick.value = "";
                document.member_form.hp1.value = "";
                document.member_form.hp2.value = "";
                document.member_form.hp3.value = "";
                document.member_form.email1.value = "";
                document.member_form.email2.value = "";
                document.member_form.id.focus();
                return;
            }
            
        </script>
    </head>
    <body>
        <form name="member_form" method="post" action="insert.php">
            <table border="1">
                <tr>
                    <td width="140px">* 아이디</td>
                    <td width="900px"><input type="text" align="center" name="id"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#myModal">중복체크</button>
                    4~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.</td>
                </tr>
                <tr>
                    <td>* 비밀번호</td>
                    <td height="30"><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <td>* 비밀번호 확인</td>
                    <td height="30"><input type="password" name="pass_confirm"></td>
                </tr>
                <tr>
                    <td>* 이름</td>
                    <td height="30"><input type="text" name="name"></td>
                </tr>
                <tr>
                    <td>* 닉네임</td>
                    <td height="30"><input type="text" name="nick"><button type="button" class="btn btn-default" data-toggle="modal" data-target="#modalNick">중복체크</button></td>
                </tr>
                <tr>
                    <td>* 휴대폰</td>
                    <td height="30"><select name="hp1">
                        <option value="010">010</option>
                        <option value="010">011</option>
                        <option value="010">016</option>
                        <option value="010">017</option>
                        <option value="010">018</option>
                        <option value="010">019</option>
                        </select> - <input type="text" name="hp2" size="8"> - <input type="text" name="hp3" size="8"></td>
                </tr>
                <tr>
                    <td>이 메 일</td>
                    <td height="30"><input type="text" id="email" name="email1">@<input type="text" name="email2"</td>
                </tr>
                <tr>
                    <td height="30" colspan="2">&nbsp; &nbsp; &nbsp; * 는 필수 입력항목입니다.</td>
                </tr>
                <tr>
                    <td height="30" colspan="2" align="right"><a href="#"><img src="button_save.gif" onclick="check_input()" alt=""></a>&nbsp; &nbsp; 
                        <a href="#"><img src="button_reset.gif" onclick="reset_form()" alt=""></a></td>
                </tr>
            </table>
        </form>
        
  <div class="modal fade" id="myModal" role="dialog"> 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">모달 창 타이틀</h4>
        </div>
        <div class="modal-body">
          <p>여기에 필요한 텍스트 메시지 넣기</p> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
<div class="modal fade" id="modalNick" role="dialog"> 
    <div class="modal-dialog">
      <div class="modal-content">
        <div class="modal-header">
          <button type="button" class="close" data-dismiss="modal">×</button>
          <h4 class="modal-title">모달 창 타이틀</h4>
        </div>
        <div class="modal-body">
          <p>여기에 필요한 텍스트 메시지 넣기</p> 
        </div>
        <div class="modal-footer">
          <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
        </div>
      </div>
    </div>
  </div>
    </body>
</html>
