<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width", initial-scale="1">
<link rel="stylesheet" href="css/bootstrap.css">
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
<title>Insert title here</title>
</head>
<body>
<div class="container">
	<div class="col-lg-4"></div>
	<div class="col-lg-4">
		<div class="jumbotron" style="padding-top: 20px;">
			<form method="post" action="joinAction.jsp">
				<div class="form-group">
					<input type="text" class="form-control" placeholder="아이디" name="id" maxlength="20">
				</div>
				<div class="form-group">
					<input type="password" class="form-control" placeholder="비밀번호" name="pass" maxlength="20">
				</div>
                                <div class="form-group">
					<input type="password" class="form-control" placeholder="비밀번호" name="pass_confirm" maxlength="20">
				</div>
				<div class="form-group">
					<input type="text" class="form-control" placeholder="이름" name="userName" maxlength="20">
				</div>
				<div class="form-group" style="text-align:center;">
					<div class="btn-group" data-toggle="buttons">
						<label class="btn btn-primary active">
							<input type="radio" name="userGender" autocomplete="off" value="남자" checked>남자</label>
						<label class="btn btn-primary">
							<input type="radio" name="userGender" autocomplete="off" value="여자" checked>여자
						</label>
					</div>
				</div>
				<div class="form-group">
					<input type="email" class="form-control" placeholder="이메일" name="userEmail" maxlength="20">
				</div>
				<input type="submit" class="btn btn-primary form-control" value="회원가입">
			</form>
		</div></div>
</div>
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</body>
</html>