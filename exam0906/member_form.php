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
                window.open("check_id.php?id="+document.member_form.id.value,"IDcheck","left=200, top=200, width=200, height=60, scrollbars=yes, resizable=yes");
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
                if(!document.member_form.gender.value) {
                    alert("성별을 선택하세요");
                    document.member_form.gender.focus();
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
        <style>
            th {
                text-align: center;
            }
            tr {
                border: 1px solid black;
                height: 50px;
            }
            td {
                padding-left: 15px;
            }
            input {
            }
        </style>
    </head>
    <body>
        <form name="member_form" method="post" action="insert.php">
            <table>
                <tr>
                    <th width="140px">* 아이디</th>
                    <td width="900px"><input type="text" align="center" name="id"><button type="button" class="btn-primary" onclick="check_id()" alt="" align="center">중복체크</button>
                    4~12자의 영문 소문자, 숫자와 특수기호(_)만 사용할 수 있습니다.</td>
                </tr>
                <tr>
                    <th>* 비밀번호</th>
                    <td height="30"><input type="password" name="pass"></td>
                </tr>
                <tr>
                    <th>* 비밀번호 확인</th>
                    <td height="30"><input type="password" name="pass_confirm"></td>
                </tr>
                <tr>
                    <th>* 이름</th>
                    <td height="30"><input type="text" name="name"></td>
                </tr>
                <tr>
                    <th>성별</td>
                    <td>
                <div class="btn-group" data-toggle="buttons">
                    <label class="btn btn-primary active">
			<input type="radio" name="gender"  value="남자" checked>남자</label>
                    <label class="btn btn-primary">
			<input type="radio" name="gender"  value="여자">여자</label>
                </div>
            </td>
            </tr>
                <tr>
                    <th>* 주소</th>
                    <td height="30"><input type="text" name="address" style="width:500px" ></td>
                </tr>
                <tr>
                    <th>* 휴대폰</th>
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
                    <th>자기 소개</th>
                    <td height="30"><textarea colspan='2' rows='3' cols='50' name="intro"></textarea></td>
                </tr>
                <tr>
                    <td height="30" colspan="2">&nbsp; &nbsp; &nbsp; * 는 필수 입력항목입니다.</td>
                </tr>
                <tr>
                    <td height="30" colspan="2" align="right"><button type='button' class='btn btn-default' onclick="check_input()" alt=""> 저장하기</button>
                        <button type='button' class='btn btn-default' onclick="reset_form()" alt="">다시작성</button></td>
                </tr>
            </table>
        </form>
    </body>
</html>
