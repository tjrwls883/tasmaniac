<!DOCTYPE html>
<html>
	<head>
		<meta charset="utf-8">
    	<meta http-equiv="X-UA-Compatible" content="IE=edge">
    	<meta name="viewport" content="width=device-width, initial-scale=1">
    	<meta name="description" content="">
    	<meta name="author" content="">
    	<link rel="icon" href="../../favicon.ico">
		<title>타즈매니아 정보는 타즈매니악 </title>
		<!-- Bootstrap -->
		<link href="<?=base_url()?>web/lib/bootstrap/css/bootstrap.min.css" rel="stylesheet">
		<link href="<?=base_url()?>web/lib/toast/resources/css/jquery.toastmessage.css" rel="stylesheet">
		<link href="<?=base_url()?>web/css/main.css" rel="stylesheet">
	</head>
	<body>
	
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
            	<li><a href="<?=base_url()?>index.php/board/board_list/sell">사고팔고구인구직</a></li>
            	<li><a href="<?=base_url()?>index.php/board/board_list/freeboard">자유게시판</a></li>
            	<?php if($this->session->userdata('logged_in')){?>
            		<li><a>마이페이지</a></li>
            		<li><a href="<?=base_url()?>index.php/user/logout">로그아웃</a></li>
            	<?php }else{?>
            		<li><a href="<?=base_url()?>index.php/user/user_login">로그인</a></li>
            	<?php }?>
          	</ul>
        </div><!--/.nav-collapse -->
      </div>
    </nav>
    
    <?php
    	$img_number = mt_rand(1, 4);
    ?>
    
	<div class="hidden-xs" style="background: url('<?=base_url()?>web/images/large_<?=$img_number?>.jpg') no-repeat center center;height: 300px;">
	</div>
	
	<div class="visible-xs" style="background: url('<?=base_url()?>web/images/small_<?=$img_number?>.jpg') no-repeat center center;height: 150px;">
	</div>

	{yield}

	<div class="footer">
		<div class="container">
			<div class="row">
				<div class="text-center">
					<div class="footer_bottom_content">
						<span>Made by Jinbeom and Seokjin</span></br>
						<span style="color: #717171">Copyright © 2017 Us</span>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
	<script src="<?=base_url()?>web/lib/bootstrap/js/bootstrap.min.js"></script>
	<script src="<?=base_url()?>web/lib/toast/javascript/jquery.toastmessage.js"></script>
	<script src="<?=base_url()?>web/js/common.js"></script>
	<script>
	$(function(){

			
	});
	</script>
	</body>
	
</html>