<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
		<title>타즈매니아 정보는 타즈매니악</title>
		<!-- Bootstrap -->
		<link href="<?=base_url()?>web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>web/css/main.css" rel="stylesheet">
	</head>
	<body>
	
	
	<div id="offcanvass">
		<div id="login_form">
			<div style="margin-top:40px;">
				<input type="text" class="form-control input-sm" placeholder="아이디" style="width: 270px;">
				<input type="password" class="form-control input-sm" placeholder="패스워드" style="margin-top:3px; width: 270px;">
			</div>
			<div style="margin-top:3px;">
				<input class="btn btn-primary btn-sm join_toggle" type="button" value="회원가입" style="width: 80px; margin-right:3px;">
				<input class="btn btn-danger btn-sm offcanvas_btn" type="button" value="취소" style="width: 50px; float:right;margin-right:10px;">
				<input id="loginBtn" class="btn btn-default btn-sm" type="button" value="로그인" style="width: 60px; float:right;margin-right:3px;">
			</div>
		</div>
		<div id="join_form" class="display_onoff">
			<div style="margin-top:40px;">
				<input id="join_id" type="text" class="form-control input-sm" placeholder="아이디" style="width: 270px;">
				<input id="join_password" type="password" class="form-control input-sm" placeholder="패스워드" style="margin-top:3px; width: 270px;">
				<input id="join_passwordcheck" type="password" class="form-control input-sm" placeholder="패스워드확인" style="margin-top:3px; width: 270px;">	
				<input id="join_email" type="text" class="form-control input-sm" placeholder="이메일" style="margin-top:3px; width: 270px;">
			</div>
			<div style="margin-top:3px;">
				<button class="btn btn-primary btn-sm" style="width: 80px;margin-right:3px;" data-toggle="modal" data-target="#clause">약관확인</button>
				<button class="btn btn-danger btn-sm join_toggle" style="width: 50px; float:right;margin-right:10px;">취소</button>
				<button class="btn btn-default btn-sm" style="width: 80px; float:right;margin-right:3px;">회원가입</button>
			</div>
		</div>
	</div>
	
	
	<!--  약관  -->
	<div class="modal fade" id="clause" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
	  <div class="modal-dialog" role="document">
	    <div class="modal-content">
	      <div class="modal-header">
	        <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
	        <h4 class="modal-title" id="myModalLabel">약관</h4>
	      </div>
	      <div class="modal-body">
	        	약관은 어쩌구 저쩌구 블라블라
	      </div>
	      <div class="modal-footer">
	        <button type="button" class="btn btn-default" data-dismiss="modal">확인완료</button>
	      </div>
	    </div>
	  </div>
	</div>
	
	
	<nav class="navbar navbar-default navbar-fixed-top">
		
		<div class="container">
			<div class="navbar-header">
			<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
	            <span class="sr-only">Toggle navigation</span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	            <span class="icon-bar"></span>
	          	</button>
				<a class="navbar-brand" href="<?=base_url()?>index.php/main"><img src="<?=base_url()?>web/images/logo.png"/></a>
       		</div>
		
		<div id="navbar" class="navbar-collapse collapse">
			<ul class="nav navbar-nav navbar-right">
            	<li><a href="<?=base_url()?>index.php/tour" class="active">여행가이드</a></li>
            	<li><a href="<?=base_url()?>index.php/board/board_list">사고팔고구인구직</a></li>
            	<li><a href="<?=base_url()?>index.php/board/board_list">자유게시판</a></li>
            	<li><a class="offcanvas_btn">로그인</a></li>
          	</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
		<!-- Indicators -->
		<ol class="carousel-indicators">
			<li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
			<li data-target="#carousel-example-generic" data-slide-to="1"></li>
			<li data-target="#carousel-example-generic" data-slide-to="2"></li>
		</ol>

		<!-- Wrapper for slides -->
		<div class="carousel-inner" role="listbox">
			<div class="item active">
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<div class="carousel-caption">
				</div>
			</div>
			<div class="item">
				<div class="carousel-caption">
				</div>
			</div>
  		</div>


		<!-- Controls -->
		<a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
			<span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
			<span class="sr-only">Previous</span>
		</a>
	
		<a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
			<span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
			<span class="sr-only">Next</span>
		</a>

	</div>
    
	{yield}

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<div class="footer_bottom_content">
						Copyright © 2084 <a href="#">Your Company Name</a>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>web/lib/bootstrap/js/bootstrap.min.js"></script>
	<script>
	$(window).load(function(){
		$('body').on('click', '.offcanvas_btn', function(){
			$('#offcanvass').toggleClass('fh5co-awake');
		});

		$(".join_toggle").click(function(){
			$("#join_form input").val("");
			$("#login_form").toggleClass('display_onoff');
			$("#join_form").toggleClass('display_onoff');
		});

		$("#loginBtn").click(function(){

			$.ajax({
				url:"http://localhost/tasmaniac/index.php/user/ajax_test",
				type:"post",
				data:{
					"user_id":"aaa",
					"user_pw":"bbb",
					"user_nm":"aaa",
					"email":"aaa@aaa.com"
				},
				dataType:"html",
				complete:function(xhr, textStatus){
					alert(xhr.responseText);
					alert("완료");
				}
			});
				
		});
			
	});
	</script>
	</body>
	
</html>