<!DOCTYPE html>
<html>
<head>
<meta charset="UTF-8">
<title>Insert title here</title>
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.3.1/jquery.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js"></script>
</head>
<body>
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



<br/><br/>
&nbsp;&nbsp;<button type="button" data-toggle="modal" data-target="#myModal">모달 창 열기</button>
&nbsp;&nbsp;<a data-toggle="modal" href="#myModal">모달 창 열기</a>
</body>
</html>